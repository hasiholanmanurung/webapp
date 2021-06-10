
<?php
    if(!$this->session->userdata('username')) redirect('login','refresh');
?>

<br>
<div class="h2"><?php echo $title; ?></div>
<?//=validation_errors(); ?>
<?=form_open('sewa/create/');?>
<fieldset>
        <div class="form-group">
            <label for="txtIsbn" class="form-label mt-3">ISBN</label>
            <select name="isbn" id="txtIsbn" class="txtIsbn">
                <?php foreach ($aBuku as $iBuku) : ?>
                <option value="<?=$iBuku->isbn?>"><?=$iBuku->judul ?> - <?=$iBuku->isbn?></option>
                <?php endforeach ?>
            </select>

        </div>

        <div class="form-group">
            <label for="txtPelanggan" class="form-label mt-3">Pelanggan</label>
            <select name="pelanggan" id="txtPelanggan">
                <?php foreach ($aPelanggan as $iPelanggan) : ?>
                <option value="<?=$iPelanggan->id?>"><?=$iPelanggan->nama ?> - <?=$iPelanggan->kodepel?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group">
            <label for="numLamaSewa" class="form-label mt-3">Lama Sewa</label>
            <input type="number" min="0" max="14" class="form-control" name="lamaSewa" id="numLamaSewa" aria-describedby="lamaSewaHelp" placeholder="Lama Sewa" style="width: 8em;">
            <small id="lamaSewaHelp" class="form-text text-muted">Jumlah Hari Penyewaan.</small>
        </div>

        <div class="form-group">
            <label for="txtKeterangan" class="form-label mt-3">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="txtKeterangan" aria-describedby="keteranganHelp" placeholder="Keterangan">
            <small id="keteranganHelp" class="form-text text-muted">Keterangan.</small>
        </div>

        <button type="submit" class="btn btn-primary my-3">Submit</button>
        <button type="button" onclick="history.back(-1)" class="btn btn-secondary">Batal </button>
        <!-- <a href="<//?=site_url('/pelanggan')?>" class="btn btn-danger">Batal</a> -->
    </fieldset>
    <?=form_close();?>