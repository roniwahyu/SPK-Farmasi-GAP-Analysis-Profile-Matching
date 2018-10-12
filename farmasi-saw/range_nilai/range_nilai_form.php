<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `range_nilai` where id='$id'";
		$hasil=mysql_query($sqlnet)or die('Query range_nilai Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$id_kriteria=$rows['id_kriteria']; 
			$range=$rows['range']; 
			$min=$rows['min']; 
			$max=$rows['max']; 
			$metode=$rows['metode']; 
			$userid=$rows['userid']; 
			$keterangan=$rows['keterangan']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="range_nilai_proses.php" method="POST" role="form">
				<legend>Form range_nilai</legend>
				<input type="hidden" name="form" value="range_nilai">
				<input type="hidden" name="id" value="<?php echo (!empty($id)?$id:''); ?>">
				<div class="form-group">
					<label for="id_kriteria">Id_kriteria</label>
				<select name="id_kriteria" id="id_kriteria" class="form-control" required="required">
						<option value='0'>Pilih Kriteria</option>
						<?php 
						
							$sql="select * from kriteria";
							$hasil=mysql_query($sql) or die("Query Error:".$sql);
							if($hasil==true){
								while($row=mysql_fetch_array($hasil)){
									if(empty($id_kriteria)){
										echo "<option value='".$row['id']."'>".$row['kriteria']."</option>";
									}elseif(!empty($id_kriteria)){
										if($row['id']==$id_kriteria){
									// }elseif($id_kriteria==$row['id']){
									// }else{
										echo "<option value='".$id_kriteria."' selected='selected'>".$row['kriteria']."</option>";
										$id_kriteria='';
										}else{
										echo "<option value='".$id_kriteria."'>".$row['kriteria'].$id_kriteria."</option>";
	
										}

									}
								}
							}
						
						 ?>
						
					</select>
				
					<!-- <input name="id_kriteria" type="text" class="form-control" id="id_kriteria" required placeholder="Masukkan id_kriteria" value="<?php echo (!empty($id_kriteria)?$id_kriteria:''); ?>"> -->
					<?php //echo dropdown(get_data('kriteria'),"id='id_kriteria' class='form-control tanggal' name='id_kriteria'",'id','kriteria'); ?>
			
				</div>
				<div class="form-group">
					<label for="range">Range</label>
					<input name="range" type="text" class="form-control" id="range" required placeholder="Masukkan range" value="<?php echo (!empty($range)?$range:''); ?>">
				</div>
				<div class="form-group">
					<label for="min">Min</label>
					<input name="min" type="text" class="form-control" id="min" required placeholder="Masukkan min" value="<?php echo (!empty($min)?$min:''); ?>">
				</div>
				<div class="form-group">
					<label for="max">Max</label>
					<input name="max" type="text" class="form-control" id="max" required placeholder="Masukkan max" value="<?php echo (!empty($max)?$max:''); ?>">
				</div>
				<div class="form-group">
					<label for="metode">Metode</label>
					<!-- <input name="metode" type="text" class="form-control" id="metode" required placeholder="Masukkan metode" value="<?php echo (!empty($metode)?$metode:''); ?>"> -->
					<select name="metode" id="metode" class="form-control">
						<option value="">-- Pilih Metode--</option>
						<option value="SAW" <?php echo (!empty($metode) && $metode=='SAW'?"selected='selected'":''); ?>>SAW</option>	
						<option value="GAP" <?php echo (!empty($metode) && $metode=='GAP'?"selected='selected'":''); ?>>GAP</option>	
						
					</select>
				</div>
				
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<input name="keterangan" type="text" class="form-control" id="keterangan" required placeholder="Masukkan keterangan" value="<?php echo (!empty($keterangan)?$keterangan:''); ?>">
				</div>
			
				<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="range_nilai.php" class="btn btn-warning">Batal</a>
	
</form>