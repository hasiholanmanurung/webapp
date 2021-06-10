<!-- <html>
<head>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
</head>
<body>
    <div class="container"> -->

    <?php
    if(!$this->session->userdata('username')) redirect('login','refresh');
?>
    <br>
<center><div class="h2"><?php echo $title; ?></div>
<br>
    <?php foreach($data as $item) : ?>
        <!-- <div class="card border-info mb-3" style="max-width: 25rem;">
            <div class="card text-white bg-primary mb-3">
         -->
    <!-- <div class="card text-white bg-primary mb-3" style="max-width: 40rem;"> -->
    <div class="card border-info mb-3" style="max-width: 40rem;">
        <div class="card-header text-white bg-primary h4 d-flex justify-content-between">Judul Buku : 
            <a href="<?=site_url('/buku/view/')?><?=$item->id ?>"><?=$item->judul ?></a>
           
        </div>
        
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between">
                    <em>ISBN:</em>
                    <span><?=$item->isbn ?></span>
                </li>
            </ul>
        </div>
    </div>
    <?php endforeach ?>
</center>
    <!-- </div>

    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->

    