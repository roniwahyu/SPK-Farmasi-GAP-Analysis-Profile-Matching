<?php 
// require('koneksi.php');
$sql="select * from bobot_pm";
$result=mysql_query($sql)or die('Maaf, Query bobot_pm Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr><td><input type="checkbox" name="del[]" id="<?php echo $row['id'] ?>"></td>
					<td><?php echo $i;?></td>
					<td><?php echo $row['selisih'] ?></td>
					<td><?php echo $row['bobot'] ?></td>
					<td><?php echo $row['keterangan'] ?></td>
					
							<td><div class="btn-group">
								<a href="bobot_pm_proses.php?form=bobot_pm&a=edit&id=<?php echo $row['id_bobot'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="bobot_pm_proses.php?form=bobot_pm&a=delete&id=<?php echo $row['id_bobot'] ?>" class="btn btn-xs btn-danger">Delete</a>
							</div></td>
							
				</tr>
			<?php
			$i++;	
		endwhile;
	}
}


?>

