<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'penilaian':
					$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
					$id_alternatif=isset($_POST['id_alternatif']) ? clean(htmlspecialchars($_POST['id_alternatif'])) : '';
					$id_batch=isset($_POST['id_batch']) ? clean(htmlspecialchars($_POST['id_batch'])) : '';
					$id_kriteria=isset($_POST['id_kriteria']) ? clean(htmlspecialchars($_POST['id_kriteria'])) : '';
					$nilai=isset($_POST['nilai']) ? clean(htmlspecialchars($_POST['nilai'])) : '';
					$userid=isset($_POST['userid']) ? clean(htmlspecialchars($_POST['userid'])) : '';
					// $datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
					$datetime=now();
					
					$sql="insert into penilaian (id_alternatif,id_batch,id_kriteria,nilai,userid,datetime) values ('".$id_alternatif."','".$id_batch."','".$id_kriteria."','".$nilai."','".$userid."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data penilaian Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','penilaian.php');
							
						}else{
							alert('danger','insert','penilaian.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'penilaian':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('penilaian_content.php');
					# code...
					break;
				case 'delete':
					
					delete('penilaian','id',$id);
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
		case 'penilaian':
			$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
			$id_alternatif=isset($_POST['id_alternatif']) ? clean(htmlspecialchars($_POST['id_alternatif'])) : '';
				$id_batch=isset($_POST['id_batch']) ? clean(htmlspecialchars($_POST['id_batch'])) : '';
				$id_kriteria=isset($_POST['id_kriteria']) ? clean(htmlspecialchars($_POST['id_kriteria'])) : '';
				$nilai=isset($_POST['nilai']) ? clean(htmlspecialchars($_POST['nilai'])) : '';
				$userid=isset($_POST['userid']) ? clean(htmlspecialchars($_POST['userid'])) : '';
				// $datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
				$datetime=now();
				
			if(isset($id)):
				$sql="update penilaian set id_alternatif='".$id_alternatif."',id_batch='".$id_batch."',id_kriteria='".$id_kriteria."',nilai='".$nilai."',userid='".$userid."',datetime='".$datetime."' where id=".$id;
					$update=mysql_query($sql)or die('Update Data penilaian Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','penilaian.php');
						}else{
							alert('danger','update','penilaian.php');
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
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete penilaian ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}

?><?php
// include('penilaian_content.php');
include('../footer.php');
?>
