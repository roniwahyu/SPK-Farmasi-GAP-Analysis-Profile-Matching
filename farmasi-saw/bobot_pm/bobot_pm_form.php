<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `bobot_pm` where id_bobot='$id'";
		$hasil=mysql_query($sqlnet)or die('Query bobot_pm Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$selisih=$rows['selisih']; 
			$bobot=$rows['bobot']; 
			$keterangan=$rows['keterangan']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="bobot_pm_proses.php" method="POST" role="form">
				<legend>Form bobot_pm</legend>
				<input type="hidden" name="form" value="bobot_pm">
				<input type="hidden" name="id_bobot" value="<?php echo (!empty($id_bobot)?$id_bobot:''); ?>">
				
				<div class="form-group">
					<label for="selisih">Selisih</label>
					<input name="selisih" type="text" class="form-control" id="selisih" required placeholder="Masukkan selisih" value="<?php echo (!empty($selisih)?$selisih:''); ?>">
				</div>
				<div class="form-group">
					<label for="bobot">Bobot</label>
					<input name="bobot" type="text" class="form-control" id="bobot" required placeholder="Masukkan bobot" value="<?php echo (!empty($bobot)?$bobot:''); ?>">
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<input name="keterangan" type="text" class="form-control" id="keterangan" required placeholder="Masukkan keterangan" value="<?php echo (!empty($keterangan)?$keterangan:''); ?>">
				</div>
			
				<button name="<?php echo !empty($id_bobot)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="bobot_pm.php" class="btn btn-warning">Batal</a>
	
</form>