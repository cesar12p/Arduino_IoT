<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://xiaomi-6caed.firebaseio.com/Foco';
// --- Use your token from Firebase here
$token = 'jshWGPL2S8OuxorKP510NrRJUxN2cOMzp4vBl2SJ';
// --- Here is your parameter from the http GET


// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here

/// --- Making calls
$fb = new fireBase($url, $token);
//---------------------------------
$response = $fb->get($vd);
echo "N1".$response;
?>
