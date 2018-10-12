<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'produk':
					$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
					$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
					$id_kategori=isset($_POST['id_kategori']) ? clean(htmlspecialchars($_POST['id_kategori'])) : '';
					$userid=isset($_POST['userid']) ? clean(htmlspecialchars($_POST['userid'])) : '';
					// $datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
					$datetime=now();
					
					$sql="insert into produk (nama,id_kategori,userid,datetime) values ('".$nama."','".$id_kategori."','".$userid."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data produk Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','produk.php');
							
						}else{
							alert('danger','insert','produk.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'produk':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('produk_content.php');
					# code...
					break;
				case 'delete':
					
					delete('produk','id',$id);
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
		case 'produk':
			$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
			$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
				$id_kategori=isset($_POST['id_kategori']) ? clean(htmlspecialchars($_POST['id_kategori'])) : '';
				$userid=isset($_POST['userid']) ? clean(htmlspecialchars($_POST['userid'])) : '';
				// $datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
				$datetime=now();
			if(isset($id)):
				$sql="update produk set nama='".$nama."',id_kategori='".$id_kategori."',userid='".$userid."',datetime='".$datetime."' where id=".$id;
					$update=mysql_query($sql)or die('Update Data produk Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','produk.php');
						}else{
							alert('danger','update','produk.php');
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
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete produk ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
