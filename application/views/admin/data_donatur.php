<div class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- Daftar Donatur -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="blue">
						<h4 class="title">Tabel Daftar Donatur</h4>
						<p class="category">Daftar Donatur Program Bantuan Bencana</p>
					</div>
					<div class="card-content table-responsive">
						<table class="table table-hover">
							<thead class="text-primary">
								<tr>
									<th>Nama Lengkap</th>
									<th>Email</th>
									<th>Alamat</th>
									<th>No. Telepon</th>
									<th class="text-primary text-center">Action</th>
								</tr>
							</thead>
							<tbody>

								<?php foreach ($data->result_array() as $dtr) : ?>
								<tr>
									<td>
										<?= $dtr['nama_lengkap']; ?>
									</td>
									<td>
										<?= $dtr['email']; ?>
									</td>
									<td>
										<?= $dtr['alamat']; ?>
									</td>
									<td>
										<?= $dtr['no_telepon']; ?>
									</td>
									<!-- Menghapus data -->
									<td class="text-center">
										<a href="<?= base_url() ?>admin/editDonatur/<?= $dtr['id_donatur']; ?>"><i class="material-icons" title="edit">create</i></a>
										<a href="<?= base_url() ?>admin/hapusDonatur/<?= $dtr['id_donatur']; ?>" class="tombol-hapus"><i class="material-icons" title="hapus">delete_sweep</i></a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<?php if(empty($data)) : ?>
						<div class="title text-center text-warning"><h3>DATA TIDAK DITEMUKAN</h3></div>
						<?php endif; ?>	
					</div>
				</div>
			</div>
			<!-- End Daftar Donatur -->
			<!-- pagenation -->
			<div class="row">
				<div class="col">
					<?php echo $pagination; ?>
				</div>
			</div>
			<!-- end pagenation -->
		</div>
	</div>
</div>
