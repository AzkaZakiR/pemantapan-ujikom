<?php 
session_start();
include 'koneksi.php';

header('Content-Type: application/json');

$sql = "SELECT nim, nama, jurusan FROM mahasiswa";
$result = $conn->query($sql);

$data = array();

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    $data[] = $row;
    // echo json_encode(['message' => 'Data not found']);
}

echo json_encode($data);

$conn->close();
?>