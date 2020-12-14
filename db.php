<?php

$servername ="localhost";
$username = "root";
$password = "";
$nama_database = "belajarphp";

//create connection
$conn = new mysqli ($servername, $username, $password, $nama_database);

//check connection
if ($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
}

$sql = "INSERT INTO mahasiswa VALUES ('4020', 'nabiila', 'berau')";

if ($conn->query($sql)) {
    echo "data sudah berhasil di tambahkan";
}
else {
    die ("error : " . $conn->error);
}

?>

