<?php 
include('functions.php');
include('session.php');
include('header.php');

?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="jumbotron home">
				<div class="container">
					<h1 class="text-center">SPK Kelayakan Produk <i>Sample</i></h1>
					<h3 class="text-center">Studi Perbandingan Metode</h3>
					<h3 class="text-center">Simple Additive Weighting dengan GAP Analisis</h3>
					<p class="text-center ">
						<div class="btn-group">
							<a href="laporan.php" class=" btn btn-danger btn-lg">Selanjutnya</a>
							<a href="<?php echo baseurl('penilaian/penilaian.php') ?>" class=" btn btn-primary btn-lg">Penilaian</a>
						</div>
					</p>
				</div>
			</div>
		</div>
		

		
	</div>
</div>
<?php include('footer.php'); ?>