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
				// $sql="select * from `01-view-rating-saw`";
				if(isset($id_produk)):
					$sql="select * from `01-view-rating-saw` where id_produk='".$id_produk."' order by id_alternatif";
				else:
					$sql="select * from `01-view-rating-saw` order by id_alternatif";
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
