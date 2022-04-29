alert("head");
$(function() {
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();



        if (scroll >= 50) {
            $('nav').addClass('stickyadd');
            $('nav').removeClass('stick');

            // $('#cht').css({
            //     "visibility": "visible"
            // });


            //change colors
            $('#hm').css({
                "color": "black"
            });

            $('#abt').css({
                "color": "black"
            });

            $('#serv').css({
                "color": "black"
            });

            $('#cnt').css({
                "color": "black"
            });

            $('#dct').css({
                "color": "black"
            });

            $('#nws').css({
                "color": "black"
            });

            $('#lgbtn').css({
                "color": "black",

            });

            $('#lglink').css({
                "border": "2px solid black",
                "backgroundColor": "transparent"

            });

            $('#logo').attr('src', 'assets/img/logoblack.png');

            $('#navbtn').css({
                "backgroundColor": "black"

            });






        } else {
            $('nav').removeClass('stickyadd');
            $('nav').addClass('stick');

            // $('#cht').css(
            //     {
            //         "visibility":"hidden"
            //     }
            // );

            //cahnge colors
            $('#hm').css({
                "color": "white"
            });



            $('#abt').css({
                "color": "white"
            });

            $('#serv').css({
                "color": "white"
            });

            $('#cnt').css({
                "color": "white"
            });

            $('#dct').css({
                "color": "white"
            });

            $('#nws').css({
                "color": "white"
            });

            $('#lgbtn').css({
                "color": "white",

            });

            $('#lglink').css({
                "border": "2px solid white",
                "backgroundColor": "transparent"

            });

            $('#logo').attr('src', 'assets/img/logo.png');

            $('#navbtn').css({
                "backgroundColor": "transparent"

            });


            if ($(window).width() < 1000) {
                $('#navbarSupportedContent').css({
                    "backgroundColor": "rgba(92,132,236, 0.9)"

                });
            } else {
                $('#navbarSupportedContent').css({
                    "backgroundColor": "transparent"

                });

            }

        }
    })
    AOS.init();
});
// particlesJS.load("particles-js","js/particlesjs-config.json");