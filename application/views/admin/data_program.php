<div class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- Daftar Program -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="blue">
						<h4 class="title">Tabel Daftar Program
						<a href="<?php echo base_url() . 'admin/buatProgram' ?>">
						<i class="material-icons float-right" style="border-radius:100px; background-color:#fff; color:#0CB5C9;" title="buat program">add</i>
						</h4>
						<p class="category">Daftar Program Bantuan Bencana</p>
					</div>
					<div class="card-content table-responsive">
						<table class="table table-hover">
							<thead class="text-primary">
								<tr>
									<th >Nama Program</th>
									<th>Jenis Bencana</th>
									<th>Jumlah Pengungsi</th>	
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($data->result_array() as $bcn) : ?>
								<tr>
									<td> <?= $bcn['nama_program']; ?></td>
									<td> <?= $bcn['jenis_bencana']; ?></td>
									<td> <?= $bcn['jumlah_pengungsi']; ?></td>
									<!-- Menghapus data -->
									<td class="text-center">
									<a href="<?= base_url() ?>admin/editBencana/<?= $bcn['id_bencana']; ?>" class="text-center" title="edit"><i class="material-icons">create</i></a>
									<a href="<?= base_url() ?>admin/hapusBencana/<?= $bcn['id_bencana']; ?>" class="text-center tombol-hapus" title="hapus"><i class="material-icons">delete_sweep</i></a>
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
		    <!-- End Daftar Program -->
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
