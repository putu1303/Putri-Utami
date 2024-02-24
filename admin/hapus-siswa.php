<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$id=$_GET['id'];

include "../koneksi.php";

$hapus=$koneksi->query("DELETE FROM tb_siswanegri WHERE Id_Siswa='$id'");


if($hapus==true){

    header("location:tampil-siswa.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>