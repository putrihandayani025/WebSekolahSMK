<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['siswa_id'];
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jurusan=$_POST['jurusan'];
$alamat=$_POST['alamat'];

$ubah=$koneksi->query("update siswa set nis='$nis', nama='$nama', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jurusan='$jurusan', alamat='$alamat' where siswa_id='$id'");

if($ubah==true){

    header("location:tampil-siswa.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>