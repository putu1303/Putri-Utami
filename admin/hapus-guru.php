<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$id=$_GET['id'];

include "../koneksi.php";

$hapus=$koneksi->query("DELETE FROM tb_guru WHERE Id_guru='$id'");


if($hapus==true){

    header("location:tampil-guru.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>