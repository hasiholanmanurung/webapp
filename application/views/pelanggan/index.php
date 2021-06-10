<!-- 
<div class="h2"><?php echo $title; ?></div>
    <hr>

    <div class="row">
    <//?php foreach($data as $item) : ?>
        <div class="card border-info mb-3" style="max-width: 30rem;">
        <div class="card-header h4 d-flex justify-content-between"> kodepel : 
            <a href="<//?=site_url('/pelanggan/view/')?><//?=$item->id ?>"><small><//?=$item->kodepel ?></small></a>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between">
                    <em>Nama:</em>
                    <span><//?=$item->nama ?></span>
                </li>
            </ul>
        </div>
    </div>
    <//?php endforeach ?>
</center> -->

<div class="h2"><?php echo $title; ?></div>
    <hr>

    <div class="row">
        <?php foreach($data as $item) : ?>
        <div class="col">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 30rem;">
                <div class="card-header text-white bg-primary h4 d-flex justify-content-between">
                
                    <!-- <div class="card border-info mb-3" style="max-width: 25rem;">
                        <div class="card text-white bg-primary mb-3"> -->
                    <?=$item->kodepel ?>
 
                    <a href="<?=site_url('/pelanggan/view/')?><?=$item->id ?>" class="btn btn-success fw-bold">Info</a>
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
        </div>
        <?php endforeach ?>
    </div>

    