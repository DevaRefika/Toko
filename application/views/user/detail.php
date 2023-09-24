<div class="bg-dark">
<h3 class="text-center mb-5" style="margin-top: 70px;"><font color="sky blue">Detail Buku </h3></font>

<div class="container ">

	<div class="row ">
		
		<div class="col-md-3">
			
			<img src="<?= base_url('assets/img/buku/') . $buku['gambar']?>" alt="" height="300" >
			
			<h5 class="mt-4"><font color="sky blue">Deskripsi Buku</font></h5>

			<table>
				<tr>
					<td><font color="white">Judul Buku</font></td>
					<td><font color="white">:</font></td>
					<td><font color="white"><?= $buku['judul'] ?></font></td>
				</tr>
				<tr>
					<td><font color="white">Penulis</font></td>
					<td><font color="white">:</font></td>
					<td><font color="white"><?= $buku['penulis'] ?></font></td>
				</tr>
				<tr>
					<td><font color="white">Penerbit</font></td>
					<td><font color="white">:</font></td>
					<td><font color="white"><?= $buku['penerbit'] ?></font></td>
				</tr>
				<tr>
					<td><font color="white">Harga</font></td>
					<td><font color="white">:</font></td>
					<td><font color="white"><?= $buku['harga'] ?></font></td>
				</tr>
				<tr>
					<td><font color="white">Stok</font></td>
					<td><font color="white">:</font></td>
					<td><font color="white"><?= $buku['stok'] ?></font></td>
				</tr>
			</table>
	
		</div>

		<div class="col">

			<h4 class="mb-4"><font color="sky blue"><?= $buku['judul'] ?></h4>

			<h6><font color="white">Sinopsis :</h6>
			<p><font color="white"><?= $buku['deskripsi']; ?></p>

			<a href="<?= base_url('user/keranjang/') . $buku['id'] ?>" class="btn btn-outline-info float-right" style="width: 200px;">Beli</a>
			<a href="<?= base_url('user') ?>" class="btn btn-outline-info float-right mr-4" style="width: 200px;">Kembali</a >
		</div>
	
	</div>
</div>