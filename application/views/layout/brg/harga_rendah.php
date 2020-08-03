<?php
                    foreach ($hrg_rendah as $hrg_rendah) : 
                    ?>
                <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="<?= base_url('uploads/img_brg/'.$hrg_rendah['img_brg']); ?>" width="100px"alt="">
                            <div class="caption">
                                <h3><a href="#"><?= $hrg_rendah['nm_brg'] ?></a></h3>
                                <p>Price : <strong><?= $hrg_rendah['hrg_brg'] ?></strong>  </p>
                                <p><?= $hrg_rendah['ukuran'] ?></p>
                                <p><?= $hrg_rendah['deskripsi'] ?></p>
                                <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a  href="<?= base_url() ?>welcome/detail/<?= $hrg_rendah['kd_brg'] ?>" class="btn btn-primary" role="button">See Details</a></p>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>