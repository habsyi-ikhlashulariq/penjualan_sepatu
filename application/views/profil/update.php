		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">

                        <?php if ($this->session->flashdata('message') ):?>
							<?= $this->session->flashdata('message'); ?>
						<?php endif; ?>

					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="<?= base_url() ?>temp/img/<?= $user['avatar']; ?>" class="img-circle" alt="Avatar">
										
									</div>
									<div class="profile-stat">
										<div class="row">
										<h3 class="name"><?= $user['nama']; ?></h3>
										<span class="online-status status-available">Available</span>
										
										</div>
										
									</div>
								</div>
                                <div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading"></h4>
										<ul class="list-unstyled list-justify" style="text-align: center;">
											<li><a href="<?= base_url('') ?>profil/changePass/<?= $user['kd_user']; ?>" class="btn btn-primary">Change Password</a></li>
											<li><a href="<?= base_url('') ?>profil/update/<?= $user['kd_user']; ?>" class="btn btn-primary">Update Profil</a></li>
										</ul>
									</div>
								</div>
								
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right" style="height: 460px;">
							<!-- AWARDS -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading" style="margin-top: -50px;"><?= $judul; ?></h4>
										<ul class="list-unstyled list-justify">
                                            <?= form_open_multipart('Profil/update') ?>
                                                <li>Email : <br>
                                                    <input class="form-control" type="text" name="email" value="<?= $user['email']  ?>" readonly>
                                                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                                                </li>
                                                    <li>Nama <br>
                                                    <input class="form-control" type="text" name="nama" value="<?= $user['nama'] ?>">
                                                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                                </li>
                                                <li>Foto : <br>
                                                    <input class="form-control" type="file" name="foto">
                                                    <small class="form-text text-danger"><?= form_error('foto'); ?></small><br>
                                                    <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                                                    <input class="form-control" type="hidden" name="kd_user" value="<?= $user['kd_user'] ?>">
                                                </li>
                                        </form>
                                </ul>
									</div>
								</div>
								<!-- END AWARDS -->
								
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		