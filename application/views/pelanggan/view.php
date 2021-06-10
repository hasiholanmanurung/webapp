
<?php
    if(!$this->session->userdata('username')) redirect('login','refresh');
?>

<br>
<center><div class="h1 mb-3" style="max-width: 30rem;"><?php echo $title; ?></div></center>
        
        <center><div class="card border-info mb-3" style="max-width: 25rem;">
            <div class="card text-white bg-primary mb-3">
                 <!-- <a href="<//?=site_url("/pelanggan/");?>" class="btn btn-dark btn-block">&lt;</a> -->
                <span class="text-center"><?=$data->kodepel ?></span>  
              </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between"><em>Kode Pelanggan:</em><span><?=$data->kodepel ?></span></li>
                    <li class="list-group-item d-flex justify-content-between"><em>Nama:</em><span><?=$data->nama ?></span></li>
                    <li class="list-group-item d-flex justify-content-between"><em>Telepon:</em><span><?=$data->telp ?></span></li>
                    <li class="list-group-item d-flex justify-content-between"><em>Jenis Kelamin:</em><span><?=$data->jk ?></span></li>
                    <li class="list-group-item d-flex justify-content-between"><em>Email:</em><span><?=$data->email ?></span></li>
                </ul>
            </div>

            
            <div class="modal-footer">
            <?php if ($this->session->userdata('role')=='write' || $this->session->userdata('role')=='admin') : ?>
            <a href="<?=site_url("/pelanggan/edit/");?><?=$data->id;?>" class="btn btn-warning btn-block">Edit</a>
            <?=form_open(site_url("/pelanggan/delete/$data->id"), 'style="width:100px" method="delete"'); ?>
                <input type="submit" value="Hapus" class="btn btn-danger btn-block">
            <?=form_close();?>
            <?php endif; ?>
            <a href="<?=site_url("/pelanggan/");?>" class="btn btn-dark btn-block">Back</a>
            

            
            </div>
        </div></center>
 