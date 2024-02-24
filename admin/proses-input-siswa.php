 <?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nis=$_POST['nis'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jurusan=$_POST['jurusan'];
$alamat=$_POST['alamat'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into siswa(nis,nama,jenis_kelamin,tempat_lahir,tanggal_lahir,jurusan,alamat) 
                        values ('$nis', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$jurusan', '$alamat')");

if($simpan==true){

    header("location:tampil-siswa.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>