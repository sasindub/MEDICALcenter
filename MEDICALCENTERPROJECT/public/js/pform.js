$(document).ready(function() {

    $("#errorMob").hide();
    $("#errorId").hide();
    $("#errorPass").hide();

    alert("loadone");


    //password valid
    $("#ppassword").keyup(function() {

        let pswd = $("#ppassword").val();
        if (pswd.length > 8) {

            $("#char").css({
                'color': '#25d366',
                'opacity': '1'

            });
        } else {
            $("#char").css({
                'color': 'black',
                'opacity': '0.5'
            });
        }

        let number = /([0-9])/;

        if ($("#ppassword").val().match(number)) {

            $("#int").css({
                'color': '#25d366',
                'opacity': '1'
            });

        } else {
            $("#int").css({
                'color': 'black',
                'opacity': '0.5'
            });
        }

        let upper = /([A-Z])/;

        if ($("#ppassword").val().match(upper)) {

            $("#upp").css({
                'color': '#25d366',
                'opacity': '1'
            });

        } else {
            $("#upp").css({
                'color': 'black',
                'opacity': '0.5'
            });
        }

        if (pswd.length > 8 && $("#ppassword").val().match(number) && $("#ppassword").val().match(upper)) {
            $("#pss").html("Strong Password");
            $("#pss").css({
                'color': '#ab8300',
                'fontWeight': 'bold',
                'opacity': '1'
            });

            $("#upp").hide();
            $("#int").hide();
            $("#char").hide();


        } else {
            $("#pss").html("Password should include,");
            $("#pss").css({
                'color': 'black',
                'opacity': '0.5',
                'fontWeight': 'bold'
            });
            $("#char").show();
            $("#upp").show();
            $("#int").show();
        }

    });

    //password confirm
    $("#pcpassword").keyup(function() {
        let pswd = $("#ppassword").val();
        let c_pswd = $("#pcpassword").val();

        if (c_pswd == pswd) {
            $("#pcpassword").css({
                "borderColor": "#25d366"
            });
        } else {
            $("#pcpassword").css({
                "borderColor": "rgb(212, 61, 61)"
            });
        }
    });



    $("#addformSign").submit(function(e) {
        //prevent refreshing 
        e.preventDefault();

        let username = $("#pusername").val();
        let email = $("#pemail").val();
        let mobile = $("#pmobile").val();
        let addrs = $("#paddress").val();
        let id = $("#pidno").val();
        let pswd = $("#ppassword").val();
        let c_pswd = $("#pcpassword").val();


        //mobile number
        if ($.isNumeric(mobile)) {

            $("#errorMob").hide();
            $("#errormsgMob").html("");
            $("#pmobile").css({
                "borderColor": "rgb(209, 209, 209)"
            });

        } else {

            $("#errorMob").show();
            $("#errormsgMob").html("*Please enter correct mobile number!");
            $("#pmobile").css({
                "borderColor": "rgb(212, 61, 61)"
            });
        }

        //id no 


        let idValid1 = /^[0-9]+v$/;
        let idValid = /^[0-9]+$/;

        if (idValid.test(id) && id.length == 12 || idValid1.test(id) && id.length == 11) {
            $("#errorId").hide();
            $("#errormsgId").html("");
            $("#pidno").css({
                "borderColor": "rgb(209, 209, 209)"
            });
        } else {
            $("#errorId").show();
            $("#errormsgId").html("*Please enter correct NIC number!");
            $("#pidno").css({
                "borderColor": "rgb(212, 61, 61)"
            });
        }

        //password 

        let number = /([0-9])/;
        let upper = /([A-Z])/;

        if (!$("#ppassword").val().match(number) || pswd.length < 8 || c_pswd != pswd || !$("#ppassword").val().match(upper)) {

            alert("done ");
            if (pswd.length < 8) {
                $("#errorPass").show();
                $("#errormsgPass").html("*Please enter valid password!");
                $("#ppassword").css({
                    "borderColor": "rgb(212, 61, 61)"
                });
            }


            if (!$("#ppassword").val().match(number)) {
                $("#errorPass").show();
                $("#errormsgPass").html("*Please enter valid password!");
                $("#ppassword").css({
                    "borderColor": "rgb(212, 61, 61)"
                });
            }

            if (!$("#ppassword").val().match(upper)) {
                $("#errorPass").show();
                $("#errormsgPass").html("*Please enter valid password!");
                $("#ppassword").css({
                    "borderColor": "rgb(212, 61, 61)"
                });
            }

            if (c_pswd != pswd) {
                $("#errorPass").show();
                $("#errormsgPass").html("*Password is not matching!");
                $("#ppassword").css({
                    "borderColor": "rgb(212, 61, 61)"
                });
            }



        } else {

            $("#errorPass").hide();
            $("#errormsgPass").html("");
            $("#ppassword").css({
                "borderColor": "rgb(209, 209, 209)"
            });
        }

        // //confirm password
        // if (c_pswd == pswd) {
        //     $("#errorPass").show();
        //     $("#errormsgPass").html("*Password is not matching!");
        //     $("#ppassword").css({
        //         "borderColor": "rgb(212, 61, 61)"
        //     });
        // } else {
        //     $("#errorPass").hide();
        //     $("#errormsgPass").html("");
        //     $("#pcpassword").css({
        //         "borderColor": "rgb(209, 209, 209)"
        //     });
        // }

        if ($("#ppassword").val().match(number) && pswd.length > 8 && c_pswd == pswd && $("#ppassword").val().match(upper) && $.isNumeric(mobile) && idValid.test(id) && id.length == 12 || idValid1.test(id) && id.length == 11) {

            alert("ok");
            //adding users
            //ajax
            // $.ajax({
            //     url:"http://localhost/MEDICALCENTERPROJECT/public/Patials/ajax.php",
            //     type:"POST",
            //     dataType:"json",
            //     data:data1,
            //     processData:false,
            //     contentType:false,
            //     beforeSend:function(){
            //         console.log("wait data is load");
            //     },

            //     success:function(response){
            //         console.log(response);
            //     },

            //     error:function(request,error){
            //         console.log(arguments);
            //         console.log("Erro" + error);
            //     },
            // });
        }

    });

});