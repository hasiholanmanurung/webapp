<?php
    if(!$this->session->userdata('username')) redirect('login','refresh');
?>


<br>
<center><div class="h2 mb-3" style="max-width: 30rem;">
<?php echo $title; ?></div></center>
        
        <center><div class="card border-info mb-3" style="max-width: 25rem;">
            <div class="card text-white bg-primary mb-3">
                <br>
                <!-- <a href="<//?=site_url("/buku/");?>" class="btn btn-dark btn-block">&lt;</a> -->
                <span class="text-center"><?=$data->judul ?></span>
                <br>
              </div>
              

            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between"><em>Pengarang:</em>          <span><?=$data->pengarang ?></span></li>
                    <li class="list-group-item d-flex justify-content-between"><em>Penerbit:</em>           <span><?=$data->penerbit ?></span></li>
                    <li class="list-group-item d-flex justify-content-between"><em>Tanggal Terbit:</em>     <span><?=$data->tglterbit ?></span></li>
                    <li class="list-group-item d-flex justify-content-between"><em>ISBN:</em>               <span><?=$data->isbn ?></span></li>
                </ul>
            </div>

            <div class="modal-footer">
            <a href="<?=site_url("/buku/");?>" class="btn btn-dark btn-block">Back</a>
            <?php if ($this->session->userdata('role')=='write' || $this->session->userdata('role')=='admin') : ?>

            <a href="<?=site_url("/buku/edit/");?><?=$data->id;?>" class="btn btn-warning btn-block">Edit</a>
            <?=form_open(site_url("/buku/delete/$data->id"), 'style="width:100px" method="delete"'); ?>
                <input type="submit" value="Hapus" class="btn btn-danger btn-block">
            <?=form_close();?>
            <?php endif; ?>

            
            </div>
            
        
        </div></center>

       