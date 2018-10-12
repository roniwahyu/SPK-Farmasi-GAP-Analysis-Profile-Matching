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
					<label for="alternatif">Nama Alternatif</label>
					<input name="alternatif" type="text" class="form-control" id="alternatif" required placeholder="Masukkan alternatif" value="<?php echo (!empty($alternatif)?$alternatif:''); ?>">
				</div>
				<div class="form-group">
					<label for="alternatif">Batch Produk</label>

				<select name="id_batch" id="id_batch" class="form-control" required="required">
						<option value='0'>Pilih Batch Produk</option>
						<?php 
						
							$sql="select a.id,b.nama,a.`batch` from batch as a left join produk as b on a.id_produk=b.id";
							$hasil=mysql_query($sql) or die("Query Error:".$sql);
							if($hasil==true){
								while($row=mysql_fetch_array($hasil)){
									if(empty($id_batch)){
										echo "<option value='".$row['id']."'>".$row['nama']." - ".$row['batch']."</option>";
									}elseif(!empty($id_batch)){
										if($row['id']==$id_batch){
									// }elseif($id_batch==$row['id']){
									// }else{
										echo "<option value='".$id_batch."' selected='selected'>".$row['batch']."</option>";
										$id_batch='';
										}else{
										echo "<option value='".$id_batch."'>".$row['batch'].$id_batch."</option>";
	
										}

									}
								}
							}
						
						 ?>
						
					</select>
				</div>
				<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="alternatif.php" class="btn btn-warning">Batal</a>
	
</form>