<?php
$connection = new mysqli("localhost","root","","twitchun");
$channelsApi = 'https://api.twitch.tv/helix/users?login='.$_GET['name'].'';
 $channelName = '';
 $clientId = 'pm7oxir9hxzfi0qrtghrl0hnzdxdrg';
 $ch = curl_init();
 curl_setopt_array($ch, array(
    CURLOPT_HTTPHEADER => array(
       'Client-ID: ' . $clientId
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $channelsApi . $channelName
 ));
 $response = curl_exec($ch);
 curl_close($ch);
 $json = json_decode($response, true);
 foreach($json['data'] as $id){
     if($id['id'] != NULL){
        // header('Location: unfollow.php?id='.$id['id'].'&name='.$_GET['name'].'');
     }

 }
 echo 'Redirecting, please wait!<br>If you have not been redirected, the name you have entered is invalid!';