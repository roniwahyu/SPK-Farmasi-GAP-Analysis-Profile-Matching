<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'kriteria':
					$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
					$kode=isset($_POST['kode']) ? clean(htmlspecialchars($_POST['kode'])) : '';
					$kriteria=isset($_POST['kriteria']) ? clean(htmlspecialchars($_POST['kriteria'])) : '';
					$bobot_saw=isset($_POST['bobot_saw']) ? clean(htmlspecialchars($_POST['bobot_saw'])) : '';
					$satuan=isset($_POST['satuan']) ? clean(htmlspecialchars($_POST['satuan'])) : '';
					$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
					$standar_gap=isset($_POST['standar_gap']) ? clean(htmlspecialchars($_POST['standar_gap'])) : '';
					$userid=isset($_POST['userid']) ? clean(htmlspecialchars($_POST['userid'])) : '';
					// $datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
					$datetime=now();
					
					$sql="insert into kriteria (kode,kriteria,bobot_saw,satuan,keterangan,standar_gap,userid,datetime) values ('".$kode."','".$kriteria."','".$bobot_saw."','".$satuan."','".$keterangan."','".$standar_gap."','".$userid."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data kriteria Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','kriteria.php');
							
						}else{
							alert('danger','insert','kriteria.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'kriteria':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('kriteria_content.php');
					# code...
					break;
				case 'delete':
					
					delete('kriteria','id',$id);
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
		case 'kriteria':
			$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
			$kode=isset($_POST['kode']) ? clean(htmlspecialchars($_POST['kode'])) : '';
				$kriteria=isset($_POST['kriteria']) ? clean(htmlspecialchars($_POST['kriteria'])) : '';
				$bobot_saw=isset($_POST['bobot_saw']) ? clean(htmlspecialchars($_POST['bobot_saw'])) : '';
				$standar_gap=isset($_POST['standar_gap']) ? clean(htmlspecialchars($_POST['standar_gap'])) : '';
				$satuan=isset($_POST['satuan']) ? clean(htmlspecialchars($_POST['satuan'])) : '';
				$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
				$userid=isset($_POST['userid']) ? clean(htmlspecialchars($_POST['userid'])) : '';
				// $datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
				$datetime=now();
				
			if(isset($id)):
				$sql="update kriteria set kode='".$kode."',kriteria='".$kriteria."',satuan='".$satuan."',keterangan='".$keterangan."',bobot_saw='".$bobot_saw."',standar_gap='".$standar_gap."',userid='".$userid."',datetime='".$datetime."' where id=".$id;
					$update=mysql_query($sql)or die('Update Data kriteria Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','kriteria.php');
						}else{
							alert('danger','update','kriteria.php');
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
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete kriteria ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
