<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Nilai Profile Matching</h3>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						
						<th>Alternatif</th>
						<th>Produk</th>
						<th>Batch</th>
						<th>Nilai PM</th>

					</tr>
				</thead>
				<?php 
				// $sql="select * from `05-view-nilai-profile`";
				if(isset($id_produk)):
					$sql="select * from `05-view-nilai-profile` where id_produk='".$id_produk."' order by nilai_profile desc";
				else:
					$sql="select * from `05-view-nilai-profile` order by nilai_profile desc";
				endif;
				$hasil=mysql_query($sql) or die("Error:".mysql_error());
				$i=1;
				while($row=mysql_fetch_assoc($hasil)){
					echo "<tr>";
				
					echo "<td>".$i."</td>";
					echo "<td>".$row['alternatif']."</td>";
					echo "<td>".$row['nama']."</td>";
					echo "<td>".$row['batch']."</td>";
					echo "<td>".$row['nilai_profile']."</td>";
					
					
				
					echo "</tr>";
					$i++;
				}
				 ?>
				<tbody>

				</tbody>
			</table>
		</div>
		