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
                <a class="navbar-brand" href="#"><strong>DIGI</strong> Shop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                <?php
                    foreach ($header as $header) : 
                ?>
                    <li><a href="<?= $header['link'] ?>"><?= $header['nm_menu'] ?></a></li>
                <?php endforeach; ?>
                    <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Cari Sepatu" class="form-control">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-success">Search</button>
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
                
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>

                            <li><a href="#">
                                <img src="assets/ItemSlider/images/1.jpg" alt="img01"><h4>Boots</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/2.jpg" alt="img02"><h4>Oxfords</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/3.jpg" alt="img03"><h4>Loafers</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/4.jpg" alt="img04"><h4>Sneakers</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/5.jpg" alt="img05"><h4>Belts</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/6.jpg" alt="img06"><h4>Hats &amp; Caps</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/7.jpg" alt="img07"><h4>Sunglasses</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/8.jpg" alt="img08"><h4>Scarves</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/9.jpg" alt="img09"><h4>Casual</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/10.jpg" alt="img10"><h4>Luxury</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/11.jpg" alt="img11"><h4>Sport</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/12.jpg" alt="img12"><h4>Carry-Ons</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/13.jpg" alt="img13"><h4>Duffel Bags</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/14.jpg" alt="img14"><h4>Laptop Bags</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/15.jpg" alt="img15"><h4>Briefcases</h4>
                            </a></li>
                        </ul>
                        <nav>
                        <?php
                            foreach ($slide as $slide) : 
                        ?>
                            <a href="<?php base_url('Welcome/slide') ?>"><?= $slide['jenis_brg'] ?></a>
                        <?php endforeach; ?>
                        </nav>
                    </div>
                    
                </div>
                <br />
            </div>
            <!-- /.col -->
            
            <div class="col-md-3 text-center">
                <div class=" col-md-12 col-sm-6 col-xs-6" >
                    <div class="offer-text">
                        Model Terbaru
                    </div>
                    <div class="thumbnail product-box">
                        <img src="assets/img/dummyimg.png" alt="" />
                        <div class="caption">
                            <h3><a href="#">Samsung Galaxy </a></h3>
                            <p><a href="#">Ptional dismiss button </a></p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-12 col-sm-6 col-xs-6">
                    <div class="offer-text2">
                        Model Terbaru
                    </div>
                    <div class="thumbnail product-box">
                        <img src="assets/img/dummyimg.png" alt="" />
                        <div class="caption">
                            <h3><a href="#">Samsung Galaxy </a></h3>
                            <p><a href="#">Ptional dismiss button </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>



        <div class="row">
            <div class="col-md-3">
            <!--Sidebar-->
            <div>
                    <a href="#" class="list-group-item active">Brand Sepatu
                    </a>
                    <ul class="list-group">
                    <?php
                    foreach ($jb as $jb) { 
                    ?>                  
                    
                    <li class="list-group-item"><a href="<?php 
                    base_url() ?>welcome/jb/<?= $jb['kd_jb'] ?>"><?= $jb['jenis_brg'] ?></a>
                    <span class="label label-primary pull-right">234</span>
                    </li>
                    <?php } ?>
                    </ul>
                </div>

            </div>
            <!--Halaman Berada-->
            <div class="col-md-9">
                <div>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Electronics</li>
                </ol>
                </div>
                <!--Urutan tmpil-->
                <div class="row">
                    <div class="btn-group alg-right-pad">
                        <button type="button" class="btn btn-default"><strong><?= $countBrg; ?></strong> items</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Sort Products &nbsp;
                            <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Dari Harga Murah</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Dari Harga Tinggi</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Dari Terpopuler</a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
                <!-- Box Produk -->
                <?php $this->load->view($content) ?>

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