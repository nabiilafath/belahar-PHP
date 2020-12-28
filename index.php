<?php
require_once "db.php";

$sql = "SELECT * FROM mahasiswa";

$hasil = $conn->query($sql);

?>

<table border="1" cellpadding="3">
    <tr>
        <th>Nomor</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
    </tr>

    <?php


$nomor = 0;
while($row=$hasil->fetch_assoc())
{
    $nomor++;
    ?>
    <tr>
        <td><?=$nomor;?></td>
        <td><?=$row['NIM'];?></td>
        <td><?=$row['Nama'];?></td>
        <td><?=$row['Alamat'];?></td>
        <td>
        <a href="update.php?NIM=<?=$row['NIM'];?>">Update</a>
        <a href="pressess-delete.php">Hapus</a>
        </td>
    </tr>

    <?php
    }
    ?>
</table>

<a href="create.php">Tambah Data</a>
<a href="pressess-delete.php">Hapus</a>