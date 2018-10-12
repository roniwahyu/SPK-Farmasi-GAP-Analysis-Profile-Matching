<?php 
// require('koneksi.php');
$sql="select a.id,a.tanggal,b.nama as produk,a.batch,a.datetime from batch as a left join produk as b on a.id_produk=b.id";
$result=mysql_query($sql)or die('Maaf, Query batch Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['tanggal'] ?></td>
					<td><?php echo $row['produk'] ?></td>
					<td><?php echo $row['batch'] ?></td>
				
					<td><?php echo $row['datetime'] ?></td>
					<td><div class="btn-group">
								<a href="batch_proses.php?form=batch&a=edit&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="batch_proses.php?form=batch&a=delete&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
							</div></td>
						
				</tr>
			<?php
			$i++;	
		endwhile;
	}
}


?>

