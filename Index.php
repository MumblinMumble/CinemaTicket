<?php
    session_start();
?>

<!DOCTYPE HTML>
<html  lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WELCOME TO SPCINEMA</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.min.css"/>
	<script src="./bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script type="text/javascript">
        $(document).ready(function(){
            $("#nowShowing").click(function(){
                $(".card1 img").attr("src","assets/spider-man.jpg");
                $(".card2 img").attr("src","assets/spider-man.jpg");
                $(".card3 img").attr("src","assets/spider-man.jpg");
                $(".card4 img").attr("src","assets/spider-man.jpg");
            });
            $("#topRated").click(function(){
                $(".card1 img").attr("src","");
                $(".card2 img").attr("src","");
                $(".card3 img").attr("src","");
                $(".card4 img").attr("src","");
            });
            $("#comingSoon").click(function(){
                $(".card1 img").attr("src","");
                $(".card2 img").attr("src","");
                $(".card3 img").attr("src","");
                $(".card4 img").attr("src","");
            });
        });
	</script>

</head>
<body id="home-body">
<div class="container-fluid custom-nav  bg-light">
	<nav class="navbar navbar-default navbar-expand-lg navbar-light">
		<span class="navbar-brand mb-0 h1">SPCinema</span>
		<div class="navbar-collapse">
			<ul class="navbar-nav ml-auto mr-4">
				<li class="nav-item">
					<a class="nav-link active" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Movies.php">Movies</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Login.php">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="AboutUs.php">About Us</a>
				</li>
			</ul>
			<form>
				<div  class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</div>
			</form>
		</div>
	</nav>
</div>

<div class="container-fluid">
	<div class="cara-container">
		<div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="assets/gravity-poster.jpg" alt="First slide">
					<div class="carousel-caption d-none d-md-block" style="color:black">
						<h5>Gravity(2013)</h5>
						<p>2013, US, Sci-Fi, Drama, Thriller</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="assets/gravity-poster.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>...</h5>
						<p>...</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="assets/gravity-poster.jpg" alt="Third slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>...</h5>
						<p>...</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
<br>
<div class="contain-fluid my-5 justify-content-center" align="center">
	<h1 class="display-4">Movies</h1>
	<br><br>
	<div class="container">
		<button id="nowShowing" class="btn btn-danger mx-2">Now Showing</button>
		<button id="topRated" class="btn btn-danger mx-2">Top Rated</button>
		<button id="comingSoon" class="btn btn-danger mx-2">Coming Soon</button>
	</div>
	
	<div class="card-deck custom-deck">
		<div class="card card1">
			<img class="card-img-top" src="assets/spider-man.jpg" alt="404" style="width:100%">
			<div class="card-body">COOL MOVIE</div>
		</div>
		<div class="card card2">
			<img class="card-img-top" src="assets/spider-man.jpg" alt="404" style="width:100%">
			<div class="card-body">COOL MOVIE</div>
		</div>
		<div class="card card3">
			<img class="card-img-top" src="assets/spider-man.jpg" alt="404" style="width:100%">
			<div class="card-body">COOL MOVIE</div>
		</div>
		<div class="card card4">
			<img class="card-img-top" src="assets/spider-man.jpg" alt="404" style="width:100%">
			<div class="card-body">COOL MOVIE</div>
		</div>
	</div>
</div>
<div class="footer sticky-bottom">
	<p>THIS IS A FOOTER</p>
</div>
</body>
</html>