<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://alexa-c811a.firebaseio.com/';
// --- Use your token from Firebase here
$token = 'JOXI8xDQ9RNYd1ozXXSmGjfiXaO26UiqZjo2roBp';
// --- Here is your parameter from the http GET
//$v1 = $_GET['v1'];
//$v2 = $_GET['v2'];
//$v3 = $_GET['v3'];
$v4 = $_GET['v4'];
$v5 = $_GET['v5'];
//$v6 = $_GET['v6'];
//$v7 = $_GET['v7'];
$v8 = $_GET['v8'];
//$v9 = $_GET['v9'];
echo $v4;
echo $v5;
echo $v8;
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
//$p1 = '/dhtHumedad';
//$p2 = '/dhtTemperatura';
//$p3 = '/dhtCalor';
$p4 = '/Ventilador';
$p5 = '/Foco';
//$p6 = '/SenFuego';
//$p7 = '/SenGas';
$p8 = '/BombaAgua';
//$p9 = '/SenHumedadTierra';

/// --- Making calls
$fb = new fireBase($url, $token);
//$response1 = $fb->set($p1, $v1);
//$response2 = $fb->set($p2, $v2);
//$response3 = $fb->set($p3, $v3);
$response4 = $fb->set($p4, $v4);
$response5 = $fb->set($p5, $v5);
//$response6 = $fb->set($p6, $v6);
//$response7 = $fb->set($p7, $v7);
$response8 = $fb->set($p8, $v8);
//$response9 = $fb->set($p9, $v9);

echo "Listo....";
?>
