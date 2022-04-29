<?php 
   require_once '../app/libraries/Database.php';
   require_once '../app/config/config.php';

   $object = new Database;
   echo $object->connect();

class User extends Database{
    protected $tableName="patient";


    //function to add users
public function add($data){
    //first check data is emty or not 
    if(!empty($data)){
        $fileds=$placeholder=[];
        foreach($data as $filed =>$value)
        {
           $fileds[]=$filed;
           //storing values placeholder
           $placeholder[]=":{field}" ;
        }
    }
    // $sql="INSERT INTO{$this->tableName} (idno,pname,email,tpno,address,password,img) Values(:)"

    $sql="INSERT INTO{$this->tableName} (". implode(',',$fileds).") VALUES (". implode(',',$placeholder).")";

    //creating statement to avoid sql injection

    $stmt=$this->dbHandler->prepare($sql);
    try{
        $this->dbHandler->beginTransaction();
        $stmt->execute($data);
        $lastInsertedId=$this->dbHandler->lastInsertId();
        $this->dbHandler->commit();
        return $lastInsertedId;
    }

    catch(PDOException $e)
    {
        echo "Error:".$e->getMessage();
        //if the inserted data wrong roll back to what past was it.
        $this->dbHandler->rollback();
    }


     
}

    //funtion to get rows
public function getRows($start=0,$limit=4){
    $sql="SELECT * FROM {$this->tableName} ORDER BY DESC LIMIT {$start},{$limit}";

    $stmt=$this->dbHandler->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount()>0){
        $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
        $results=[];
    }

    return $results;
}


    // function to get single row

    public function getRow($field,$value)
    {
        $sql="SELECT * FROM {$this->tableName} WHERE {$field}=:{$field}";

        $stmt=$this->dbHandler->prepare($sql);
        $stmt->execute();
    
        if($stmt->rowCount()>0){
            $result=$stmt->fetch(PDO::FETCH_ASSOC);
        }
        else{
            $result=[];
        }
    
        return $result;
    }

    //function to count number of rows

    public function getCount(){
        $sql="SELECT count(*) as pcount FROM {$this->tableName}";

        $stmt=$this->dbHandler->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result['pcount'];
    }

    //function to upload photo
    public function uploadPhoto($file)
    {
        if(!empty($file)){
            $fileTempPath=$file['tmp_name'];
            $fileName=$file['name'];
            $fileType=$file['type'];
            $fileNameCmps=explode('.',$fileName);
            $fileExtension=strtolower(end($fileNameCmps));
            $newFileName=md5(time().$fileName) . '.' .
            $fileExtension;

            $allowedExtn=["png","jpg","jpeg"];

            if(in_array($fileExtension,$allowedExtn))
            {
                $uploadFileDir=getcwd().'/uploads';
                $destFilePath=$uploadFileDir . $newFileName;
                if(move_uploaded_file($fileTempPath,$destFilePath)){
                    return $newFileName;
                }

            }

        }
    }

    //function to update 

    //function to delte


    //function to search
}