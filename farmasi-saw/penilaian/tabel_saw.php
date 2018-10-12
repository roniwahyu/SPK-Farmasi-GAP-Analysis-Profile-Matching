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
				$sql="select * from `00-view-penilaian-kriteria`";
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
				$sql="select * from `01-view-rating-saw`";
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
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<h3>Nilai Kriteria Maksimal </h3>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
				
				
						
						<th>C1 (Oven)</th>
						<th>C2 (Ruang)</th>
						<th>C3 (pH)</th>
						<th>C4 (Visko)</th>
						<th>C5 (Kadar)</th>
						<th>C6 (Mikro)</th>
						
						
						
												
						
					</tr>
				</thead>
				<?php 
				$sql="select * from `02-view-maksimal-saw`";
				$hasil=mysql_query($sql) or die("Error:".mysql_error());
		
				while($row=mysql_fetch_assoc($hasil)){
					echo "<tr>";
				
					echo "<td>".$row['maxc1']."</td>";
					echo "<td>".$row['maxc2']."</td>";
					echo "<td>".$row['maxc3']."</td>";
					echo "<td>".$row['maxc4']."</td>";
					echo "<td>".$row['maxc5']."</td>";
					echo "<td>".$row['maxc6']."</td>";
					
					echo "</tr>";
				
				}
				 ?>
				<tbody>

				</tbody>
			</table>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<h3>Nilai Kriteria Maksimal </h3>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
				
				
						
						<th>Kriteria</th>
						
						<th>Bobot SAW</th>
						
						
						
						
												
						
					</tr>
				</thead>
				<?php 
				$sql="select * from `00-view-bobot-saw`";
				$hasil=mysql_query($sql) or die("Error:".mysql_error());
		
				while($row=mysql_fetch_assoc($hasil)){
					echo "<tr>";
				
					echo "<td>".$row['kode']." (".$row['kriteria'].")</td>";
					
					echo "<td>".$row['bobot_saw']."</td>";
				
					
					echo "</tr>";
				
				}
				 ?>
				<tbody>

				</tbody>
			</table>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Normalisasi</h3>
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
				$sql="select * from `03-view-normalisasi-saw`";
				$hasil=mysql_query($sql) or die("Error:".mysql_error());
				$i=1;
				while($row=mysql_fetch_assoc($hasil)){
					echo "<tr>";
					
					echo "<td>".$i."</td>";
					echo "<td>".$row['alternatif']."</td>";
					echo "<td>".$row['nama']."</td>";
					echo "<td>".$row['batch']."</td>";
					echo "<td>".$row['nc1']."</td>";
					echo "<td>".$row['nc2']."</td>";
					echo "<td>".$row['nc3']."</td>";
					echo "<td>".$row['nc4']."</td>";
					echo "<td>".$row['nc5']."</td>";
					echo "<td>".$row['nc6']."</td>";
				
					echo "</tr>";
					$i++;
				}
				 ?>
				<tbody>

				</tbody>
			</table>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Weighted</h3>
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
				$sql="select * from `04-view-weighted-saw`";
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
				
					echo "</tr>";
					$i++;
				}
				 ?>
				<tbody>

				</tbody>
			</table>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Nilai Preferensi</h3>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						
						<th>Alternatif</th>
						<th>Produk</th>
						<th>Batch</th>
						<th>Jumlah</th>

					</tr>
				</thead>
				<?php 
				$sql="select * from `05-view-nilai-akhir-saw`";
				$hasil=mysql_query($sql) or die("Error:".mysql_error());
				$i=1;
				while($row=mysql_fetch_assoc($hasil)){
					echo "<tr>";
				
					echo "<td>".$i."</td>";
					echo "<td>".$row['alternatif']."</td>";
					echo "<td>".$row['nama']."</td>";
					echo "<td>".$row['batch']."</td>";
					echo "<td>".$row['nilai_saw']."</td>";
					
					
				
					echo "</tr>";
					$i++;
				}
				 ?>
				<tbody>

				</tbody>
			</table>
		</div>