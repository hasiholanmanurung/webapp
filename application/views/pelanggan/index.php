<!-- 
<html>
<head>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
</head>
<body>
    <div class="container"> -->
<br>
<center><div class="h2"><?php echo $title; ?></div>
<br>
    <?php foreach($data as $item) : ?>
        <div class="card border-info mb-3" style="max-width: 30rem;">
        <div class="card-header h4 d-flex justify-content-between"> kodepel : 
            <a href="<?=site_url('/pelanggan/view/')?><?=$item->id ?>"><small><?=$item->kodepel ?></small></a>
            
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between">
                    <em>Nama:</em>
                    <span><?=$item->nama ?></span>
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