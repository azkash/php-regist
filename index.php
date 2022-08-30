<?php 
require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");


// tombol cari di klik
if(isset ($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <a href="tambah.php">tambah data mahasiswa</a>
    <br>
    <form action="" method="POST">
        <input type="text" name="keyword" placeholder="Cari disini" autocomplete="off" autofocus>
        <button type="submit" name="cari">Search</button>
    </form>
    <br>

    <table border="1" cellpadding="5" cellspacing="0">

        <tr>
            <td>No.</td>
            <td>Aksi</td>
            <td>gambar</td>
            <td>NRP</td>
            <td>nama</td>
            <td>email</td>
            <td>jurusan</td>
        </tr>
        <?php 
        $no = 1;
        foreach ( $mahasiswa as $row):
        
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]?>">ubah</a>  
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin hapus?')">hapus</a>
                
            </td>
            <td><img src="img/<?= $row["gambar"];?>" width="50px" alt=""></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php endforeach; ?>
        
    </table>
</body>
</html>