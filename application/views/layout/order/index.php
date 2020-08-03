<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Penjualan Sepatu</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="<?= base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="<?= base_url('assets/ItemSlider/css/main-style.css') ?>" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url() ?>"><strong>DIGI</strong> Shop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                <?php
                    foreach ($header as $header) : 
                ?>
                    <li><a href="<?= base_url($header['link']) ?>"><?= $header['nm_menu'] ?></a></li>
                <?php endforeach; ?>
                    <form class="navbar-form navbar-right" role="search" method="post" action="<?= base_url('welcome'); ?>">
                    <div class="form-group">
                        <input type="text" name="keyword" placeholder="Cari Sepatu" class="form-control" autocomplete="off">
                    </div>
                    &nbsp; 
                    <button type="submit" name="submit "class="btn btn-success">Search</button>
                </form>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                
                    <div id="mi-slider" class="mi-slider">
                    <h1>Cara Order Barang :</h1>
                <div class="row">
                   <ol>
                    <li>Pilih Sepatu Yang Mau Di order</li>
                    <li>Pilih Ukuran Dan Warna Yang Di Inginkan</li>
                    <li>Tentukan Jumlah Pembelian</li>
                    <li>Pemesanan Bisa Melalui Website Secara Langsung<br>
                    atau Bisa Kunjungi Toko Kami Di Marketplace Yang Tertera Di Bawah</li>
                    <br>
                   note :
                   <p>Tanyakan Selalu Stok Barang</p>                
                   </ol>   
                </div>
                    </div>
                    
                </div>
                <br />
            <!-- /.col -->
            
            <div class="col-md-3 text-center">
                <?php
                   foreach ($produk_baru as $produk_baru) :
                ?> 
                <div class=" col-md-12 col-sm-6 col-xs-6" >
                    <div class="offer-text">
                        Model Terbaru
                    </div>
                    <div class="thumbnail product-box">
                        <img src="<?= base_url('uploads/img_brg/'.$produk_baru['img_brg']); ?>" width="100px" alt="" />
                        <div class="caption">
                            <h3><?= $produk_baru['nm_brg'] ?></h3>
                            <p><a href="<?= base_url() ?>welcome/detail/<?= $produk_baru['kd_brg'] ?>">Lihat Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- /.col -->
        </div>

            <div class="col-md-9">
               
                <!--Urutan tmpil-->
                <div class="row">
                   
                </div>
                <!-- Box Produk -->


                </div>
    </div>
</div>
    <!-- /.container -->

<div class="col-md-12 footer-box">

<div class="row">
    <div class="col-md-4">
        <strong>Tersedia Juga di :</strong>
        <hr>
        <?php
            foreach ($marketplace as $marketplace) : 
        ?>
        <a href="<?= $marketplace['link'] ?>">
            <img src="<?= base_url('uploads/img_market/'.$marketplace['img_marketplace']); ?>" width="200px" height="70px" alt="">
        </a>
        <?php endforeach; ?>
    </div>

    <div class="col-md-4">
        <strong>Kontak Kami :</strong>
        <hr>
        <?php
            foreach ($kontak as $kontak) : 
        ?>
        <p>
        
        Alamat : <?= $kontak['alamat'] ?><br><br>
            Telephone : <?= $kontak['no_telp'] ?><br><br>
            Email :<?= $kontak['email'] ?><br>
        </p>
        <?php endforeach; ?>
    </div>
    <div class="col-md-4 social-box">
        <strong>Sosial Media Kami :</strong>
        <hr>
        <?php
            foreach ($sosmed as $sosmed) : 
        ?>
        <i class="<?= $sosmed['class'] ?>"></i>
        <a href="<?= $sosmed['link'] ?>"><?= $sosmed['nama'] ?></a><br><br> 
        <?php endforeach; ?>     
    </div>
</div>
<hr>
</div>
<!-- /.col -->
<?php
    foreach ($footer as $footer) : 
?>
<div class="col-md-12 end-box ">
<?= $footer['menu_footer'] ?>
</div>
<?php endforeach; ?>
<!-- /.col -->
<!--Footer end -->
<!--Core JavaScript file  -->
<script src="<?= base_url('assets/js/jquery-1.10.2.js')?>"></script>
<!--bootstrap JavaScript file  -->
<script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
<!--Slider JavaScript file  -->
<script src="<?= base_url('assets/ItemSlider/js/modernizr.custom.63321.js') ?>"></script>
<script src="<?= base_url('assets/ItemSlider/js/jquery.catslider.js') ?>"></script>
<script>
$(function () {

    $('#mi-slider').catslider();

});
</script>
</body>
</html>
                               