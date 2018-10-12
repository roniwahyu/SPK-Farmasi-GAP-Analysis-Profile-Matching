<div class="container">
	
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php include('produk_form.php'); ?>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<td><input type="checkbox" name="del[]" id="<?php echo $row['id'] ?>"></td>
						<th>No.</th>
						
						<th>Nama Produk</th>
						<th>Jenis</th>
																		
						<th>Aksi</th>
					</tr>
				</thead>
				<?php include('produk_list.php'); 
					show_fuzzy();
					
				?>
			</table>
		</div>
	</div>

</div>
