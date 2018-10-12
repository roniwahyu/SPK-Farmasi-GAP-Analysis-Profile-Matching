<?php 
include('functions.php');
include('koneksi.php');
// include('session.php');
include('header.php');
/*if(!isset($_SESSION['login_user'])):
	header("location: form_login.php");
endif;
*/
$error='';
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php 
			islogin();
			$error=$_SESSION['error'];
			if(isset($error)): ?>
			<div class="alert alert-warning">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Perhatian</strong> <?php echo $error ?>
			</div>
			<?php endif; ?>
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