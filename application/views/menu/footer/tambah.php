
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
										<label for="kd_menu">Kode Menu Footer :</label>
										<input type="text" class="form-control" placeholder="Kode Menu Footer" name="kd_menu" value="<?= set_value('kd_menu'); ?>">
										<small class="form-text text-danger"><?= form_error('kd_menu'); ?></small>
										<br>
										<label for="menu">Menu Footer :</label>
										<input type="text" class="form-control" placeholder="Menu Footer" name="menu_footer" value="<?= set_value('menu_footer'); ?>">
										<small class="form-text text-danger"><?= form_error('menu_footer'); ?></small>
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
	
