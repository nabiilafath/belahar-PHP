<?php

require_once "db.php";

$nim = $_POST['NIM'];
$nama = $_POST ['Nama'];
$alamat = $_POST ['Alamat'];

$sql = "INSERT INTO mahasiswa (NIM, Nama, Alamat) 
VALUES ('".$NIM."', '".$Nama."', '".$Alamat."')";

if ($conn->query($sql)) {
    echo "data sudah berhasil di tambahkan";
}
else {
    die ("error : " . $conn->error);
}

exit;
