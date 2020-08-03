<?php
                    foreach ($brg as $brg) : 
                    ?>
                <div class="col-md-4 text-center" >
                        <div class="thumbnail product-box" >
                            <img src="<?= base_url('uploads/img_brg/'.$brg['img_brg']); ?>" width="100px" height="100px" alt="">
                            <div class="caption">
                                <h3><a href="#"><?= $brg['nm_brg'] ?></a></h3>
                                <p>Price : <strong><?= $brg['hrg_brg'] ?></strong>  </p>
                                <p><?= $brg['ukuran'] ?></p>
                                <p><?= $brg['deskripsi'] ?></p>
                                <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a  href="<?= base_url() ?>welcome/detail/<?= $brg['kd_brg'] ?>" class="btn btn-primary" role="button">See Details</a></p>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
