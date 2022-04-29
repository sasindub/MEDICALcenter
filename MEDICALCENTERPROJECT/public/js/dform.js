$(document).ready(function() {

    alert("docform");
    $("#docerrorMob").hide();
    $("#docerrorId").hide();
    $("#docerrorPass").hide();

    $("#addformdoc").submit(function(e) {
        e.preventDefault();

        alert("sman");

        let username = $("#username").val();
        let email = $("#email").val();
        let mobile = $("#mobile").val();
        let addrs = $("#address").val();
        let id = $("#idno").val();
        let pswd = $("#password").val();
        let c_pswd = $("#cpassword").val();
        let poss = $("#position").val();
        alert(poss);
        let wyears = $("#workyear").val();
        let hospital = $("#whospital").val();

        //position 
        if (poss == "0") {
            alert("error");
        }


    });
});