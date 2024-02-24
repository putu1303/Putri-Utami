<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$Id_guru=$_POST['Id_guru'];
$nip=$_POST['nip'];
$nama=$_POST['nama'];
$mata_pelajaran=$_POST['mata_pelajaran'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

$ubah = $koneksi->query("UPDATE tb_guru SET nip='$nip', nama='$nama', mata_pelajaran='$mata_pelajaran', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE Id_guru='$Id_guru'");

if($ubah==true){

    header("location:tampil-guru.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>