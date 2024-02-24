<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nip=$_POST['nip'];
$nama=$_POST['nama'];
$mata_pelajaran=$_POST['mata_pelajaran'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into tb_guru(nip,nama,mata_pelajaran,jenis_kelamin,alamat) 
                        values ('$nip', '$nama','$mata_pelajaran','$jenis_kelamin', '$alamat')");

if($simpan==true){

    header("location:tampil-guru.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>