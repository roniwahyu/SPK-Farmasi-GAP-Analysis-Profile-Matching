<div class="container">
	
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php include('range_nilai_form.php'); ?>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr><th><input type="checkbox" name="checkall" id="checkall"></th>
						<th>No.</th>
						
						<th>Kriteria</th>
						
						<th>Range</th>
						
						<th>Min</th>
						
						<th>Max</th>
						
						<th>Metode</th>
						
					
						
						<th>Keterangan</th>
						
				
												
						<th>Aksi</th>
					</tr>
				</thead>
				<?php include('range_nilai_list.php'); 
					show_fuzzy('all');
					//rule_fuzzy();
				?>
			</table>
		</div>
	</div>

</div>
