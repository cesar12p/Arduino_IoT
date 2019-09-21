<?php
$data='{"concepto":"curso de php","subtotal":"200","ID":"1"}';
$url="https://pythonhome-e022d.firebaseio.com/presupuestos.json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: text/plain'));

$response = curl_exec($ch);
if( curl_errno($ch) ){
echo 'Error'.curlerrno($ch);
}else{
echo "Ya se inserto";
}
?>
