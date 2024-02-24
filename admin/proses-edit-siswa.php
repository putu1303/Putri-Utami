<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['Id_Siswa'];
$NISN=$_POST['NISN'];
$Nama=$_POST['Nama'];
$Kelas=$_POST['Kelas'];
$Jenis_kelamin=$_POST['Jenis_kelamin'];
$Kehadiran=$_POST['Kehadiran'];

$ubah=$koneksi->query("update tb_siswanegri set NISN='$NISN', Nama='$Nama', Kelas='$Kelas', Jenis_kelamin='$Jenis_kelamin', Kehadiran='$Kehadiran' where Id_Siswa='$id'");

if($ubah==true){

    header("location:tampil-siswa.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>