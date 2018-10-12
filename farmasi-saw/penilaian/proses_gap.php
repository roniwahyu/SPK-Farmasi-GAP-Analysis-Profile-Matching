<?php
include('../functions.php');
require('../koneksi.php'); 
include('../header.php'); 
 ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
			<button class="print btn btn-primary btn-md no-print">Cetak</button>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			
			<form action="proses_gap.php" method="POST" role="form">
				<legend>Pilih Produk</legend>
				<select name="id_produk" id="id_produk" class="form-control" required="required">
					<option value="">Pilih Produk</option>
						<?php

						$sql="select id,nama from produk";
						$result=mysql_query($sql) or die("Query Error ".mysql_error());
						while($row=mysql_fetch_array($result)){
									echo '<option value="'.$row['id'].'">'.$row['nama'].'</option>';
						}

						 ?>
								</select>	
				
				
			
				<button name="submit" type="submit" value="TRUE" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<?php 
		if(isset($_POST['submit'])):
			$id_produk=$_POST['id_produk'];
			// echo $id_produk;
		endif;

		 ?>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Penilaian Kriteria</h3>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						
						<th>Alternatif</th>
						<th>Produk</th>
						<th>Batch</th>
						
						<th>C1 (Oven)</th>
						<th>C2 (Ruang)</th>
						<th>C3 (pH)</th>
						<th>C4 (Visko)</th>
						<th>C5 (Kadar)</th>
						<th>C6 (Mikro)</th>
						
						
						
												
						
					</tr>
				</thead>
				<?php 
				// $sql="select * from `00-view-penilaian-kriteria`";
				if(isset($id_produk)):
					$sql="select * from `00-view-penilaian-kriteria` where id_produk='".$id_produk."' order by id_alternatif";
				else:
					$sql="select * from `00-view-penilaian-kriteria`";
				endif;
				$hasil=mysql_query($sql) or die("Error:".mysql_error());
				$i=1;
				while($row=mysql_fetch_assoc($hasil)){
					echo "<tr>";
					
					echo "<td>".$i."</td>";
					echo "<td>".$row['alternatif']."</td>";
					echo "<td>".$row['nama']."</td>";
					echo "<td>".$row['batch']."</td>";
					echo "<td>".$row['C1']."</td>";
					echo "<td>".$row['C2']."</td>";
					echo "<td>".$row['C3']."</td>";
					echo "<td>".$row['C4']."</td>";
					echo "<td>".$row['C5']."</td>";
					echo "<td>".$row['C6']."</td>";
				
					echo "</tr>";
					$i++;
				}
				 ?>
				<tbody>

				</tbody>
			</table>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<h3>Standar GAP </h3>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Kriteria</th>
						<th>Standar GAP</th>	
					</tr>
				</thead>
				<?php 
				$sql="select * from `00-view-standar-profile`";

				$hasil=mysql_query($sql) or die("Error:".mysql_error());
		
				while($row=mysql_fetch_assoc($hasil)){
					echo "<tr>";
				
					echo "<td>".$row['kode']." (".$row['kriteria'].")</td>";
					
					echo "<td>".$row['standar_gap']."</td>";
				
					
					echo "</tr>";
				
				}
				 ?>
				<tbody>

				</tbody>
			</table>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
			<h3>Konversi Rating</h3>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						
						<th>Alternatif</th>
						<th>Produk</th>
						<th>Batch</th>
						
						<th>C1 (Oven)</th>
						<th>C2 (Ruang)</th>
						<th>C3 (pH)</th>
						<th>C4 (Visko)</th>
						<th>C5 (Kadar)</th>
						<th>C6 (Mikro)</th>
						
						
						
												
						
					</tr>
				</thead>
				<?php 
				// $sql="select * from `01-view-rating-profile`";
				if(isset($id_produk)):
					$sql="select * from `01-view-rating-profile` where id_produk='".$id_produk."' order by id_alternatif";
				else:
					$sql="select * from `01-view-rating-profile`";
				endif;
				$hasil=mysql_query($sql) or die("Error:".mysql_error());
				$i=1;
				while($row=mysql_fetch_assoc($hasil)){
					echo "<tr>";
				
					echo "<td>".$i."</td>";
					echo "<td>".$row['alternatif']."</td>";
					echo "<td>".$row['nama']."</td>";
					echo "<td>".$row['batch']."</td>";
					echo "<td>".$row['C1']."</td>";
					echo "<td>".$row['C2']."</td>";
					echo "<td>".$row['C3']."</td>";
					echo "<td>".$row['C4']."</td>";
					echo "<td>".$row['C5']."</td>";
					echo "<td>".$row['C6']."</td>";
					
					echo "</tr>";
					$i++;
				}
				 ?>
				<tbody>

				</tbody>
			</table>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Nilai Gap</h3>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						<th>Alternatif</th>
						<th>Produk</th>
						<th>Batch</th>
						<th>C1 (Oven)</th>
						<th>C2 (Ruang)</th>
						<th>C3 (pH)</th>
						<th>C4 (Visko)</th>
						<th>C5 (Kadar)</th>
						<th>C6 (Mikro)</th>
					</tr>
				</thead>
				<?php 
				// $sql="select * from `02-view-gap-profile`";
				if(isset($id_produk)):
					$sql="select * from `02-view-gap-profile` where id_produk='".$id_produk."' order by id_alternatif";
				else:
					$sql="select * from `02-view-gap-profile`";
				endif;
				$hasil=mysql_query($sql) or die("Error:".mysql_error());
				$i=1;
				while($row=mysql_fetch_assoc($hasil)){
					echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$row['alternatif']."</td>";
					echo "<td>".$row['nama']."</td>";
					echo "<td>".$row['batch']."</td>";
					echo "<td>".$row['gapc1']."</td>";
					echo "<td>".$row['gapc2']."</td>";
					echo "<td>".$row['gapc3']."</td>";
					echo "<td>".$row['gapc4']."</td>";
					echo "<td>".$row['gapc5']."</td>";
					echo "<td>".$row['gapc6']."</td>";
					
					echo "</tr>";
					$i++;
				}
				 ?>
				<tbody>

				</tbody>
			</table>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Bobot GAP Dan Nilai Rata-rata Faktor</h3>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						
						<th>Alternatif</th>
						<th>Produk</th>
						<th>Batch</th>
						
						<th>C1 (Oven)</th>
						<th>C2 (Ruang)</th>
						<th>C3 (pH)</th>
						<th>C4 (Visko)</th>
						<th>C5 (Kadar)</th>
						<th>C6 (Mikro)</th>
						<th>Avg(SF)</th>
						<th>Avg(CF)</th>
						<th>Nilai (SF)</th>
						<th>Nilai (CF)</th>

					</tr>
				</thead>
				<?php 
				// $sql="select * from `04-view-average-profile-factors`";
				if(isset($id_produk)):
					$sql="select * from `04-view-average-profile-factors` where id_produk='".$id_produk."' order by id_alternatif";
				else:
					$sql="select * from `04-view-average-profile-factors`";
				endif;
				$hasil=mysql_query($sql) or die("Error:".mysql_error());
				$i=1;
				while($row=mysql_fetch_assoc($hasil)){
					echo "<tr>";
					
					echo "<td>".$i."</td>";
					echo "<td>".$row['alternatif']."</td>";
					echo "<td>".$row['nama']."</td>";
					echo "<td>".$row['batch']."</td>";
					echo "<td>".$row['wc1']."</td>";
					echo "<td>".$row['wc2']."</td>";
					echo "<td>".$row['wc3']."</td>";
					echo "<td>".$row['wc4']."</td>";
					echo "<td>".$row['wc5']."</td>";
					echo "<td>".$row['wc6']."</td>";
					echo "<td>".$row['avg_sf']."</td>";
					echo "<td>".$row['avg_cf']."</td>";
					echo "<td>".$row['sf']."</td>";
					echo "<td>".$row['cf']."</td>";
				
					echo "</tr>";
					$i++;
				}
				 ?>
				<tbody>

				</tbody>
			</table>
		</div>
		
		<?php include('tabel_pm.php') ?>
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
		</div>
	</div>



</div>
<?php
include('../footer.php'); 
?>
