<?php 
include ('functions.php');
include ('koneksi.php');
// include ('session.php');
// include ('header.php');

 ?>
 <!DOCTYPE html>
 <html lang="">
 	<head>
 		<title>Login</title>
 		<meta charset="UTF-8">
 		<meta name=description content="">
 		<meta name=viewport content="width=device-width, initial-scale=1">
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<!-- Bootstrap CSS -->
 		
 	</head>
 	<body>
 		

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3 class="text-center"></h3>
        </div>
    </div>
	<div class="row">
    	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    		
    	</div>
        <div class="col-md-4">
            <div class="well login-box">
                <form method="POST" action="<?php echo baseurl('login.php')?>">
                    <legend>Login</legend>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input value='' id="username" name="username" placeholder="Username" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" value='' placeholder="Password" name="password" type="text" class="form-control" />
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-danger btn-cancel-action">Cancel</button>
                        <input type="submit" class="btn btn-success btn-login-submit" value="Login" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
include ('footer.php');
?>