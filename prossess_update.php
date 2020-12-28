<?php

require_once "db.php";

$nim = $_POST['NIM'];
$nama = $_POST ['Nama'];
$alamat = $_POST ['Alamat'];

$sql = "UPDATE mahasiswa SET Nama = '".$nama."', Alamat = '".$alamat."'
        WHERE NIM = '".$nim."'";
        

if ($conn->query($sql)) {

    echo "Data sudah berhasil diupdate";
    header ( 'Location: index.php' );
}
else {
    die ("error : " . $conn->error);
}

exit;
