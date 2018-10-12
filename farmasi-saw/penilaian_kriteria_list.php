<?php 
// require('koneksi.php');
$sql="select * from `00-view-penilaian-kriteria`";
$result=mysql_query($sql)or die('Maaf, Query penilaian Salah:'.mysql_error());



	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr><td><input type="checkbox" name="del[]" id="<?php echo $row['id_alternatif'] ?>"></td>
					<td><?php echo $i;?></td>
					
					<td><?php echo $row['alternatif'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['batch'] ?></td>
					<td><?php echo $row['C1'] ?></td>
					<td><?php echo $row['C2'] ?></td>
					<td><?php echo $row['C3'] ?></td>
					<td><?php echo $row['C4'] ?></td>
					<td><?php echo $row['C5'] ?></td>
					<td><?php echo $row['C6'] ?></td>
					
							<td><label>Proses</label> <div class="btn-group">

								<a href="<?php echo baseurl('penilaian') ?>/proses_saw.php" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-cog"></i> SAW</a>
								<a href="<?php echo baseurl('penilaian') ?>/proses_gap.php" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-cog"></i> GAP</a>
							</div></td>
							
				</tr>
			<?php
			$i++;	
		endwhile;
	}



?>

