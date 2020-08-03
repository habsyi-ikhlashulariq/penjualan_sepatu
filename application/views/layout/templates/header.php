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
                
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>
                        <?php
                            foreach ($slide1 as $slide1) : 
                        ?>
                            <li><a href="<?= base_url('welcome/detail/'.$slide1['kd_brg']) ?>">
                                <img src="<?= base_url('uploads/img_brg/'.$slide1['img_brg']); ?>" alt="img01"><h4><?= $slide1['nm_brg'] ?></h4>
                            </a></li>  
                            <?php endforeach; ?>
                        </ul>
                        <ul>
                        <?php
                            foreach ($slide2 as $slide2) : 
                        ?>
                            <li><a href="<?= base_url('welcome/detail/'.$slide2['kd_brg']) ?>">
                                <img src="<?= base_url('uploads/img_brg/'.$slide2['img_brg']); ?>" alt="img01"><h4><?= $slide2['nm_brg'] ?></h4>
                            </a></li>  
                            <?php endforeach; ?>
                        </ul>
                        <ul>
                        <?php
                            foreach ($slide3 as $slide3) : 
                        ?>
                           <li><a href="<?= base_url('welcome/detail/'.$slide3['kd_brg']) ?>">
                                <img src="<?= base_url('uploads/img_brg/'.$slide3['img_brg']); ?>" alt="img01"><h4><?= $slide3['nm_brg'] ?></h4>
                            </a></li>  
                            <?php endforeach; ?>
                        </ul>
                        <nav>
                        <?php
                            foreach ($slide_title as $slide_title) : 
                        ?>
                            <a href="<?= base_url('Welcome/slide/'.$slide_title['kd_jb']) ?>"><?= $slide_title['jenis_brg'] ?></a>
                        <?php endforeach; ?>
                        </nav>
                    </div>
                    
                </div>
                <br />
            </div>
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



        <div class="row">
            <div class="col-md-3">
            <!--Sidebar-->
            <div>
                    <a href="<?= base_url() ?>" class="list-group-item active">Brand Sepatu
                    </a>
                    <ul class="list-group">
                    <?php
                    foreach ($jb as $jb) { 
                    ?>                  
                    
                    <li class="list-group-item"><a href="<?=
                    base_url('welcome/jb/'.$jb['kd_jb']) ?>"><?= $jb['jenis_brg'] ?></a>
                    </li>
                    <?php } ?>
                    </ul>
                </div>

            </div>
            <!--Halaman Berada-->
            <div class="col-md-9">
               
                <!--Urutan tmpil-->
                <div class="row">
                   
                </div>
                <!-- Box Produk -->
                               