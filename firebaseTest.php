<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://alexa-c811a.firebaseio.com/';
// --- Use your token from Firebase here
$token = 'JOXI8xDQ9RNYd1ozXXSmGjfiXaO26UiqZjo2roBp';
// --- Here is your parameter from the http GET
$arduino_data = $_GET['arduino_data'];
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$firebasePath = '/foco';
/// --- Making calls
$fb = new fireBase($url, $token);
$response = $fb->set($firebasePath, $arduino_data);
?>
