
<?php
include('../functions.php');
require('../koneksi.php'); 
include('../header.php'); 
?>
<div class="container">
	
	<div class="row">
<?php
$a= isset($_POST['id_alternatif']) ? clean(htmlspecialchars($_POST['id_alternatif'])) : '';
$action= isset($_POST['form-id']) ? clean(htmlspecialchars($_POST['form-id'])) : '';
$k= isset($_POST['kriteria']) ? $_POST['kriteria'] : '';
// $k= $_POST['kriteria'];
// print_r($k);
// print_r($kriteria);

if(!empty($action)||isset($action)||$action!=null){
	if($action=="go_wizard"){
		if(isset($k) && $k!=null){
			// foreach ($k as $key => $value) {
				# code...

				// $data=array();
				// print_r($value);
			// }
			$sql=mysql_query("select * from kriteria") or die("Query Error:".mysql_error());
			// $proses=mysql_fetch_assoc($sql);
			
			$i=0;
			while ($row=mysql_fetch_assoc($sql)) {
				$id_kriteria=$row['id'];
				$sqlx="insert into penilaian (id_alternatif,id_kriteria,nilai,datetime) values ('".$a."','".$row['id']."','".$k[$i]."','".now()."');";
				$query=mysql_query($sqlx) or die ("Query Error:".mysql_error());
				# code...
				// print_r($sqlx);
				$i++;
			}
			if(isset($query) || $query!=null){
				?>
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p><strong>Sukses</strong> Penilaian Sukses</p>
					<a href="penilaian.php?mode=wizard" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i>Kembali Ke Pilihan Alternatif Penilaian</a>

				</div>

				<?php
			}
		}
			// print_r($proses);
	}
}	
?>



		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php 
				if(!empty($a) || isset($a)){
	
					$sqlnet="select a.id, a.alternatif, b.batch,c.nama from alternatif as a left join `batch` as b on a.id_batch=b.id join produk as c on b.id_produk=c.id where a.id='".$a."'";
					// echo $sqlnet;
					$hasil=mysql_query($sqlnet)or die('Query penilaian Error:'.mysql_error());
					$alt=mysql_fetch_assoc($hasil);
					// print_r($alt);
					?>
					<div class="form-group">
						<label for="nilai">Alternatif: </label>
						<label for="nilai"><?php echo $alt['alternatif']?></label>
					</div>
					<div class="form-group">
						<label for="nilai">Batch:</label><label for="nilai"><?php echo $alt['batch']?></label>
					</div>
					<div class="form-group">
						<label for="nilai">Nama: </label><label for="nilai"><?php echo $alt['nama']?></label>
					</div>
					
					<?php 
					// echo $alt['nama'];
					

				} 

			 ?>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				
			

<?php if((!empty($a) || $a!=null) && $a>0): ?>
<form action="penilaian_wizard.php" method="POST" role="form">
	<legend>Form penilaian</legend>
		<input type="hidden" name="form-id" value="go_wizard">
		<input type="hidden" name="id_alternatif" value="<?php echo (!empty($a)?$a:''); ?>">
			<div class="row">
				
				<?php 
					$sql="select * from kriteria";
					$hasil=mysql_query($sql) or die("Query Error:".$sql);
						if($hasil==true):
							while($row=mysql_fetch_array($hasil)):
								$kode=$row['kode']; 
								$kriteria=$row['kriteria']; 
								$bobot_saw=$row['bobot_saw']; 
								$standar_gap=$row['standar_gap']; 
								$satuan=$row['satuan']; 
								$keterangan=$row['keterangan']; 
								
						 ?>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					
				
				<div class="form-group">
					<label for="nilai"><?php echo $kriteria." (".$kode.")" ?></label>
					<input name="kriteria[]" type="text" class="form-control" id="<?php echo $kriteria ?>" required placeholder="<?php echo $kriteria  ?>" value="<?php echo (!empty($nilai)?$nilai:''); ?>">
				</div>
				</div>
				<?php endwhile;endif; ?>
				</div>			
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
						<a href="penilaian.php?mode=wizard" class="btn btn-warning">Batal</a>
						
					</div>
	</div>
</form>
<?php endif; ?>
		</div>
		
	</div>

</div>
<?php include('../footer.php'); ?>