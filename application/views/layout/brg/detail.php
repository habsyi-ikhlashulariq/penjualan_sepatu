                    <div class="container-fluid">
                    <div class="card">
                        <h5 class="card-header">Detail Produk</h5>
                        <div class="card-body">
                        <?php
                            foreach ($detail as $detail) : 
                        ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?= base_url('uploads/img_brg/'.$detail['img_brg']); ?>" width="200px"alt="" class="card-img-top">
                                </div>
                                <div class="col-md-8">
                                    <table class="table">
                                        <tr>
                                            <th>Nama Produk</th>
                                            <td><?= $detail['nm_brg'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Harga Produk</th>
                                            <td><?= $detail['hrg_brg'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Ukuran</th>
                                            <td><?= $detail['ukuran'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Deskripsi</th>
                                            <td><?= $detail['deskripsi'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <a href="#" class="btn btn-success" role="button">Add To Cart</a>
                                            </th>
                                        </tr>
                                    
                                    </table>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    </div>
                    <div class="card">
                    <div class="card-body">
                <?php
                    foreach ($rekom as $rekom) : 
                    ?>
                <!--Urutan Halaman-->
                        <h5 class="card-header">Produk Serupa : </h5>
                <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="<?= base_url('uploads/img_brg/'.$rekom['img_brg']); ?>" width="100px"alt="">
                            <div class="caption">
                                <h3><a href="#"><?= $rekom['nm_brg'] ?></a></h3>
                                <p>Price : <strong><?= $rekom['hrg_brg'] ?></strong>  </p>
                                <p><?= $rekom['ukuran'] ?></p>
                                <p><?= $rekom['deskripsi'] ?></p>
                                <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a  href="<?= base_url() ?>welcome/detail/<?= $rekom['kd_brg'] ?>" class="btn btn-primary" role="button">See Details</a></p>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                    </div>
                    </div>
