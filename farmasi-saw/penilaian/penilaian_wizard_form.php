<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `penilaian` where id='$id'";
		$hasil=mysql_query($sqlnet)or die('Query penilaian Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$id_alternatif=$rows['id_alternatif']; 
			$id_batch=$rows['id_batch']; 
			$id_kriteria=$rows['id_kriteria']; 
			$nilai=$rows['nilai']; 
			$userid=$rows['userid']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="penilaian_wizard.php" method="POST" role="form">
				<legend>Form penilaian</legend>
				<input type="hidden" name="form" value="penilaian_wizard">
				<input type="hidden" name="id" value="<?php echo (!empty($id)?$id:''); ?>">
				
				
				<div class="form-group">
					<label for="id_batch">Alternatif</label>
					<!-- <input name="id_batch" type="text" class="form-control" id="id_batch" required placeholder="Masukkan id_batch" value="<?php echo (!empty($id_batch)?$id_batch:''); ?>"> -->
					<select name="id_alternatif" id="id_alternatif" class="form-control" required="required">
						<option value='0'>Pilih Alternatif</option>
						<?php 
						
							$sql="select a.id, a.alternatif, b.batch,c.nama from alternatif as a left join `batch` as b on a.id_batch=b.id join produk as c on b.id_produk=c.id";
							$hasil=mysql_query($sql) or die("Query Error:".$sql);
							if($hasil==true){
								while($row=mysql_fetch_array($hasil)){
									if(empty($id_alternatif)){
										echo "<option value='".$row['id']."'>".$row['alternatif']." (".$row['nama']." - ".$row['batch'].")</option>";
									}elseif(!empty($id_alternatif)){
										if($row['id']==$id_alternatif){
									// }elseif($id_alternatif==$row['id']){
									// }else{
										echo "<option value='".$id_alternatif."' selected='selected'>".$row['alternatif']."</option>";
										$id_alternatif='';
										}else{
										echo "<option value='".$id_alternatif."'>".$row['alternatif'].$id_alternatif."</option>";
	
										}

									}
								}
							}
						
						 ?>
						
					</select>
				</div>

				
			
				<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="penilaian.php?mode=wizard" class="btn btn-warning">Batal</a>
	
</form>