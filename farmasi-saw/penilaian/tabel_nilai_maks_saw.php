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
				if(isset($id_produk)):
					$sql="select * from `02-view-maksimal-saw` where id_produk='".$id_produk."'";
				else:
					$sql="select * from `02-view-maksimal-saw`";
				endif;
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