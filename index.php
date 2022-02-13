<?php

$link = mysqli_connect("172.19.0.2","root","hayoapa","trucorp");
if(!$link){
echo "tidak bisa terhubung ke MySQL" . PHP_EOL;
exit;
}
$data = $link->query("SELECT * FROM users");
echo"<table border='1' cellpadding='10' cellspacing='0'>";
        echo"<tr>";
            echo"<th>ID</th>";
            echo"<th>Nama</th>";
            echo"<th>Alamat</th>";
            echo"<th>Jabatan</th>";
        echo"</tr>";
while($row = mysqli_fetch_assoc($data)){
    echo"<tr>";
        echo"<td>" .$row['ID']." </td>";
        echo"<td>" .$row['Nama']." </td>";
        echo"<td>" .$row['Alamat']." </td>";
        echo"<td>" .$row['Jabatan']." </td>";
    echo"</tr>";
}
echo"</table>";
?>
