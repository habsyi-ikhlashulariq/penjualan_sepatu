
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<?php if ($this->session->flashdata('flash') ):?>
							<div class="alert alert-success alert-dismissible" role="alert">
							<?= $this->session->flashdata('flash'); ?> <strong><?= $user['nama'] ?></strong>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
							</div>
						<?php endif; ?>
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Hari Ini</h3>
							<p class="panel-subtitle"><?= date('l, d-m-Y'); ?></p>
						</div>
						<div class="panel-body">
							<div class="row">
							
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="lnr lnr-inbox"></i></span>
										<p>
											<span class="number"><?= $countJb; ?></span>
											<span class="title"><a href="<?= base_url() ?>JenisBrg">Data Jenis Barang</a></span>
										</p>
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="lnr lnr-users"></i></span>
										<p>
											<span class="number"><?= $countBrg; ?></span>
											<span class="title"><a href="<?= base_url() ?>Barang">Data Barang</a></span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="lnr lnr-user"></i></span>
										<p>						
												<span class="number"><?= $countUsr; ?></span>
												<span class="title"><a href="<?= base_url() ?>User">Data User</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
	
