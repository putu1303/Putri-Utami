<?php include "header.php"; ?>
<!DOCTYPE php>
<php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/logo/icon.png" type="image/x-icon">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="styleseet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="styleseet">

 
    <!-- Bootstrap CSS -->
    <title>Kopi Kenangan Shop</title>
    <style>
      body {
        padding-top: 100px;
      }
        </style>
  </head>
<body >

<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1>Data Contact</h1>
            <?php 
            if(@$_GET['pesan']=="inputBerhasil"){
            ?>
                <div class="alert alert-success">
                    Penyimpanan Berhasil!
                </div>
            <?php
            }
            ?>

            <?php 
            if(@$_GET['pesan']=="hapusBerhasil"){
            ?>
                <div class="alert alert-success">
                    Data Berhasil Dihapus!
                </div>
            <?php
            }
            ?>

            <?php 
            if(@$_GET['pesan']=="editBerhasil"){
            ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>
            <?php
            }
            ?>

            <table id="example" class="table table-striped">
                
                <thead>
                    <tr>
                        <th>Nama Contact</th><th>Email Contact</th><th>Judul Contact</th><th>Isi Contact</th>
                        <th>
                           
                        </th>
                    </tr> 
                </thead> 
                <tbody>
                    <?php
                    include "../koneksi.php";
                    $sql=$koneksi->query("select * from contact order by nama ASC");
                    while($row= $sql->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['nama']?></td>
                        <td><?php echo $row['email']?></td>
                        
                        <td><?php echo $row['subject']?></td>
                        <td><?php echo $row['message']?></td>
                       
                        <td>
                           
                        <a href="hapus-contact.php?id=<?php echo $row['id_contact']?>" onclick="return confirm('Anda yakin menghapus data?')" class="btn btn-danger btn-sm">
    <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-trash" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
        <path d="M5.5 1a.5.5 0 0 1 .5.5V2h4V1.5a.5.5 0 0 1 1 0V2h1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h1V1.5a.5.5 0 0 1 .5-.5zM2 4v10a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V4H2z"/>
        <path fill-rule="evenodd" d="M6.5 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V6h-3V5.5zm4.5 0V6h-3v-.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5z"/>
    </svg>
    Hapus
</a>


                        </td>
                    </tr>
                    <?php    
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>
</body>
</html>


