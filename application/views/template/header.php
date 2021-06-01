<html>
<head>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
</head>
<body >
<title>CI Library</title>


<!-- <body data-spy="scroll" data-offset="0" data-target="#navbar-main"> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=site_url();?>">CI Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="<?=site_url();?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=site_url();?>buku">Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=site_url();?>pelanggan">Pelanggan</a></li>
                </ul>
                <!-- <div class="d-flex">
                    <a class="btn btn-success my-2 my-sm-0" href="<?=site_url()?>buku/create">Add Buku</a>
                    <a class="btn btn-success my-2 my-sm-0" href="<?=site_url()?>pelanggan/create">Add Pelanggan</a>
                </div> -->
            </div>
        </div>
</nav>

    <div class="container">

    <div id="flash_messages" >
            <?php if($this->session->flashdata('success')) : ?>
                <div style="margin: 1em; padding: 1em;" class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?=$this->session->flashdata('success'); ?>
                </div>
            <?php endif?>
            <?php if($this->session->flashdata('error'))   : ?>
                <div style="margin: 1em; padding: 1em;" class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?=$this->session->flashdata('error'); ?>
                </div>
            <?php endif?>
            <?php if($this->session->flashdata('warning')) : ?>
                <div style="margin: 1em; padding: 1em;" class="alert alert-dismissible alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?=$this->session->flashdata('warning'); ?>
                </div>
            <?php endif?>
            <?php if($this->session->flashdata('info'))    : ?>
                <div style="margin: 1em; padding: 1em;" class="alert alert-dismissible alert-secondary">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?=$this->session->flashdata('info'); ?>
                </div>
            <?php endif?>
        </div>

        <!-- Form Validation Error Message  -->
        <?php if(!empty(validation_errors())) : ?>
        <div style="margin: 1em; padding: 1em;" id="validation_message" class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?=validation_errors(); ?>
        </div>
        <?php endif ?>

