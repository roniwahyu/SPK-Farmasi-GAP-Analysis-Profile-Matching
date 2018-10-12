<div class="container">
	
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php include('alternatif_form.php'); ?>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr><th><input type="checkbox" name="checkall" id="checkall"></th>
						<th>No.</th>
						
						<th>Alternatif</th>
						<th>Tanggal</th>
						
						<th>Produk</th>
						<th>Batch #</th>
						
				
						<th>Aksi</th>
					</tr>
				</thead>
				<?php include('alternatif_list.php'); 
					show_fuzzy('all');
					//rule_fuzzy();
				?>
			</table>
		</div>
	</div>

</div>
