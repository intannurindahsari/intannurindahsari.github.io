<?php
session_start(); // Mulai sesi

include "koneksi.php";

// Tangkap data dari formulir
$id = $_POST['id'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$golongan = $_POST['golongan'];
$jabatan = $_POST['jabatan'];

// Query untuk menambah data
$query = "INSERT INTO pegawai (id, nama, nip, alamat, golongan, jabatan) VALUES ('$id', '$nama', '$nip', '$alamat', '$golongan', '$jabatan')";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil ditambahkan';
    header('Location: simpeg.php');
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>