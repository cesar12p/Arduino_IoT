<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://xiaomi-6caed.firebaseio.com/';
// --- Use your token from Firebase here
$token = 'jshWGPL2S8OuxorKP510NrRJUxN2cOMzp4vBl2SJ';
// --- Here is your parameter from the http GET
$varfoco = $_GET['foco'];
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$nomfoco = '/Foco';
/// --- Making calls
$fb = new fireBase($url, $token);
$response4 = $fb->set($nomfoco, $varfoco);


echo "Datos Ingresados con exito....";
?>
