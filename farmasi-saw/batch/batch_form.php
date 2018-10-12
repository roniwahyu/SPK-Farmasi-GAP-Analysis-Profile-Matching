<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `batch` where id='$id'";
		$hasil=mysql_query($sqlnet)or die('Query batch Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$tanggal=$rows['tanggal']; 
			$batch=$rows['batch']; 
			$id_produk=$rows['id_produk']; 
			$userid=$rows['userid']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="batch_proses.php" method="POST" role="form">
				<legend>Form Batch Produk</legend>
				<input type="hidden" name="form" value="batch">
				<input type="hidden" name="id" value="<?php echo (!empty($id)?$id:''); ?>">
				
				<div class="form-group">
					<label for="tanggal">Tanggal</label>

					<div class="input-daterange input-group controls" id="datepicker">
					<input name="tanggal" type="text" class="form-control" id="tanggal" required placeholder="Masukkan tanggal" value="<?php echo (!empty($tanggal)?$tanggal:date('Y-m-d')); ?>">
                                                             
                                </div>    
				</div>
				<div class="form-group">
					<label for="batch">Batch</label>
					<input name="batch" type="text" class="form-control" id="batch" required placeholder="Masukkan batch" value="<?php echo (!empty($batch)?$batch:''); ?>">
				</div>
				<div class="form-group">
					<label for="id_produk">Produk</label>
					<?php echo dropdown(get_data('produk'),"id='id_produk' class='form-control tanggal' name='id_produk'",'id','nama'); ?>
				</div>
		
				<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="batch.php" class="btn btn-warning">Batal</a>
	
</form>