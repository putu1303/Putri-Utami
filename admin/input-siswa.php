<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br><br><br>
                <form action="proses-input-siswa.php" method="POST">
                    

                   
                    <div class="form-group">
                        <label for="NISN">NISN</label>
                        <input type="text" name="NISN" class="form-control">
                    </div>
                     <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="Nama" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="Kelas">Kelas</label>
                        <select name="Kelas" class="form-control">
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Jenis_kelamin">Jenis Kelamin</label>
                        <select name="Jenis_kelamin" class="form-control">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="Kehadiran">Kehadiran</label>
                        <select name="Kehadiran" class="form-control">
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