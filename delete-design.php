<?php
   
        error_reporting(0);
		include("delete-code.php"); // Includes delete code Script page.
	?>


	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>BelaTitli-Kalkatta</title>
	<style>
		body{background: #ececec;color: #333;}
		.main{text-align: center;margin-top: 20px;}
		.main .login-box{margin-top: 30px;}
		.main .tb{width: 100%; height: 40px; margin-bottom: 5px; padding-left: 5px;}
		.main .file_input{margin-top: 10px;	margin-bottom: 10px;}
		.main .btn{width: 100%;	background: #27a465; color: #f7f7f7;  margin-top:2px;}
		.main .msg{color: #d14269;}
	</style>
	</head>

	<body>
	<!-------------------Main Content------------------------------>
	<div class="container main" >
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<h2>Delete Image...!</h2>
			<form method="POST" action="" enctype="multipart/form-data">
				<div class="col-sm-12 login-box">
					<input type="text" placeholder="Enter image id" name="img-id" class="tb" />
					<input type="submit" value="Delete" name="btn_delete" class="btn" />
					<a class="btn" href="index.html">Go to Home Page </a>
				</div>
				<div class="col-lg-12">
					<div class="msg">

                    <strong>
		<?php if(isset($error)){echo $error;}?>
	</strong>
						
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
	</body>
	</html>