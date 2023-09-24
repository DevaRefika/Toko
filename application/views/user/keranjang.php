<div class="bg-dark">
<h1 class="text-center mb-3" style="margin-top: 70px;"><font color="sky blue">Shopping Chart</font></h1>

<div class="container">
	
	<div class="card">
	  <div class="card-header bg-info">
	   <h3>Keranjang</h3>
	  </div>
	  <div class="card-body">
	    <table class="table">
	    	<tr class="bg-dark">
	    		<th><font color="white">Judul</th>
	    		<th><font color="white">QTY</th>
	    		<th><font color="white">Aksi</th>
	    	</tr>
	    	<?php foreach($keranjang as $chart) : ?>
	    	<tr>
	    		<td><?= $chart['judul'] ?></td>
	    		<td><?= $chart['qty'] ?></td>
	    		<td>
	    			<a href="<?= base_url('user/hapusKeranjang/') . $chart['id'] ?>" class="btn btn-danger">Hapus</a>
	    		</td>
	    	</tr>
	    <?php endforeach ?>
	    </table>
	  </div>
	</div>

</div>