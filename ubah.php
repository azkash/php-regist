<?php 
require 'function.php';
// ambil data di url
$id = $_GET["id"];
// query data mahasiswa berdasarkan query nya
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];



// cek if submit pressed
if (isset($_POST["submit"])){

    // cek apakah data berhasil edit atau tidak
    if (ubah($_POST) > 0) {
       echo"
        <script>
            alert('data berhasil diubah')
            document.location.href = 'index.php'
        </script>
       ";
    } else {
        echo "data gagal diubah";
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
    <h1>edit Data Mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$mhs["id"];?>">
        <input type="hidden" name="gambarLama" value="<?=$mhs["gambar"];?>">
        <ul>
            <li>
                <label for="nrp">NRP:</label>
                <input type="text" name="nrp" id="nrp" value="<?=$mhs["nrp"];?>">
            </li>
            <li>
                <label for="nama">NAMA:</label>
                <input type="text" name="nama" id="nama" value="<?=$mhs["nama"];?>">
            </li>
            <li>
                <label for="email">EMAIL:</label>
                <input type="text" name="email" id="email" value="<?=$mhs["email"];?>">
            </li>
            <li>
                <label for="jurusan">JURUSAN:</label>
                <input type="text" name="jurusan" id="jurusan" value="<?=$mhs["jurusan"];?>">
            </li>
            <li>
                <label for="gambar">GAMBAR:</label>
                <br>
                <img src="img/<?=$mhs['gambar'];?>" alt="" width="50px">
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">edit data</button>
            </li>
        </ul>




    </form>
</body>
</html>