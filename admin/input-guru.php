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
                <form action="proses-input-guru.php" method="POST">
                    

                   
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" class="form-control">
                    </div>
                     <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="mata_pelajaran">MATA PELAJARAN</label>
                        <select name="mata_pelajaran" class="form-control">
                            <option value="Matematika">Matematika</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Agama">Agama</option>
                            <option value="Olahraga">Olahraga</option>
                            <option value="Fisika">Fisika</option>
                            <option value="Kimia">Kimia</option>
                            </select>
                            
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="textarea" name="alamat" class="form-control">
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