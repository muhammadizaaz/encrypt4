<?php
include_once('link.php');
?>

<!DOCTYPE html>
<html>

 <div id="frmRegistration">
 <form action="pendaftaran-code.php" class="form-horizontal" method="POST">
    <h1>Isi Form</h1>
    <div class="form-group">
        <label for="name" class="control-label col-sm-2">Name</label>
        <div class="col-sm-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nickname" required>
        </div>
    </div>
    <div class="form-group">
        <label for="pwd" class="control-label col-sm-2">Email</label>
        <div class="col-sm-6">
            <input type="password" name="password" class="form-control" id="pwd" placeholder="Masukan Password" required>
        </div>
    </div>
    <div class="form-group">
        <label for="pwd" class="control-label col-sm-2">Number</label>
        <div class="col-sm-6">
            <input type="password" name="password" class="form-control" id="pwd" placeholder="Masukan Password" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
		<label class="mr-2">Upload your BMC (<10mb): Berkas_BMC_INCREASE_NAMA_TIM_KETUA TIM_JUDUL BMC</label>
		<input type="file" name="file"> 
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