// ambil data mahasiswa dari objek result / fetch
// mysqli_fetch_row() // mengenmbalikan array numerik
// mysqli_fetch_assoc() // array asosiatif
// mysqli_fetch_array() // menegmbalikan keduanya
// mysqli_fetch_object()

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs["1"]);

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs["jurusan"]);

// $mhs = mysqli_fetch_array($result);
// var_dump($mhs["jurusan"]);

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);

// while($mhs = mysqli_fetch_assoc($result)){


// var_dump($mhs["jurusan"]);
// }