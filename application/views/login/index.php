<br>
<h2><?= $title ?></h2>


<?= form_open('login/index', ''); ?>
<div class="container">
    <div class="form-group">
        <label for="inputEmail1">E-mail Address<label class="text-danger">*</label></label>
        <input name="userEmail" type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" 
        placeholder="Masukkan E-Mail">
        <!-- <small id="emailHelp" class="form-text text-muted">Masukkan E-Mail Adress Anda.</small> -->
    </div>
    <br>
    <div class="form-group">
    <label for="inputPassword1">Password<label class="text-danger">*</label></label>
        <input name="userPass" type="password" class="form-control" id="inputPassword1" placeholder="Masukkan Password">
        <!-- <small id="emailHelp" class="form-text text-muted">Masukkan Password Anda.</small> -->
    </div>
    <br>
    <button type="submit" class="btn btn-success me-1">Login</button>
    
</div>
<?=form_close();?>


