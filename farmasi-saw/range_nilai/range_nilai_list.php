<?php 
// require('koneksi.php');
// $sql="select * from range_nilai";
$sql="select a.id,b.kode,b.kriteria,a.range,a.min,a.max,a.metode,a.keterangan from range_nilai as a left join kriteria as b on a.id_kriteria=b.id";
$result=mysql_query($sql)or die('Maaf, Query range_nilai Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr><td><input type="checkbox" name="del[]" id="<?php echo $row['id'] ?>"></td>
					<td><?php echo $i;?></td>
					<td><?php echo $row['kriteria'] ?></td>
					<td><?php echo $row['range'] ?></td>
					<td><?php echo $row['min'] ?></td>
					<td><?php echo $row['max'] ?></td>
					<td><?php echo $row['metode'] ?></td>
			
					<td><?php echo $row['keterangan'] ?></td>
							<td><div class="btn-group">
								<a href="range_nilai_proses.php?form=range_nilai&a=edit&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="range_nilai_proses.php?form=range_nilai&a=delete&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
							</div></td>
							
				</tr>
			<?php
			$i++;	
		endwhile;
	}
}


?>

