<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$id_siswa=$_POST['id_siswa'];
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$kehadiran=$_POST['kehadiran'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into siswa(id_siswa,nisn,nama,kelas,jenis_kelamin,kehadiran) 
                        values ('$id_siswa', '$nisn', '$nama', '$kelas','$jenis_kelamin','kehadiran')");

if($simpan==true){

    header("location:tampil-siswa.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>