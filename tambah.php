<?php 
require 'function.php';
// cek if submit pressed
if (isset($_POST["submit"])){

    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
       echo"
        <script>
            alert('data berhasil ditambhkan')
            document.location.href = 'index.php'
        </script>
       ";
    } else {
        echo "data gagal ditambhakan";
    }

    
   
    // cek apakah data berhasil ditambahkan atau tidak
    // if (var_dump(mysqli_affected_rows($conn) > 0)){
    //     echo "input berhasil";

    // } else {
    //     echo"gagal";
    //     echo"<br>";
    //     echo mysqli_error($conn);
    // }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nrp">NRP:</label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="nama">NAMA:</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">EMAIL:</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">JURUSAN:</label>
                <select name="jurusan" id="jurusan">
                    <option value="teknik informatika">Teknik Informatila</option>
                    <option value="manajemen komunikasi">Manajemen Komunikasi</option>
                </select>
            </li>
            <li>
                <label for="gambar">GAMBAR:</label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>




    </form>
</body>
</html>