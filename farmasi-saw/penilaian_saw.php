<?php
include('functions.php');
require('koneksi.php'); 
include('header.php'); 
 ?>

<div class="container">
	
	<div class="row">
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr><th><input type="checkbox" name="checkall" id="checkall"></th>
						<th>No.</th>
						
						<th>Alternatif</th>
						<th>Produk</th>
						<th>Batch</th>
						
						<th>C1 (Oven)</th>
						<th>C2 (Ruang)</th>
						<th>C3 (pH)</th>
						<th>C4 (Visko)</th>
						<th>C5 (Kadar)</th>
						<th>C6 (Mikro)</th>
						
						
						
												
						<th>Aksi</th>
					</tr>
				</thead>
				<?php include('penilaian_kriteria_list.php'); 
				
					//rule_fuzzy();
				?>
			</table>
		</div>
	</div>

</div>
<?php
include('footer.php'); 
?>