<?php

$link = mysqli_connect("172.19.0.2","root","hayoapa","trucorp");
if(!$link){
echo "tidak bisa terhubung ke MySQL" . PHP_EOL;
exit;
}
$data = $link->query("SELECT * FROM users");
echo "Jumlah users: ".$data->num_rows;
?>

