
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<?php if ($this->session->flashdata('flash') ):?>
						<div class="alert alert-success alert-dismissible" role="alert">
							Data Menu Sosmed <strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
						</div>
						<?php endif; ?>
						
						<div class="panel panel-headline">
							<div class="panel-body">
								<div class="row">
										<form class="navbar-form navbar-right" method="post" action="">
											<div class="input-group">
												<input type="text" value="" class="form-control" placeholder="Cari Menu Sosmed" name="keyword">
												<span class="input-group-btn"><button type="submit" class="btn btn-primary">Cari</button></span>
											</div>
										</form>
										<div class="panel-heading">
											<h3 class="panel-title"><?= $judul; ?></h3><br>
												<a href="<?= base_url('Menu/tambahSosmed') ?>" class="btn btn-primary"> <i class="lnr lnr-plus-circle"></i> <span>Tambah Menu Sosmed</span></a>
											
											</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Kode Sosmed</th>
												<th>Nama</th>
												<th>Class</th>
												<th>Link</th>
												<th>Tools</th>
											</tr>
										</thead>
										<tbody>
											<?php if (empty($sosmed)) : ?>
												<div class="alert alert-danger alert-dismissible" role="alert">
													Data yang anda <strong> cari </strong> tidak di temukan
														<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
												</div>
											<?php endif; foreach ($sosmed as $sosmed) : ?>
											<tr>
												<td><?= $sosmed['kd_menu'] ?></td>
												<td><?= $sosmed['nama'] ?></td>
												<td><?= $sosmed['class'] ?></td>
												<td><?= $sosmed['link'] ?></td>
												<td>
													<a href="<?= base_url() ?>Menu/updateSosmed/<?= $sosmed['kd_menu'] ?>" class="btn btn-warning"><i class="lnr lnr-sync"></i> <span>Update</span></a>
													<a href="<?= base_url() ?>Menu/deleteSosmed/<?= $sosmed['kd_menu'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Mau Di Hapus');"><i class="lnr lnr-trash"></i> <span>Delete</span></a>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
	
