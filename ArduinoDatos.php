<?php 
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://alexa-c811a.firebaseio.com/BombaAgua';
$url2 = 'https://alexa-c811a.firebaseio.com/Foco';
$url3 = 'https://alexa-c811a.firebaseio.com/Ventilador';
// --- Use your token from Firebase here
$token = 'JOXI8xDQ9RNYd1ozXXSmGjfiXaO26UiqZjo2roBp';
// --- Here is your parameter from the http GET
/// --- Making calls
$fb = new fireBase($url, $token);
$fb2 = new fireBase($url2, $token);
$fb3 = new fireBase($url3, $token);
$response1 = $fb->get($vd);
$response2 = $fb2->get($vd1);
$response3 = $fb3->get($vd2);

echo "N1".$response1." N2".$response2." N3".$response3;
//echo $response1;
?>