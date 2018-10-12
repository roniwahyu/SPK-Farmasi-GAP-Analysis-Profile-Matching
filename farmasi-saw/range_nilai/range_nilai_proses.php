<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'range_nilai':
					$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
					$id_kriteria=isset($_POST['id_kriteria']) ? clean(htmlspecialchars($_POST['id_kriteria'])) : '';
					$range=isset($_POST['range']) ? clean(htmlspecialchars($_POST['range'])) : '';
					$min=isset($_POST['min']) ? clean(htmlspecialchars($_POST['min'])) : '';
					$max=isset($_POST['max']) ? clean(htmlspecialchars($_POST['max'])) : '';
					$metode=isset($_POST['metode']) ? clean(htmlspecialchars($_POST['metode'])) : '';
					$userid=isset($_POST['userid']) ? clean(htmlspecialchars($_POST['userid'])) : '';
					$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
					// $datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
					$datetime=now();
					
					$sql="insert into range_nilai (id_kriteria,`range`,`min`,`max`,metode,userid,keterangan,datetime) values ('".$id_kriteria."','".$range."','".$min."','".$max."','".$metode."','".$userid."','".$keterangan."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data range_nilai Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','range_nilai.php');
							
						}else{
							alert('danger','insert','range_nilai.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'range_nilai':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('range_nilai_content.php');
					# code...
					break;
				case 'delete':
					
					delete('range_nilai','id',$id);
					break;
				
				}
			break;
		default:
		# code...
		break;
	}
}
if(isset($_POST['save'])){
	$form= isset($_POST['form']) ? $_POST['form'] : '';
	switch ($form) {
		case 'range_nilai':
			$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
			$id_kriteria=isset($_POST['id_kriteria']) ? clean(htmlspecialchars($_POST['id_kriteria'])) : '';
				$range=isset($_POST['range']) ? clean(htmlspecialchars($_POST['range'])) : '';
				$min=isset($_POST['min']) ? clean(htmlspecialchars($_POST['min'])) : '';
				$max=isset($_POST['max']) ? clean(htmlspecialchars($_POST['max'])) : '';
				$metode=isset($_POST['metode']) ? clean(htmlspecialchars($_POST['metode'])) : '';
				$userid=isset($_POST['userid']) ? clean(htmlspecialchars($_POST['userid'])) : '';
				$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
				// $datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
				$datetime=now();
				
			if(isset($id)):
				$sql="update range_nilai set id_kriteria='".$id_kriteria."',`range`='".$range."',`min`='".$min."',`max`='".$max."',metode='".$metode."',userid='".$userid."',keterangan='".$keterangan."',datetime='".$datetime."' where id=".$id;
					$update=mysql_query($sql)or die('Update Data range_nilai Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','range_nilai.php');
						}else{
							alert('danger','update','range_nilai.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id=isset($id) ? $id : '';
	if(isset($id)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete range_nilai ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
