<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location: login.php");
  }
?>
<?php
$nama=$_POST['nama'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];



 include "koneksi.php";


 $simpan=$koneksi->query("insert into contact(nama,email,subject,message) 
 values ('$nama','$email','$subject','$message')");
if($simpan==true){

    header("location:contact.php?pesan=inputBerhasil");
  
} else{
    echo "Error";
}

?>