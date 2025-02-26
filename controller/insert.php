<?php
session_start();
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['namaMahasiswa'];
$jurusan = $_POST['jurusan'];

if(empty($nim) || empty($nama) || empty($jurusan)){
    echo "<center><h1>Data tidak boleh kosong</h1></center>";
    // header('Location: ../views/insert.php');
    // exit();
}
$sql = "INSERT INTO mahasiswa (nim, nama, jurusan) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("isi", $nim, $nama, $jurusan);

if($stmt->execute()){
    $_SESSION['message'] = 'Data berhasil disimpan';

    echo "<center><h1>Data berhasil disimpan</h1></center>";
    header('Location: ../views/home.php');
    exit();
} else {
    echo "<center><h1>Data gagal disimpan</h1></center>";
    // header('Location: ../views/insert.php');
    // exit();
}
$stmt->close();
$conn->close();
?>
// if ($conn->query($sql) === TRUE) {
//     echo "<center><h1>Data berhasil disimpan</h1></center>";
//     header('Location: ../views/home.php');
//     exit();
// } else {
//     echo "<center><h1>Data gagal disimpan</h1></center>";
//     // header('Location: ../views/insert.php');
//     // exit();}
