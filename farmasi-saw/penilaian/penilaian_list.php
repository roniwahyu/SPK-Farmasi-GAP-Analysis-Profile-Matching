<?php 
// require('koneksi.php');
$sql="select a.id,a.nilai,b.alternatif,c.batch,d.nama,e.kriteria,e.satuan from penilaian as a left join alternatif as b on a.id_alternatif=
		b.id left join `batch` as c on b.id_batch=c.id left join produk as d on c.id_produk=d.id left join kriteria as e on a.id_kriteria=e.id order by a.id asc";
$result=mysql_query($sql)or die('Maaf, Query penilaian Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr><td><input type="checkbox" name="del[]" id="<?php echo $row['id'] ?>"></td>
					<td><?php echo $i;?></td>
					
					<td><?php echo $row['alternatif'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['batch'] ?></td>
					<td><?php echo $row['kriteria'] ?></td>
					<td><?php echo $row['nilai']." ".$row['satuan'] ?></td>
							<td><div class="btn-group">
								<a href="penilaian_proses.php?form=penilaian&a=edit&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="penilaian_proses.php?form=penilaian&a=delete&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
							</div></td>
							
				</tr>
			<?php
			$i++;	
		endwhile;
	}
}


?>

