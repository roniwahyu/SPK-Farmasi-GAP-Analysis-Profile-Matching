<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `produk` where id='$id'";
		$hasil=mysql_query($sqlnet)or die('Query produk Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$nama=$rows['nama']; 
			$jenis=$rows['jenis']; 
			$userid=$rows['userid']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="produk_proses.php" method="POST" role="form">
				<legend>Form Produk</legend>
				<input type="hidden" name="form" value="produk">
				<input type="hidden" name="id" value="<?php echo (!empty($id)?$id:''); ?>">
				
				<div class="form-group">
					<label for="nama">Nama</label>
					<input name="nama" type="text" class="form-control" id="nama" required placeholder="Masukkan nama" value="<?php echo (!empty($nama)?$nama:''); ?>">
				</div>
				<div class="form-group">
					<label for="jenis">Jenis</label>
					<input name="jenis" type="text" class="form-control" id="jenis" required placeholder="Masukkan jenis" value="<?php echo (!empty($jenis)?$jenis:''); ?>">
				</div>
				
				<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="produk.php" class="btn btn-warning">Batal</a>
	
</form>