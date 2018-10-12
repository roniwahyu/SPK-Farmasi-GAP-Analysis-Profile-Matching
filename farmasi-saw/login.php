<?php 
include('functions.php');
include('koneksi.php');
include('header.php');

?>
<div class="container">
	<div class="row">
	<?php
   // session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      // mysql_real_escape_string()
      // $myusername = mysql_real_escape_string($_POST['username']);
      $myusername =($_POST['username']);
      // $mypassword = mysql_real_escape_string($_POST['password']); 
      $mypassword =($_POST['password']); 
      
      $sql = "SELECT * FROM `user` WHERE `username` = '$myusername' and `password` = '$mypassword'";
      $result = mysql_query($sql) or die('Error: '.mysql_error());
      $row = mysql_fetch_array($result);
      
      $role=$row['role'];
      // $active = $row['active'];
      //jika ada hasil dari mysql maka akan dihitung jumlahnya
      $count = mysql_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         $_SESSION['role'] = $role;
         
         // print_r($role);
         // print_r($row);
         // header("location:".baseurl()."index.php");
         $error='';
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
	</div>
</div>
<?php include('footer.php'); ?>