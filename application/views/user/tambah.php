
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-body">
							<div class="row">					
								<div class="panel-heading">
									<h3 class="panel-title"><?= $judul; ?></h3>
								</div>
								<div class="panel-body">
                                    
                                    <form action="" method="post">
										<label for="kd_user">Kode Login :</label>
										<input type="text" class="form-control" placeholder="Kode User" name="kd_user" value="<?= set_value('kd_user'); ?>">
										<small class="form-text text-danger"><?= form_error('kd_user'); ?></small>
										<br>
										<label for="nama">Nama User :</label>
										<input type="text" class="form-control" placeholder="Nama User" name="nama" value="<?= set_value('nama'); ?>">
										<small class="form-text text-danger"><?= form_error('nama'); ?></small>
										<br>
                                        <label for="email">Email User :</label>
										<input type="email" class="form-control" placeholder="Email User" name="email" value="<?= set_value('email'); ?>">
										<small class="form-text text-danger"><?= form_error('email'); ?></small>
										<br>
                                        <label for="password">Password User :</label>
										<input type="password" class="form-control" placeholder="Password User" name="password1" value="<?= set_value('password1'); ?>">
										<small class="form-text text-danger"><?= form_error('password1'); ?></small>
										<br>
                                        <label for="password">Confirm Password :</label>
										<input type="password" class="form-control" placeholder="Cofirm Password" name="password2" value="<?= set_value('password2'); ?>">
										<small class="form-text text-danger"><?= form_error('password2'); ?></small>
										<input type="hidden" class="form-control" value="default.png" name="avatar" value="<?= set_value('avatar'); ?>">
										<br>
                                        <input type="submit" class="btn btn-primary" value="Simpan Data">
                                    </form>
								</div>
							
							
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
	
