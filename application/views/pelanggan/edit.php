<?php
    if(!$this->session->userdata('username')) redirect('login','refresh');
?>



<div class="h2"><?php echo $title; ?></div>

<?=form_open("pelanggan/edit/$data->id");?>
  <fieldset>
    <?=form_hidden("id", $data->id);?>
    

    <div class="form-group">
        <label for="txtKodepel" class="form-label mt-4">Kode Pelanggan</label>
        <input type="text" class="form-control" name="kodepel" id="txtKodepel" aria-describedby="namaHelp" placeholder="Kode Pelanggan" value="<?=$data->kodepel; ?>">
        <small id="namaHelp" class="form-text text-muted">Masukkan Kode Pelanggan.</small>
    </div>

    <div class="form-group">
        <label for="txtnama" class="form-label mt-4">Nama</label>
        <input type="text" class="form-control" name="nama" id="txtNama" aria-describedby="namaHelp" placeholder="Nama Pengarang" value="<?=$data->nama; ?>">
        <small id="namaHelp" class="form-text text-muted">Masukkan Nama Pelanggan.</small>
    </div>

    <div class="form-group">
        <label for="txtTelp" class="form-label mt-4">Telepon</label>
        <input type="text" class="form-control" name="telp" id="txtTelp" aria-describedby="telpHelp" placeholder="Telepon" value="<?=$data->telp; ?>">
        <small id="telpHelp" class="form-text text-muted">Masukkan Telepon.</small>
    </div>

    <div class="form-group">
        <label for="txtJk" class="form-label mt-4">Jenis Kelamin</label>
        <input type="text" class="form-control" name="jk" id="txtJk" aria-describedby="jkHelp" placeholder="Jenis Kelamin" value="<?=$data->jk; ?>">
        <small id="jkHelp" class="form-text text-muted">Masukkan Jenis Kelamin.</small>
    </div>

    <div class="form-group">
        <label for="txtEmail" class="form-label mt-4">Email</label>
        <input type="text" class="form-control" name="email" id="txtEmail" aria-describedby="emailHelp" placeholder="Email" value="<?=$data->email; ?>">
        <small id="emailHelp" class="form-text text-muted">Masukkan Email.</small>
    </div>

    
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" onclick="history.back(-1)" class="btn btn-secondary">Batal </button>

  </fieldset>
  <?=form_close();?>