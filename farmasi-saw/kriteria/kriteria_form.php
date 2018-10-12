<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `kriteria` where id='$id'";
		$hasil=mysql_query($sqlnet)or die('Query kriteria Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$kode=$rows['kode']; 
			$kriteria=$rows['kriteria']; 
			$bobot_saw=$rows['bobot_saw']; 
			$standar_gap=$rows['standar_gap']; 
			$satuan=$rows['satuan']; 
			$keterangan=$rows['keterangan']; 
			$userid=$rows['userid']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="kriteria_proses.php" method="POST" role="form">
				<legend>Form kriteria</legend>
				<input type="hidden" name="form" value="kriteria">
				<input type="hidden" name="id" value="<?php echo (!empty($id)?$id:''); ?>">
				
				<div class="form-group">
					<label for="kode">Kode</label>
					<input name="kode" type="text" class="form-control" id="kode" required placeholder="Masukkan kode" value="<?php echo (!empty($kode)?$kode:''); ?>">
				</div>
				<div class="form-group">
					<label for="kriteria">Kriteria</label>
					<input name="kriteria" type="text" class="form-control" id="kriteria" required placeholder="Masukkan kriteria" value="<?php echo (!empty($kriteria)?$kriteria:''); ?>">
				</div>
				<div class="form-group">
					<label for="bobot_saw">Bobot SAW</label>
					<input name="bobot_saw" type="text" class="form-control" id="bobot_saw" required placeholder="Masukkan bobot_saw" value="<?php echo (!empty($bobot_saw)?$bobot_saw:''); ?>">
				</div>
				<div class="form-group">
					<label for="standar_gap">Standar GAP</label>
					<input name="standar_gap" type="text" class="form-control" id="standar_gap" required placeholder="Masukkan standar_gap" value="<?php echo (!empty($standar_gap)?$standar_gap:''); ?>">
				</div>
				<div class="form-group">
					<label for="satuan">Satuan</label>
					<input name="satuan" type="text" class="form-control" id="satuan" placeholder="Masukkan satuan" value="<?php echo (!empty($satuan)?$satuan:''); ?>">
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Masukkan keterangan" value="<?php echo (!empty($keterangan)?$keterangan:''); ?>">
				</div>
			
				<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="kriteria.php" class="btn btn-warning">Batal</a>
	
</form>