<!DOCTYPE html>
<html>
<head>
	<title><?= $judul ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="icon" href="<?= base_url('assets/img/open-book.png') ?>">
</head>
<body class="">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-info">
<?php if($this->session->userdata('akses')=='1'):?>
       <a class="navbar-brand" href="<?= base_url('user') ?>">Bacalah</a>
        <a class="navbar-brand" href="<?= base_url('admin') ?>">AksesAdmin</a>
  <?php elseif($this->session->userdata('akses')=='2'):?>
     <a class="navbar-brand" href="<?= base_url('user') ?>">Bacalah</a>
<?php endif;?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
    </ul>
    <span class="navbar-text">
      <!-- Button trigger modal -->
      <a class="text-white mr-2" href="<?= base_url('user/chart'); ?>">
        <img src="<?= base_url('assets/img/chart.png') ?>" alt="" width="25px">
      </a>
		<a class="text-white" href="<?= base_url('login/logout'); ?>">
		  Logout
		  </a>
    </span>
  </div>
</nav>


