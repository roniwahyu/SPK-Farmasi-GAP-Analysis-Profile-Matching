<?php include 'session.php'; ?>
<!DOCTYPE html>
	<html lang="">
		<head>
			<title>SPK KPS</title>
			<meta charset="UTF-8">
			<meta name="description" content="">
			
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			
		</head>
		<body>
			<nav class="navbar  navbar-inverse navbar-static" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo baseurl() ?>">SPK KPS</a>
				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					
					<ul class="nav navbar-nav ">
						<?php //if(!empty($login_session) || $login_session<>null): ?>
						<!-- <li><a href="#">About</a></li> -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-chevron-down"></i> Kelola </b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo baseurl('produk/produk.php'); ?>">Kelola Produk</a></li>
								<li><a href="<?php echo baseurl('batch/batch.php'); ?>">Kelola Batch Produk</a></li>
								<!-- <li><a href="<?php //echo baseurl('range_nilai/range_nilai.php'); ?>">Kelola Range Nilai</a></li> -->
								<li><a href="<?php echo baseurl('kriteria/kriteria.php'); ?>">Kelola Kriteria</a></li>
								<li><a href="<?php echo baseurl('alternatif/alternatif.php'); ?>">Kelola Alternatif</a></li>
								<li><a href="<?php echo baseurl('bobot_pm/bobot_pm.php'); ?>">Kelola GAP</a></li>
								<li><a href="<?php echo baseurl('penilaian/penilaian.php'); ?>">Kelola Penilaian</a></li>
							
								
							</ul>
						<li><a href="<?php echo baseurl('penilaian/penilaian.php?mode=wizard'); ?>">Penilaian Wizard</a></li>
						</li><li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-chevron-down"></i> Laporan </a>
							<ul class="dropdown-menu">
								
								
								<li><a href="<?php echo baseurl('laporan_penilaian.php') ?>">Laporan Penilaian</a></li>
								<li><a href="<?php echo baseurl('laporan.php') ?>">Laporan SPK</a></li>
								
							</ul>
						</li>
						<?php //endif; ?>
						<!-- Tombol Login -->
						<?php if(isset($login_session) || $login_session<>null): ?>
						<li class=""><a href="<?php echo baseurl('logout.php') ?>" >Logout</a></li>
						<?php else: ?>
						<li class=""><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
						<?php endif; ?>
					</ul>

				</div><!-- /.navbar-collapse -->
			</nav>

			