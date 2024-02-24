<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$NISN=$_POST['NISN'];
$Nama=$_POST['Nama'];
$Kelas=$_POST['Kelas'];
$Jenis_kelamin=$_POST['Jenis_kelamin'];
$Kehadiran=$_POST['Kehadiran'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into tb_siswanegri(NISN,Nama,Kelas,Jenis_kelamin,Kehadiran) 
                        values ('$NISN', '$Nama','$Kelas','$Jenis_kelamin', '$Kehadiran')");

if($simpan==true){

    header("location:tampil-siswa.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>