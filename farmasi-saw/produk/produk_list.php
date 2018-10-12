<?php 
// require('koneksi.php');
$sql="select * from produk";
$result=mysql_query($sql)or die('Maaf, Query produk Salah:'.mysql_error());

function show_fuzzy(){
	global $result;

	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr><td><input type="checkbox" name="del[]" id="<?php echo $row['id'] ?>"></td>
					<td><?php echo $i;?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['jenis'] ?></td>
					<td><div class="btn-group">
								<a href="produk_proses.php?form=produk&a=edit&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="produk_proses.php?form=produk&a=delete&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
							</div></td>
							
				</tr>
			<?php
			$i++;	
		endwhile;
	}
}


?>

