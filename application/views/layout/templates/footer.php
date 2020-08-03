        </div>
    </div>
<?= $this->pagination->create_links(); ?>
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