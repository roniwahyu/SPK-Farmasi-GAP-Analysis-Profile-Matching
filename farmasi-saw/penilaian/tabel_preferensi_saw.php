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
				// $sql="select * from `04-view-weighted-saw`";
				if(isset($id_produk)):
					$sql="select * from `04-view-weighted-saw` where id_produk='".$id_produk."' order by id_alternatif";
				else:
					$sql="select * from `04-view-weighted-saw` order by id_alternatif";
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
				
					echo "</tr>";
					$i++;
				}
				 ?>
				<tbody>

				</tbody>
			</table>
		</div>
