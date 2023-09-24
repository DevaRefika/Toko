<div class="bg-dark">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= base_url('assets/img/carousel/1.jpg') ?>" alt="First slide" height="500">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets/img/carousel/2.jpg') ?>" alt="Second slide" height="500">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets/img/carousel/3.jpg') ?>" alt="Third slide" height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row container mx-auto">
  
  <?php foreach($buku as $book) : ?>

  <div class="col">
    <div class="card text-center mt-3 mb-3">
      <h5 class="card-header bg-info text-white"><?= $book['judul'] ?></h5>
      <div class="card-body">
        <img src="<?= base_url('assets/img/buku/') . $book['gambar'] ?>" alt="" width="200" class="mx-auto">
        <p class="card-text"><?= $book['deskripsi'] ?></p>
        <a href="<?= base_url('user/detail/') . $book['id'] ?>" class="btn btn-outline-info">Detail</a>
      </div>
    </div>
  </div>

<?php endforeach; ?>
  

</div>