<?php 
require('../koneksi.php');
include('../functions.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'batch':
					$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
					$tanggal=isset($_POST['tanggal']) ? clean(htmlspecialchars($_POST['tanggal'])) : '';
					$batch=isset($_POST['batch']) ? clean(htmlspecialchars($_POST['batch'])) : '';
					$id_produk=isset($_POST['id_produk']) ? clean(htmlspecialchars($_POST['id_produk'])) : '';
					$userid=isset($_POST['userid']) ? clean(htmlspecialchars($_POST['userid'])) : '';
					$datetime=dateonly();
					
					$sql="insert into `batch` (tanggal,batch,id_produk,datetime) values ('".$tanggal."','".$batch."','".$id_produk."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data batch Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','batch.php');
							
						}else{
							alert('danger','insert','batch.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'batch':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('batch_content.php');
					# code...
					break;
				case 'delete':
					
					delete('batch','id',$id);
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
		case 'batch':
			$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
			$tanggal=isset($_POST['tanggal']) ? clean(htmlspecialchars($_POST['tanggal'])) : '';
				$batch=isset($_POST['batch']) ? clean(htmlspecialchars($_POST['batch'])) : '';
				$id_produk=isset($_POST['id_produk']) ? clean(htmlspecialchars($_POST['id_produk'])) : '';
				$userid=isset($_POST['userid']) ? clean(htmlspecialchars($_POST['userid'])) : '';
				$datetime=dateonly();
				
			if(isset($id)):
				$sql="update batch set tanggal='".$tanggal."',batch='".$batch."',id_produk='".$id_produk."',userid='".$userid."',datetime='".$datetime."' where id=".$id;
					$update=mysql_query($sql)or die('Update Data batch Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','batch.php');
						}else{
							alert('danger','update','batch.php');
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
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete batch ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
