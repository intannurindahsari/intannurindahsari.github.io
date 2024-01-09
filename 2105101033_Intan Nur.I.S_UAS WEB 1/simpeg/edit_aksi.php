<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$golongan = $_POST['golongan'];
$jabatan = $_POST['jabatan'];

mysqli_query($koneksi,"update pegawai set nama='$nama', nip='$nip', alamat='$alamat', golongan='$golongan', jabatan='$jabatan' where id='$id'");
 
header("location:simpeg.php?pesan=update"); 
?>