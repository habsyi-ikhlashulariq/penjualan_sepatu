<?php
                    foreach ($brand as $brand) : 
                    ?>
                <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="<?= base_url('uploads/img_brg/'.$brand['img_brg']); ?>" width="100px"alt="">
                            <div class="caption">
                                <h3><a href="#"><?= $brand['nm_brg'] ?></a></h3>
                                <p>Price : <strong><?= $brand['hrg_brg'] ?></strong>  </p>
                                <p><?= $brand['ukuran'] ?></p>
                                <p><?= $brand['deskripsi'] ?></p>
                                <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="<?= base_url() ?>welcome/detail/<?= $brand['kd_brg'] ?>" class="btn btn-primary" role="button">See Details</a></p>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
