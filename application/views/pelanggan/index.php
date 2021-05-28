<h2><?= $title;?></h2>
<?php foreach($data as $item): ?>
    <!-- menampilan id sebagai judul awal -->
    <h4> <?=$item->nama?></h4>
    <ul>
        <!-- menampilkan record lainnya -->
        <li><b>Kodepel</b>: <?=$item->kodepel?></li>
        <li><b>Telepon</b>: <?=$item->telp?></li>
        <li><b>Jenis Kelamin</b>: <?=$item->jk?></li>
        <li><b>Email</b>: <?=$item->email?></li>
    </ul>
    <hr>
<?php endforeach?>

    