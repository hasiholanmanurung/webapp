<!-- <html>
<head>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
</head>
<body>
    <div class="container"> -->
        <div class="h2"><?php echo $title; ?></div>

        <?php foreach($data as $item) : ?>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header h3 d-flex justify-content-between">
                <a href="buku/view/<?=$item->judul ?>"><?=$item->judul ?></a>
                <small><?=$item->pengarang ?></small>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <!-- <li class="list-group-item d-flex justify-content-between"><em>Pengarang:</em>         <span><?=$item->pengarang ?></span></li>
                    <li class="list-group-item d-flex justify-content-between"><em>Penerbit:</em>         <span><?=$item->penerbit ?></span></li>
                    <li class="list-group-item d-flex justify-content-between"><em>Tanggal Terbit:</em>   <span><?=$item->tglterbit ?></span></li> -->
                    <li class="list-group-item d-flex justify-content-between"><em>ISBN:</em>             <span><?=$item->isbn ?></span></li>
                </ul>
            </div>
            <!-- <hr> -->
        </div>
        <?php endforeach ?>
    <!-- </div>

    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->

    