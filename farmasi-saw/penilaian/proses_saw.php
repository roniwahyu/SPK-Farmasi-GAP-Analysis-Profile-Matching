<?php
include('../functions.php');
require('../koneksi.php'); 
include('../header.php'); 
 ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
			<button class="print btn btn-primary btn-md no-print">Cetak</button>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			
			<form action="proses_saw.php" method="POST" role="form">
				<legend>Pilih Produk</legend>
				<select name="id_produk" id="id_produk" class="form-control" required="required">
					<option value="">Pilih Produk</option>
						<?php

						$sql="select id,nama from produk";
						$result=mysql_query($sql) or die("Query Error ".mysql_error());
						while($row=mysql_fetch_array($result)){
									echo '<option value="'.$row['id'].'">'.$row['nama'].'</option>';
						}

						 ?>
								</select>	
				
				
			
				<button name="submit" type="submit" value="TRUE" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<?php 
		if(isset($_POST['submit'])):
			$id_produk=$_POST['id_produk'];
			// echo $id_produk;
		endif;

			if(isset($id_produk)): ?>
			<?php endif; ?>
		<?php include('tabel_penilaian_saw.php'); ?>
		<?php include('tabel_konversi_rating_saw.php'); ?>
		<?php include('tabel_nilai_maks_saw.php'); ?>
		<?php include('tabel_normalisasi_saw.php'); ?>
		<?php include('tabel_preferensi_saw.php'); ?>
		<?php include('tabel_nilai_akhir_saw.php'); ?>
		<?php //endif; ?>
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
		</div>
	</div>



</div>
<?php
include('../footer.php'); 
?>
