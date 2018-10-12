<?php 
// require('koneksi.php');
$sql="select * from kriteria";
$result=mysql_query($sql)or die('Maaf, Query kriteria Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr><td><input type="checkbox" name="del[]" id="<?php echo $row['id'] ?>"></td>
					<td><?php echo $i;?></td>
				
					<td><?php echo $row['kode'] ?></td>
					<td><?php echo $row['kriteria'] ?></td>
					<td><?php echo $row['bobot_saw'] ?></td>
					<td><?php echo $row['standar_gap'] ?></td>
					<td><?php echo $row['satuan'] ?></td>
					<td><?php echo $row['keterangan'] ?></td>
							<td><div class="btn-group">
								<a href="kriteria_proses.php?form=kriteria&a=edit&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="kriteria_proses.php?form=kriteria&a=delete&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
							</div></td>
							
				</tr>
			<?php
			$i++;	
		endwhile;
	}
}


?>

