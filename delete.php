<?php
require_once 'db.php';

$Alamat = $_GET['Alamat'];

mysql_query($mysqli, "DELETE FROM Mahasiswa WHERE Alamat='$Alamat' ")
or die (mysql_error());

header("Location:index.php?pesan=hapus");
?>