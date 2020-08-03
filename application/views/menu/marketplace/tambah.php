
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
                                    
								<?= form_open_multipart('Menu/tambahMarketplace') ?>
										<label for="kd_menu">Kode Menu Marketplace :</label>
										<input type="text" class="form-control" placeholder="Kode Menu Marketplace" name="kd_menu" value="<?= set_value('kd_menu'); ?>">
										<small class="form-text text-danger"><?= form_error('kd_menu'); ?></small>
										<br>
										<label for="nama">Img Menu Marketplace :</label>
										<input class="form-control" type="file" name="img_market">
                                        <small class="form-text text-danger"><?= form_error('img_market'); ?></small>
										<br>
										<label for="link">Link Menu Marketplace :</label>
										<input type="text" class="form-control" placeholder="Link Menu Marketplace" name="link" value="<?= set_value('link'); ?>">
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
	
