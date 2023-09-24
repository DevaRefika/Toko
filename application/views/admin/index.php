<div class="bg-dark">
<h2 class="text-center mt-5 mb-3"><font color="white">Data Buku</font></h2>
<div class="container">

	<button class="btn btn-outline-info mb-3" data-toggle="modal" data-target="#modalTambah">Tambah</button>

	<table class="table table-hover table-dark">
			<tr class="table-secondary">
				<td><font color="black">No</font></td>
				<td><font color="black">Gambar</font></td>
				<td><font color="black">Judul Buku</font></td>
				<td><font color="black">Penulis</font></td>
				<td><font color="black">Penerbit</font></td>
				<td><font color="black">Harga</font></td>
				<td><font color="black">Stok</font></td>
				<td><font color="black">Aksi</font></td>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($buku as $book) :?>
			<tr>
				<td><?= $no++ ?></td>
				<td> <img src="<?= base_url('assets/img/buku/') . $book['gambar'] ?>" width="50" class="" ></td>
				<td><?= $book['judul']; ?></td>
				<td><?= $book['penulis']; ?></td>
				<td><?= $book['penerbit']; ?></td>
				<td><?= $book['harga']; ?></td>
				<td><?= $book['stok']; ?></td>
				<td>
					<a href="<?= base_url('admin/hapus/') . $book['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus Data?');">Hapus</a>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>

</div>


<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?= base_url('admin/tambah') ?>" enctype="multipart/form-data">
      <div class="modal-body">
      	<div class="form-group">
	       <input type="text" name="judul" class="form-control" placeholder="Judul">
      	</div>
      	<div class="form-group">
	       <input type="text" name="penulis" class="form-control" placeholder="Nama Penulis">
      	</div>
      	<div class="form-group">
	       <input type="text" name="penerbit" class="form-control" placeholder="Penerbit">
      	</div>
      	<div class="form-group">
      		<label>Deskripsi Buku</label>
	       <textarea type="text" name="deskripsi" class="form-control" style="resize: none;"> </textarea>
      	</div>
      	<div class="form-group">
	       <input type="number" name="harga" class="form-control" placeholder="Harga">
      	</div>
      	<div class="form-group">
	       <input type="number" name="stok" class="form-control" placeholder="Stok">
      	</div>
		<div class="form-group">
	       <input type="file" name="gambar">
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
  </form>
    </div>
  </div>
</div>