<?php
   // include('functions.php');
   //nglebokno koneksi php ben kenal karo database
   //include('koneksi.php');
   
   //sesi dimulai
   session_start();
   
   //melakukan pengecekan di browser untuk sesi "login_user" 
   $user_check = $_SESSION['login_user'];
   $user_role = $_SESSION['role'];

   //melakukan pengecekan di database mysql username dan password yang ada dalam database 
   $ses_sql = mysql_query("select username,`role` from `user` where username = '$user_check' ") or die ("Error: ".mysql_error());
   
   //hasil dari database
   $row = mysql_fetch_array($ses_sql);
   // print_r($row);
   //variabel username untuk proses di php supaya dikenali
   $login_session = $row['username'];
   // print_r($login_session);

   //nek ganok session ini dikembalikan 
   if(!isset($_SESSION['login_user'])){
      header("location:".baseurl('form_login.php'));
   }
?>