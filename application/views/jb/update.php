
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
										<label for="kd_pegawai">Kode Jenis Barang :</label>
										<input type="text" class="form-control" placeholder="Kode Jenis Barang" name="kd_jb" value="<?= $jb['kd_jb'] ?>" readonly>
										<small class="form-text text-danger"><?= form_error('kd_jb'); ?></small>
										<br>
										<label for="nama">Nama Jenis Barang :</label>
										<input type="text" class="form-control" placeholder="Nama Jenis Barang" name="nama" value="<?= $jb['jenis_brg']; ?>">
										<small class="form-text text-danger"><?= form_error('nama'); ?></small>
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
	
