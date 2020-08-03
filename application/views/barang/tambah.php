
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
                                    
									<?= form_open_multipart('Barang/tambah') ?>
										<label for="kd_pegawai">Kode Barang :</label>
										<input type="text" class="form-control" placeholder="Kode Barang" name="kd_brg" value="<?= set_value('kd_brg'); ?>">
										<small class="form-text text-danger"><?= form_error('kd_brg'); ?></small>
										<br>
										<label for="img_brg">Image Barang: </label>
										<input class="form-control" type="file" name="img_brg">
                                        <small class="form-text text-danger"><?= form_error('img_brg'); ?></small>
										<br>
										<label for="nama">Nama Barang :</label>
										<input type="text" class="form-control" placeholder="Nama Barang" name="nama" value="<?= set_value('nama'); ?>">
										<small class="form-text text-danger"><?= form_error('nama'); ?></small>
										<br>
                                        <label for="hrg_brg">Harga Barang :</label>
										<input type="text" class="form-control" placeholder="Harga Barang" name="hrg_brg" value="<?= set_value('hrg_brg'); ?>">
										<small class="form-text text-danger"><?= form_error('hrg_brg'); ?></small>
										<br>
                                        <label for="ukuran">Ukuran Barang :</label>
										<input type="text" class="form-control" placeholder="Ukuran Barang" name="ukuran" value="<?= set_value('ukuran'); ?>">
										<small class="form-text text-danger"><?= form_error('ukuran'); ?></small>
										<br>
                                        <label for="deskripsi">Deskripi Barang :</label>
										<input type="text" class="form-control" placeholder="Deskripsi Barang" name="deskripsi" value="<?= set_value('deskripsi'); ?>">
										<small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
										<br>
                                        <label for="jb">Jenis Barang :</label>
										<select name="jb" id="jb" class="form-control">
										<?php foreach ($jb as $jb) :?>
										<option value="<?= $jb['kd_jb'] ?>"><?= $jb['jenis_brg']; ?></option>
										<?php endforeach; ?>
										</select>
										<small class="form-text text-danger"><?= form_error('jb'); ?></small>
										<input type="hidden" class="form-control" placeholder="Tanggal Upload" name="tgl_upload" value="<?= date('Y/m/d'); ?>" readonly>
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
	
