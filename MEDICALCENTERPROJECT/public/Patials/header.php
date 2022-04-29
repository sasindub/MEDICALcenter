
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEWDISEWANA | MEDICAL CENTER</title>

    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
   

     <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,700;0,800;1,800&family=Nunito+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">

     <!-- head css -->
     <link rel="stylesheet" href="css/head.css"/>
     <link rel="stylesheet" href="css/stylee.css"/>

     <script src="https://kit.fontawesome.com/5181814e6f.js" crossorigin="anonymous"></script>
     
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>
<body>



<!-- head start -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets\img\logo.png" class="img-fluid" style="width:40%;" id="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" id="navbtn"></span>
            </button>
            <div class="collapse navbar-collapse bg-clr" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active me-lg-3 me-sm-0" aria-current="page" href="#"><span class="clr" id="hm">Home</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-lg-3 me-sm-0" href="#"><span class="clr" id="abt">About</span></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle me-lg-3 me-sm-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="clr" id="serv">Service</span>
                </a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Channel Doctors</a></li>
                    <li><a class="dropdown-item" href="#">Check Reports</a></li>
                    <li><a class="dropdown-item" href="#">OPD</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Pharmacy</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link me-lg-3 me-sm-0" href="#"><span class="clr" id="dct">Doctors</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-lg-3 me-sm-0" href="#"><span class="clr" id="cnt">Contact Us</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-lg-5 me-sm-0" href="#"><span class="clr" id="nws">News & Events</span></a>
                </li>
                <li class="nav-item ms-lg-4 ms-sm-0">
                <a class="nav-link lgbtn lst" id="lglink" data-bs-toggle="modal" data-bs-target="#usermodal" style="cursor: pointer;"><span class="mx-3" id="lgbtn">Sign In</span></a>
                </li>


            </ul>
            </div>
        </div>
    </nav>
</header>

<!-- head end -->


<!-- main section start -->

<main>
    <section id="home" class="hero">
        <div id="particles-js"></div>
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-6 col-sm-12 head1 order-lg-1 col-12 order-sm-2 order-2" >
                        
                            <div class="col-lg-12 col-sm-12 hero-content pt-250 bg">
                            <h1 class="fnt d-none d-lg-block"  data-aos="fade-right" data-aos-duration="1000">Your Helth Care is<br> Our Purposel</h1><br>
                            <h2 style="font-weight: 200; font-size:16pt;"  data-aos="fade-right" data-aos-duration="1000">We work to take care of your health and body <br><br><br><span class="back py-1 px-2">HOTLINE - 0352247294</span></h2>
                            </div>    
                     
                    </div>


                    <div class="col-lg-6 col-sm-12 col-12 pt-200 order-lg-2 order-sm-1 order-1 left" data-aos="fade-left" data-aos-duration="1000">
                        <div class="login py-2 px-3 ">
                        <form>
                            <h1 class="text-center pb-3 cent">Log In</h1>
                            <div class="mb-3">
        
                                <div class="input-group mb-3">
  			                    <span class="input-group-text" ><i class="fas fa-user text-dark bg-light"></i></span>
  			                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			                     placeholder="Enter your user name" autocomplete="off" required="required" id="user" name="userName" style="height:50px;">
		                        </div>

                                
                            </div>
                            <div class="mb-3">

                                <div class="input-group mb-3">
  			                    <span class="input-group-text" ><i class="fas fa-key text-dark bg-light"></i></span>
  			                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			                     placeholder="Enter your user password" autocomplete="off" required="required" id="logpswd" name="logpassword" style="height:50px;">
		                        </div>

                            </div>
                            <button type="submit" class="btn btn-primary w-100 mb-3" style="font-weight: bold; font-size: 15pt;  font-family: 'Mulish'; height:50px;">Log In</button>
                            <p style="text-align: center;"><a href="#" class="aa" >Forgot Password?</a></p>
                            
                            
                        </form>
                    </div>



                </div>

            </div>
       </div>
    </section>
</main>

<!-- main section end -->