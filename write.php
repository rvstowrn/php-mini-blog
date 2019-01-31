
<!DOCTYPE html>
<html>
<head>
	<title>writeurBlog</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
<style>
body {
    background-image: url("walle.jpg");
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    height: 100%; 
    background-position: center center fixed;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'Allura';font-size: 30px;
    color: white;
}
.jumbotron { background-color: rgba(1,1,1,0);}
</style>
</head>
<body>
 <nav class="navbar navbar-dark bg-dark navbar-expand-sm fixed-top">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#topNav"><span class="navbar-toggler-icon"></span></button>
        <div id="topNav" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="write.php" class="nav-link">Write</a></li>
                <li class="nav-item"><a href="blogmain.php" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="aboutme.php" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="form.php" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </nav>
    <section class="jumbotron">
        <div class="container">
            <div class="display-4" style="margin-top:10px ">Rishabh's Blog</div>
    </section>
    <div class="container">
        <h2>Write your mind sire.</h2>
        <br><br>
<form action="written.php" method="POST">
<h2>Title</h2><br>
<input style=" border-radius: 25px;" class="form-control-lg" type="Username" name="name"><br><br>
<h2>Description</h2><br>
<textarea style="margin-left:5px " rows="8" cols="75" name="pass"> 
</textarea><br>
<input type="submit" class="btn btn-primary" style="margin-left:5px " name="go" value="submit"><br><br>
</form>
</div>
</body>
</html>