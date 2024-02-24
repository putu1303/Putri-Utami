<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id_siswa=$_POST['id_siswa'];
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$kehadiran=$_POST['kehadiran'];

$ubah=$koneksi->query("update siswa set id_siswa='$id_siswa', nisn='$nisn',kelas='$kelas' jenis_kelamin='$jenis_kelamin', kehadiran='$kehadiran' where siswa_id='$id'");

if($ubah==true){

    header("location:tampil-siswa.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>