<br>
<div class="h2"><?php echo $title; ?></div>

<?//=validation_errors(); ?>

<?=form_open('pelanggan/create/');?>
  <fieldset>
    <input type="hidden" name="ID">
    <div class="form-group">
        <label for="txtKodepel" class="form-label mt-4">Kode Pelanggan</label>
        <input type="text" class="form-control" name="kodepel" id="txtKodepel" aria-describedby="KodepelHelp" placeholder="Masukkan Judul Buku">
        <!-- <small id="judulHelp" class="form-text text-muted">Masukkan Judul Buku.</small> -->
    </div>
    <div class="form-group">
        <label for="txtNama" class="form-label mt-4">Nama</label>
        <input type="text" class="form-control" name="nama" id="txtNama" aria-describedby="namaHelp" placeholder="Masukkan Nama Pelanggan">
        <!-- <small id="pelangganHelp" class="form-text text-muted">Masukkan Nama Pelanggan.</small> -->
    </div>
    
    <div class="form-group">
        <label for="txtTelp" class="form-label mt-4">Telepon</label>
        <input type="text" class="form-control" name="telp" id="txtTelp" aria-describedby="telpHelp" placeholder="Masukkan Telepon">
        <!-- <small id="telpHelp" class="form-text text-muted">Masukkan Telepon.</small> -->
    </div>
    <div class="form-group">
        <label for="txtJk" class="form-label mt-4">Jenis Kelamin</label>
        <input type="text" class="form-control" name="jk" id="txtTelp" aria-describedby="jkHelp" placeholder="Masukkan Jenis Kelamin">
        <!-- <small id="jkHelp" class="form-text text-muted">Masukkan Jenis Kelamin.</small> -->
    </div>
    <div class="form-group">
        <label for="txtEmail" class="form-label mt-4">Email</label>
        <input type="text" class="form-control" name="email" id="txtEmail" aria-describedby="emailHelp" placeholder="Masukkan Email">
        <!-- <small id="emailHelp" class="form-text text-muted">Email.</small> -->
    </div>    <!-- <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Example textarea</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div> -->
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" onclick="history.back(-1)" class="btn btn-secondary">Batal </button>
  </fieldset>
  <?=form_close();?>

