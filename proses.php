<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];

$sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI) VALUES ('$nama', '$email', '$isi')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan. <a href='index.php'>Kembali ke Form</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
