<?php

function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
function altProxy($ip,$switch){
    
    if($switch == 1){
        $url1 = "https://blackbox.ipinfo.app/lookup/".$ip;
        $ch3 = curl_init();
        curl_setopt($ch3,CURLOPT_URL,$url1);
        curl_setopt($ch3,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
        $resp1 = curl_exec($ch3);
        curl_close($ch3);
        $result = $resp1;
        if($result == "Y") {
            return true;
        }elseif($result == "N"){
            return false;
        }
    }elseif($switch == 0){
            return false;
    }
    
}



$don = getUserIP();
if (altProxy($don,1)) {

    header("location: https://www.google.com");
	exit();
    
}








?>