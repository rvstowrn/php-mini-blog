<!DOCTYPE html>
<html>
<head>
    <title>
        blog main
    </title>
 <!--   <script type="text/javascript">
        function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "like") {
    x.innerHTML = "liked";
  } else {
    x.innerHTML = "like";
  }
}
</script>-->
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
                <li class="nav-item"><a href="write.php" class="nav-link">Write</a></li>
                <li class="nav-item active"><a href="blogmain.php" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="aboutme.php" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="form.php" class="nav-link">Logout</a></li>
            </ul>
        </div>
 </nav>
    <section class="jumbotron">
        <div class="container">
             <div class="display-4" style="margin-top:10px ">Rishabh's Blog</div>
            <p>Welcome to my Blog</p>
        </div>
    </section>
</body>
</html>
<?php
    $mysqli = new mysqli("localhost", "root", "", "blog");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $sql = "select * from blog";  
    $res = $mysqli->query($sql);
    $i=0;
    while ($row = $res->fetch_assoc()) {
        if($i!=0)
        {
    echo '<div class="container" style="border-radius: 5%;border: solid 4px">
    <div class="media">
    <div class="media-body">
      <h3 class="media-heading">'.$row['Title'].'</h3>
      <p>'.$row['Description'].'</p>
    </div>
    <div class="media-right">
      <img src="ak2.jpg" class="media-object" style="width:180px">
    </div>
  </div></div><br>';}
  $i=1;
    }
?>