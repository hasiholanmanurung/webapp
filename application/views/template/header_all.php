<html>
<head>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=site_url();?>">CI Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
 
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="<?=site_url();?>">Home</a></li>
                    <?php if( $this->session->userdata('username') ) : ?>


                    <li class="nav-item"><a class="nav-link" href="<?=site_url();?>buku">Buku</a></li>

                    <?php if ($this->session->userdata('role')=='write' || $this->session->userdata('role')=='admin') : ?>
                    <li class="nav-item"><a class="nav-link" href="<?=site_url();?>pelanggan">Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=site_url();?>sewa">Sewa</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Users</a>
                        <div class="dropdown-menu text-center">
                            <a class="dropdown-item" href="<?=site_url();?>users">Data</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?=site_url();?>userroles">Roles</a>
                        </div>
                    </li>

                        <?php if ($this->session->userdata('role')=='write' || $this->session->userdata('role')=='admin') : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tambah Data</a>
                        <div class="dropdown-menu text-center">
                            <a class="btn btn-success vw-80" href="<?=site_url()?>buku/create">Buku</a>
                            <div class="dropdown-divider"></div>
                            <a class="btn btn-success my-auto" href="<?= base_url(); ?>pelanggan/create">Pelanggan</a>
                            <div class="dropdown-divider"></div>
                            <a class="btn btn-success my-auto" href="<?= base_url(); ?>users/create">User</a>
                            <div class="dropdown-divider"></div>
                            <a class="btn btn-success my-auto" href="<?= base_url(); ?>userroles/create">User Role</a>
                        </div>
                    </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    
                </ul>

                <div class="d-flex align-items-center">
                <?php if($this->session->userdata('username')) : ?>
                    <div class="text-white"><?=$this->session->userdata('email')?></div>
                    <?php if ($this->session->userdata('role')=='write' || $this->session->userdata('role')=='admin' || $this->session->userdata('role')=='read' ) : ?>
                    <a class="btn btn-success my-2 mx-2 my-sm-0" href="<?=site_url()?>sewa/create">Sewa Buku</a>
                    <?php endif ?>
                    <a class="btn btn-danger my-2 mx-2 my-sm-0" href="<?=site_url()?>login/logout">Logout</a>
                <?php else : ?>
                    <a class="btn btn-success my-2 mx-2 my-sm-0" href="<?=site_url()?>login">Login</a>
                <?php endif ?>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- // Exception / Flash Messages -->
        <div id="flash_messages" >
            <?php if($this->session->flashdata('success')) : ?>
                <div style="margin: 1em; padding: 1em;" class="alert alert-dismissible alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <?=$this->session->flashdata('success'); ?>
                </div>
            <?php endif?>
            <?php if($this->session->flashdata('error'))   : ?>
                <div style="margin: 1em; padding: 1em;" class="alert alert-dismissible alert-danger">
                    <button type="button" class="btn-close" data-dismiss="alert"></button>
                    <?=$this->session->flashdata('error'); ?>
                </div>
            <?php endif?>
            <?php if($this->session->flashdata('warning')) : ?>
                <div style="margin: 1em; padding: 1em;" class="alert alert-dismissible alert-warning">
                    <button type="button" class="btn-close" data-dismiss="alert"></button>
                    <?=$this->session->flashdata('warning'); ?>
                </div>
            <?php endif?>
            <?php if($this->session->flashdata('info'))    : ?>
                <div style="margin: 1em; padding: 1em;" class="alert alert-dismissible alert-info">
                    <button type="button" class="btn-close" data-dismiss="alert"></button>
                    <?=$this->session->flashdata('info'); ?>
                </div>
            <?php endif?>
        </div>

        <!-- Form Validation Error Message  -->
        <?php if(!empty(validation_errors())) : ?>
        <div style="margin: 1em; padding: 1em;" id="validation_message" class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert"></button>
            <?=validation_errors(); ?>
        </div>
        <?php endif ?>
