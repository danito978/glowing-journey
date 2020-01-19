<!DOCTYPE html>

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
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="js/json2.js" type="text/javascript"></script>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
<script src="livechatters.js" type="text/javascript"></script>

    </head>
    <body id="body" style="font-family: Sans-Serif;background-color: white;">
        <nav role='navigation'>
<div class="topnav" id="myTopnav">
    <a href="regchatters.php.php"  onclick="page(this);" class="active">Viewers</a>
  <a href="home.php" onclick="page(this);">Home</a>
  <a href="f4f.php"  onclick="page(this);">F4F Tool</a>
  <a href="register.php"  onclick="page(this);">Unfollower</a>
  <a href="links.php" onclick="page(this);">Useful Links</a>
  <a href="about.php"  onclick="page(this);">About</a>
    <a id="hidden" style="display:block;margin:auto;text-align:center;" href="https://id.twitch.tv/oauth2/authorize?response_type=token&client_id=v8jjvzxpx7byti5lykiyy5001gueh4&redirect_uri=http://unfollowers.tv/home.php&scope=analytics:read:extensions"><img height="25"  class="logme"  src="img/login.png"></a>
    
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</nav>
       <h1> </h1>
       
        <br>
        <div style="border-radius: .25rem;" class="container">
            <div class="row">
            <br>
                <div id="viewers" class="col-md-12 col-sm-12">
                    <h2 style="text-align: center;color:white;">
                        
                    </h2>
                    <button style='background-color:#6441a5;color:white;text-align: center;display: block;margin: auto;' class='btn'><a style='color:white;' href="<?php $_SERVER['PHP_SELF']; ?>">Refresh viewers</a></button>
                            <?php 

                     /*       ini_set('display_errors',0);
                            //Your ID 
 $channelsApi3 = 'https://api.twitch.tv/helix/users?login='.$_GET["user"].'';
 $channelName3 = '';
 $clientId3 = '40pbvj5imeg5ma36gla9p8ryfkyyyb';
 $ch3 = curl_init();
 curl_setopt_array($ch3, array(
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer ".$_GET['fragmentaccess_token'].""
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $channelsApi3 . $channelName3
 ));
 $response3 = curl_exec($ch3);
 curl_close($ch3);
 $json3 = json_decode($response3, true);
 foreach($json3['data'] as $obju){
     // ID FOR USER
     global $obju;
   //  echo $obju['id'].'<br>';
     
    // echo $obju['display_name'];
 }
                    
     // USERS MODS IN CHAT
         
                            
                            
                // GET CHATTERS        

 $channelsApi3 = "https://tmi.twitch.tv/group/user/".$_GET['user']."/chatters";
 $channelName3 = '';
 $clientId3 = '40pbvj5imeg5ma36gla9p8ryfkyyyb';
 $ch3 = curl_init();
 curl_setopt_array($ch3, array(
    CURLOPT_HTTPHEADER => array(
    'Client-ID: ' . $clientId3
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $channelsApi3 . $channelName3
 ));
 $response3 = curl_exec($ch3);
 curl_close($ch3);
 $json3 = json_decode($response3, true);
 //echo $response3;
      echo '<p style="color:black">Mods:</p>';
     foreach($json3['chatters']['moderators'] as $dada){
    echo '<a target="_blank" href="https://twitch.tv/'.$dada.'">'.$dada.'</a>'.'<br>';
    //echo implode('<br>', $dada);
 }  
  echo '<p style="color:black">Chatters:</p>';
 foreach($json3['chatters']['viewers'] as $dada){
     // $json3['chatters'] i posle izbirame dali sa moderatori ili vieweri ili vip s ['viewers'] , ['chatters']['staff'] e.t.c
     echo '<a target="_blank" href="https://twitch.tv/'.$dada.'">'.$dada.'</a>'.'<br><br>'
             . '';
     global $dada;
    //STOP GET CHATTERS
     
     // CHATTERS ID AS FOLLOWS: 
     
  $channelsApi = 'https://api.twitch.tv/helix/users?login='.$dada.'';
 $channelName = '';
 $clientId = '40pbvj5imeg5ma36gla9p8ryfkyyyb';
 $ch = curl_init();
 curl_setopt_array($ch, array(
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer ".$_GET['fragmentaccess_token'].""
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $channelsApi . $channelName
 ));
 $response = curl_exec($ch);
 curl_close($ch);
 $json = json_decode($response, true);
 foreach($json['data'] as $obj){
     // ID FOR USER
     global $obj;
    // echo $obj['id'];
 }
      
      
        //IF CHATTER FOLLOWS USER
     
     $channelsApi = 'https://api.twitch.tv/kraken/users/'.$obj['display_name'].'/follows/channels/'.$_GET['user'].' ';
 $channelName = '';
 $clientId = '40pbvj5imeg5ma36gla9p8ryfkyyyb';
 $ch = curl_init();
 curl_setopt_array($ch, array(
    CURLOPT_HTTPHEADER => array(
        "client-ID: ".$clientId.""
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $channelsApi . $channelName
 ));
 $response = curl_exec($ch);
 curl_close($ch);
 $json = json_decode($response, true);
 if (isset ($json['message'])){
 echo '<p style="color:red">'.$json['message'].'</p>'; }

     
  
 
  echo '<script>'
 . ' '
 . '
     $.ajax({ url: "https://api.twitch.tv/kraken/users/'.$obj['display_name'].'/follows/channels/'.$obju['display_name'].'?client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb",
        beforeSend: function(xhr) {
             xhr.setRequestHeader("client-ID "+ "40pbvj5imeg5ma36gla9p8ryfkyyyb")
        }, success:
        function(json){ 
        $.each(json.data, function(i, field) {
         $("#go").append("<p>GOOOOOOOOOOOOOOOOOOO</p>");
        });
        }
    });
    '
    . '</script>'; 
  
 }


ini_set('max_execution_time', 300);
      */  ?>
                    <br>
                </div>
        </div>
        </div>
        <div class="container-fluid">
            <div class="row">
            <div id="chat" class="col-md-6 col-lg-6 col-sm-6">
                <br>
                <iframe style="margin: auto;text-align: center;display:block;position:relative;" frameborder="0"
        scrolling="no"
        id="ttvchat"
        src="https://www.twitch.tv/embed/<?php echo $_GET['user'] ?>/chat"
        height="700"
        width="400"></iframe>
                
            </div>
            <div style="background-color:#33333357"  class="col-md-6">
                <p style="color:grey">* use the hover effect for easier navigation</p>
                <div id="go">
                    <h3>Users in Chat:</h3>
                </div>
                <div>
                    <h3>Followed Users:</h3>
                    <div id="followers"></div>
                </div>
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
             window.location.href = window.location.href + "&user=" + Tuser;
             
             if(getUrlParameter('user') === true){
                  document.getElementById("#hideme").style.display = "none";
             }
});

</script>

    </body>
</html>
