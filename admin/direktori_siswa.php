<?php include "header.php"; ?>
<!doctype php>
<html>
<head>
    <title>Login admin</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
      body {
        padding-top: 100px;
      }
        </style>
</head>

<body>
<?php 
    session_start();
    if (empty($_SESSION[user_id])){
        header ("localtion:../login.php")
    }
    ?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Siswa</h1>
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


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>NISN</th><th>Nama</th><th>Kelas</th><th>Jenis Kelamin</th><th>Kehadiran</th>
                
                    
                
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from tb_siswanegri order by NISN ASC");

        while($row= $sql->fetch_assoc() ){
        ?>

            <tr>
                <td><?php echo $row['NISN']?></td>
                <td><?php echo $row['Nama']?></td>
                <td><?php echo $row['Kelas']?></td>
                <td><?php echo $row['Jenis_kelamin']?></td>
                 <td><?php echo $row['Kehadiran']?></td>
                
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
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

    
</body>
</html>