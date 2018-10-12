<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `alternatif` where id='$id'";
		$hasil=mysql_query($sqlnet)or die('Query alternatif Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$alternatif=$rows['alternatif']; 
			$id_batch=$rows['id_batch']; 
			$userid=$rows['userid']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="alternatif_proses.php" method="POST" role="form">
				<legend>Form alternatif</legend>
				<input type="hidden" name="form" value="alternatif">
				<input type="hidden" name="id" value="<?php echo (!empty($id)?$id:''); ?>">
				
				<div class="form-group">
					<label for="alternatif">Alternatif</label>
					<input name="alternatif" type="text" class="form-control" id="alternatif" required placeholder="Masukkan alternatif" value="<?php echo (!empty($alternatif)?$alternatif:''); ?>">
				</div>
				<div class="form-group">
					<label for="id_batch">Batch</label>
					<input name="id_batch" type="text" class="form-control" id="id_batch" required placeholder="Masukkan id_batch" value="<?php echo (!empty($id_batch)?$id_batch:''); ?>">
				</div>
				
				<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="alternatif.php" class="btn btn-warning">Batal</a>
	
</form>