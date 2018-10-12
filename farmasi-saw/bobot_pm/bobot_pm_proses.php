<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'bobot_pm':
					$id_bobot= isset($_POST['id_bobot']) ? clean(htmlspecialchars($_POST['id_bobot'])) : '';
					$selisih=isset($_POST['selisih']) ? clean(htmlspecialchars($_POST['selisih'])) : '';
					$bobot=isset($_POST['bobot']) ? clean(htmlspecialchars($_POST['bobot'])) : '';
					$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
					// $datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
					$datetime=now();
					
					$sql="insert into bobot_pm (selisih,bobot,keterangan,datetime) values ('".$selisih."','".$bobot."','".$keterangan."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data bobot_pm Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','bobot_pm.php');
							
						}else{
							alert('danger','insert','bobot_pm.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'bobot_pm':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id_bobot= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('bobot_pm_content.php');
					# code...
					break;
				case 'delete':
					
					delete('bobot_pm','id_bobot',$id_bobot);
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
		case 'bobot_pm':
			$id_bobot= isset($_POST['id_bobot']) ? clean(htmlspecialchars($_POST['id_bobot'])) : '';
			$selisih=isset($_POST['selisih']) ? clean(htmlspecialchars($_POST['selisih'])) : '';
				$bobot=isset($_POST['bobot']) ? clean(htmlspecialchars($_POST['bobot'])) : '';
				$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
				// $datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
				$datetime=now();
				
			if(isset($id_bobot)):
				$sql="update bobot_pm set selisih='".$selisih."',bobot='".$bobot."',keterangan='".$keterangan."',datetime='".$datetime."' where id_bobot=".$id_bobot;
					$update=mysql_query($sql)or die('Update Data bobot_pm Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','bobot_pm.php');
						}else{
							alert('danger','update','bobot_pm.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id_bobot=isset($id) ? $id : '';
	if(isset($id_bobot)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id_bobot;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete bobot_pm ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
