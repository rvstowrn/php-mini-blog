<!DOCTYPE html>
<html>
<head>
	<title>Register Here</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style type="text/css">
	body {
    background-image: url("bgimage.jpg");
    background-repeat: no-repeat;
}
</style>
</head>
<body>
<div class="jumbotron" align="center" style="margin-left:475px;margin-right:475px;margin-top:100px;background-color:rgba(128,128,128,.4);">
<h2  style='font-family:"Comic Sans MS", cursive, sans-serif;'>Welcome to the blog</h2><br><br><br>
<form action="registration.php" method="POST">
<label>Name</label><br>
<input style=" border-radius: 25px;" class="form-control-sm" type="name" name="name"><br>	
<label>Username</label><br>
<input style=" border-radius: 25px;" class="form-control-sm" type="Username" name="username"><br>	
<label>Password</label><br>
<input style=" border-radius: 25px;" class="form-control-sm" type="password" name="password"><br><br>
<input type="submit" class="btn btn-primary" name="go" value="register"><br><br>
</form>	
<a href="form.php">Go to Login Page</a><br><br>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>