<?php
include_once('header.php');
include_once('link.php');
include_once('footer.php');
?>

<!DOCTYPE html>
<html>
<div id="frmRegistration">
<form action="login-code.php" class="form-horizontal" method="POST">
    <h1>Login</h1>

    <div class="form-group">
        <label for="email" class="control-label col-sm-2">Nickname</label>
        <div class="col-sm-6">    
            <input type="text" class="form-control" name="name" id="name" placeholder="Massukan Nickname" required/>
        </div>
    </div>
    <div class="form-group">
        <label for="pwd"class="control-label col-sm-2">Password</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" name="password" id="pwd" placeholder="Masukan Password" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
    </div>
</form>
</div>
</html>