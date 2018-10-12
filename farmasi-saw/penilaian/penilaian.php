<?php
include('../functions.php');
require('../koneksi.php'); 
include('../header.php'); 
$mode= isset($_GET['mode']) ? clean(htmlspecialchars($_GET['mode'])) : '';
if(isset($mode)){
	
	// isadmin();
	$role=$_SESSION['role'];/*
	if(($role!='administrator')&&($role=!'operator')):

      	header("location:".baseurl('index.php'));
	endif;*/
	//loginrole('operator',baseurl(),baseurl('penilaian/penilaian.php'));
	
	//fungsi login dan akses bersama 
	akses_adm_opr();
	
   	if($mode=="wizard"){

		include('penilaian_content_wizard.php'); 
	}else{

		include('penilaian_content.php'); 
	}

	
}
include('../footer.php'); 
?>