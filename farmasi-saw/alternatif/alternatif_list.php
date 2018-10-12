<?php 
// require('koneksi.php');
$sql="select a.id,a.alternatif,b.tanggal,c.nama,b.batch from `alternatif` a left join `batch` b on a.id_batch=b.id left join produk as c on c.id=b.id_produk";
$result=mysql_query($sql)or die('Maaf, Query alternatif Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr><td><input type="checkbox" name="del[]" id="<?php echo $row['id'] ?>"></td>
					<td><?php echo $i;?></td>
					<td><?php echo $row['alternatif'] ?></td>
					<td><?php echo $row['tanggal'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['batch'] ?></td>
				<td><div class="btn-group">
								<a href="alternatif_proses.php?form=alternatif&a=edit&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="alternatif_proses.php?form=alternatif&a=delete&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
							</div></td>
							
				</tr>
			<?php
			$i++;	
		endwhile;
	}
}


?>

