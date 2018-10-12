<?php
include('functions.php');
require('koneksi.php'); 
include('header.php'); 
akses_adm_mgr();
 ?>

<div class="container">
	
	<div class="row">
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<?php include('penilaian/tabel_pm.php') ?>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<?php include('penilaian/tabel_nilai_akhir_saw.php'); ?>
		</div>
	</div>

</div>
<?php
include('footer.php'); 
?>