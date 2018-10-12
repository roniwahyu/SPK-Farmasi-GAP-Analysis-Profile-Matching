<?php 
//directory dalam server
define('root','http://localhost/');
define('dir','farmasi-saw');

function alert($type=null,$action=null,$url=null){
	switch ($type) {
		case 'success':
			$alert_msg='berhasil...';
			$alert='alert-success';
			$alert_status='Sukses:';
			# code...
			break;
		case 'warning':
			$alert_msg='harus diperhatikan...';
			$alert='alert-warning';
			$alert_status='Perhatian!:';
			# code...
			break;
		case 'danger':
			$alert_msg='gagal dilakukan...';
			$alert='alert-danger';
			$alert_status='Kesalahan:';
			# code...
			break;
		
		default:
			# code...
			break;
	}
	switch ($action) {
		case 'insert':
		$alert_action='Input Data Baru';
		
			# code...
			break;
		case 'update':
			$alert_action='Update Data';
			# code...
			break;
		case 'delete':
			$alert_action='Hapus Data';
			# code...
			break;
		
		default:
			# code...
			break;
	}
	?>
	<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="alert <?php echo $alert ?>">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong><?php echo $alert_status; ?></strong> <?php echo $alert_action." ".$alert_msg; ?>
			</div>
			<a href="<?php echo $url ?>"  class="btn btn-info">Klik Disini Untuk Kembali </a>
		</div>
	</div>
	</div>
	<?php
}
	
function clean($value){
   return mysql_real_escape_string($value);
}
function baseurl($url=null){
	$baseurl="http://".$_SERVER['HTTP_HOST']."/".dir."/".$url;
	return $baseurl;
}
function url($url=null){
	$baseurl="http://".$_SERVER['HTTP_HOST']."/".dir."/".$url;
	return $baseurl;
}
function assetsurl($url=null){
	$assets="http://".$_SERVER['HTTP_HOST']."/".dir."/assets/".$url;
	return $assets;
}
function homeurl($url=null){
	$base="http://".$_SERVER['HTTP_HOST']."/".$url;
	return $base;
}
function now(){
	return date('Y-m-d H:m:s');
}
function dateonly(){
	return date('Y-m-d');
}

function get_data($table){
	$array=mysql_query('select * from `'.$table.'`') or die(mysql_error());
	// $result=mysql_fetch_array($array);
	$i=0;

	
	while ($rows=mysql_fetch_array($array) ) {
		$arr[$i]=$rows;
		$i++;
	}
	// print_r($arr);
	return $arr;
}
function dropdown($data,$array=null,$val=null,$text=null){
	$drop="<select ".$array.">";
	// print_r($data);
	foreach ($data as $key => $value) {
		# code...
		$drop.="<option value='".$value[$val]."'>".$value[$text]."</option>";
	}
	$drop.="</select>";
	return $drop;

}
function dropdowndb(){
	
}

function islogin(){
	//nek ganok session ini dikembalikan 
   if(!isset($_SESSION['role'])){
      header("location:".baseurl('form_login.php'));
      $_SESSION['error']="Anda tidak memiliki akses";
      break;
   }else{
      $_SESSION['error']="Selamat Datang!";

   }
   
}
//akses khusus admin
function isadmin(){
	//echo $_SESSION['role'];
	islogin();
   	if($_SESSION['role']!='administrator'){
      	$_SESSION['error']="Anda Tidak Memiliki Akses Admin";
      	header("location:".baseurl('index.php'));

   	}else{
      	$_SESSION['error']="Selamat Datang Admin!";

   	}
}
//akses admin dan operator
function akses_adm_opr(){
	islogin();
	if(($_SESSION['role']!='administrator')&&($_SESSION['role']!='operator')){
	      	$_SESSION['error']="Anda Tidak Memiliki Akses Admin dan Operator";
	      	header("location:".baseurl('index.php'));

	   	}else{
	      	$_SESSION['error']="Selamat Datang Admin!";

	   	}
}

//akses admin dan manager
function akses_adm_mgr(){
	islogin();
	if(($_SESSION['role']!='administrator')&&($_SESSION['role']!='manager')){
	      	$_SESSION['error']="Anda Tidak Memiliki Akses Manager";
	      	header("location:".baseurl('index.php'));
   	}else{
	      	$_SESSION['error']="Selamat Datang Admin!";
   	}
}
// loginrole('operator','','')
function loginrole($role=null,$false=null,$true=null){
	islogin();
   	if($_SESSION['role']!=$role){
      	header("location:".baseurl($false));
   	}else{
      	header("location:".baseurl($true));


   	}
}
 ?>
