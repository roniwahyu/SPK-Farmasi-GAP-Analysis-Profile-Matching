		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Nilai Preferensi</h3>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						
						<th>Alternatif</th>
						<th>Produk</th>
						<th>Batch</th>
						<th>Nilai</th>

					</tr>
				</thead>
				<?php 
				// $sql="select * from `05-view-nilai-akhir-saw`";
				if(isset($id_produk)):
					$sql="select * from `05-view-nilai-akhir-saw` where id_produk='".$id_produk."'";
				else:
					$sql="select * from `05-view-nilai-akhir-saw`";
				endif;
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