<?php
include_once('header.php');
include_once('link.php');
include_once('footer.php');
?>

<!DOCTYPE html>
<html>

 <div id="frmRegistration">
 <form action="pendaftaran-code.php" class="form-horizontal" method="POST">
    <h1>Pendaftaran</h1>
    <div class="form-group">
        <label for="name" class="control-label col-sm-2">Nickname</label>
        <div class="col-sm-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nickname" required>
        </div>
    </div>
    <div class="form-group">
        <label for="pwd" class="control-label col-sm-2">Password</label>
        <div class="col-sm-6">
            <input type="password" name="password" class="form-control" id="pwd" placeholder="Masukan Password" required>
        </div>
    </div>
    <div class="form-group">
        <label for="fullname" class="control-label col-sm-2">Nama Lengkap :</label>
        <div class="col-sm-6">
            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Masukan Nama lengkap" required>
        </div>
    </div>
    <div class="form-group">
        <label for="birthday" class="control-label col-sm-2">Tanggal lahir :</label>
        <div class="col-sm-6">
            <input type="date" name="birthday" class="form-control" id="birthday" placeholder="Masukan Tanggal Lahir" required/>
        </div>
    </div>
    <div class="form-group">
        <label for="major" class="control-label col-sm-2">Fakultas, Prodi :</label>
        <div class="col-sm-6">
            <input type="text" name="major" class="form-control" id="major" placeholder="Masukan Fakultas, Prodi" required>
        </div>
    </div>
    <div class="form-group">
        <label for="nim" class="control-label col-sm-2">NIM :</label>
        <div class="col-sm-6">
            <input type="number" name="nim" class="form-control" id="nim" placeholder="Masukan NIM" required>
        </div>
    </div>
    <div class="form-group">
        <label for="hobi" class="control-label col-sm-2">Hobi :</label>
        <div class="col-sm-6">
            <input type="text" name="hobi" class="form-control" id="hobi" placeholder="Masukan Hobi" required>
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="control-label col-sm-2">Asal Daerah :</label>
        <div class="col-sm-6">
            <input type="text" name="address" class="form-control" id="address" placeholder="Masukan Asal Daerah" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" class=" btn btn-primary">Submit</button>
        </div>
    </div>
 </form>
 </div>
</html>