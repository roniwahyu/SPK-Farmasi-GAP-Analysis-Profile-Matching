<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'alternatif':
					$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
					$alternatif=isset($_POST['alternatif']) ? clean(htmlspecialchars($_POST['alternatif'])) : '';
					$id_batch=isset($_POST['id_batch']) ? clean(htmlspecialchars($_POST['id_batch'])) : '';
					$userid=isset($_POST['userid']) ? clean(htmlspecialchars($_POST['userid'])) : '';
					// $datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
					$datetime=now();
					
					$sql="insert into alternatif (alternatif,id_batch,userid,datetime) values ('".$alternatif."','".$id_batch."','".$userid."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data alternatif Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','alternatif.php');
							
						}else{
							alert('danger','insert','alternatif.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'alternatif':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('alternatif_content.php');
					# code...
					break;
				case 'delete':
					
					delete('alternatif','id',$id);
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
		case 'alternatif':
			$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
			$alternatif=isset($_POST['alternatif']) ? clean(htmlspecialchars($_POST['alternatif'])) : '';
				$id_batch=isset($_POST['id_batch']) ? clean(htmlspecialchars($_POST['id_batch'])) : '';
				$userid=isset($_POST['userid']) ? clean(htmlspecialchars($_POST['userid'])) : '';
				// $datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
				$datetime=now();
				
			if(isset($id)):
				$sql="update alternatif set alternatif='".$alternatif."',id_batch='".$id_batch."',userid='".$userid."',datetime='".$datetime."' where id=".$id;
					$update=mysql_query($sql)or die('Update Data alternatif Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','alternatif.php');
						}else{
							alert('danger','update','alternatif.php');
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
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete alternatif ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
