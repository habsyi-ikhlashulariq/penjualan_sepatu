
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
										<label for="kd_menu">Kode Menu Sosmed :</label>
										<input type="text" class="form-control" placeholder="Kode Menu Sosmed" name="kd_menu" value="<?= set_value('kd_menu'); ?>">
										<small class="form-text text-danger"><?= form_error('kd_menu'); ?></small>
										<br>
										<label for="nama">Nama :</label>
										<input type="text" class="form-control" placeholder="Nama Menu Sosmed" name="nama" value="<?= set_value('nama'); ?>">
										<small class="form-text text-danger"><?= form_error('nama'); ?></small>
										<br>
										<label for="class">Class :</label>
										<input type="text" class="form-control" placeholder="Class Menu Sosmed" name="class" value="<?= set_value('class'); ?>">
										<small class="form-text text-danger"><?= form_error('class'); ?></small>
										<br>
										<label for="link">Link :</label>
										<input type="text" class="form-control" placeholder="Link Menu Sosmed" name="link" value="<?= set_value('link'); ?>">
										<small class="form-text text-danger"><?= form_error('link'); ?></small>
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
	
