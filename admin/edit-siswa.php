<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
           
            <div class="col-md-12">
                <form action="proses-edit-siswa.php" method="POST">
                <br><br><br><br>
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from tb_siswanegri where Id_Siswa='$id'");
                $row=$tampil->fetch_assoc();
                ?>
            
                    

                    <div class="form-group">
                        <label for="NISN">NISN</label>
                        <input type="hidden" name="Id_Siswa" value="<?php echo $row['Id_Siswa']?>" class="form-control">
                        <input type="text" name="NISN" class="form-control" value="<?php echo $row['NISN']?>">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="Nama" class="form-control" value="<?php echo $row['Nama']?>">
                    </div>


                    <div class="form-group">
                        <label for="Kelas">Kelas</label>
                        <select name="Kelas" class="form-control">
                        <option value="<?php echo $row['Kelas']?>" selected><?php echo $row['Kelas']?></option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="Jenis_kelamin">Jenis_kelamin</label>
                        <select name="Jenis_kelamin" class="form-control">
                        <option value="<?php echo $row['Jenis_kelamin']?>" selected><?php echo $row['Jenis_kelamin']?></option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="Kehadiran">Kehadiran</label>
                        <select name="Kehadiran" class="form-control">
                        <option value="<?php echo $row['Kehadiran']?>" selected><?php echo $row['Kehadiran']?></option>
                            <option value="Hadir">Hadir</option>
                            <option value="Tidak Hadir">Tidak Hadir</option>
                        </select>
                    </div>
                    <br>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
             <br>
                    
            </div>
        </div>
    </div>

<?php include "footer.php";?>