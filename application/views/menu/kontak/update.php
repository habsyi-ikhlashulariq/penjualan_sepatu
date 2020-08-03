
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
										<label for="kd_menu">Kode Menu Kontak :</label>
										<input type="text" class="form-control" placeholder="Kode Menu Kontak" name="kd_menu" value="<?= $kontak['kd_menu'] ?>">
										<small class="form-text text-danger"><?= form_error('kd_menu'); ?></small>
										<br>
										<label for="nama">Alamat Kontak :</label>
										<input type="text" class="form-control" placeholder="Alamat Menu Kontak" name="alamat" value="<?= $kontak['alamat'] ?>">
										<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
										<br>
										<label for="link">No Telp Kontak :</label>
										<input type="text" class="form-control" placeholder="No Telp Menu Kontak" name="no_telp" value="<?= $kontak['no_telp'] ?>">
										<small class="form-text text-danger"><?= form_error('no_telp'); ?></small>
										<br>
										<label for="link">Email Kontak :</label>
										<input type="email" class="form-control" placeholder="Email Kontak" name="email" value="<?= $kontak['email'] ?>">
										<small class="form-text text-danger"><?= form_error('email'); ?></small>
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
	
