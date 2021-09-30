<?php 
require 'recommandations.php';
require 'populaires.php';
 $i = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projet geeks Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/Bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>

	<div class="container-fluide bg-light">

		<!-- hear we have the nav bar section -->

		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between fixed-top">
					<a class="navbar-brand" href="#">
						<img src="imageminiature/logo.png" class="img img-fluid" width="25">
						Geeks
					</a>
					<div class="collapse navbar-collapse" id="navbarText">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active"><a class="nav-link" href="#">Browse</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Landing</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Pages</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Accounts</a></li>
						</ul>
						<form class="form-inline d-flex inline-flex">
							<button class="btn btn-lite my-2 my-sm-0" type="submit">Search</button>
							<input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
						</form>
					</div>
					<div class="position-relative mx-2 my-2 rounded-circle costum-btn">
						<img src="imageminiature/cloche.png" class="position-absolute align-items-center img img-fluid mx-1 my-1 " width="18">
						<span class="badge position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
							<span class="visually-hidden">New alerts</span></span>
						</div>
						<div class="position-relative mx-2 my-2 rounded-circle costum-btn">
							<img src="imageminiature/profil-1.jpg" class="position-absolute align-items-center img img-fluid rounded-circle" width="30">
							<span class="badge position-absolute top-100 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
								<span class="visually-hidden">New alerts</span></span>
							</div>
						</nav>
					</div>
				</div> <!-- End nav bar -->

				<!--  Hear we have the jumbotron with background image and welcome text -->

				<div class="row jumbotron jumbotron-fluid bg-pink text-center ">
					<div class="col-lg-6 align-items-center text-white mt-10">
						<h1 class="">Welcome to geeks UI<br> Learning Application</h1>
						<p class="lead">Hand-picked instructor and experty crafted <br> courses, designed for the modern students <br> and entrepreneur.</p>
						<span><button type="button" class="btn btn-success text-white">Start courses</button></span>
						<span><button type="button" class="btn btn-light text-black">Are Your Instructor ?</button></span>
					</div>
					<div class="col-lg-5 mt-10">
						<img src="imageminiature/hero-img.png" class="img img-fluid">
					</div>
				</div> <!-- End jumbotron -->

				<!-- Hear we the bar with statics information with the number of online courses -->

				<div class="row text-left bg-white ">
					<div class=" col-lg-3 mx-5 mt-2 d-flex inline-flex  align-items-center">
						<img src="imageminiature/video-camera.png" class="img rounded-circle  " width="40">
						<div class="mx-3">
							<h4>30,000 olnline courses</h4>
							<p>Enjoy the variety of best topics</p>
						</div>
					</div>
					<div class="col-lg-3 mx-5 mt-2 d-flex inline-flex align-items-center">
						<img src="imageminiature/video-camera.png" class="img rounded-circle  " width="40">
						<div class="mx-3">
							<h4>Expert instruction</h4>
							<p>The right instructor for you</p>
						</div>
					</div>
					<div class="col-lg-3 mx-5 mt-2 d-flex inline-flex align-items-center">
						<img src="imageminiature/video-camera.png" class="img rounded-circle  " width="40">
						<div class="mx-3">
							<h4>Lifetime access</h4>
							<p>Learn on your scheaduls</p>
						</div>
					</div>
				</div>

				<!-- hear we have the recommanded for you card section -->
				<div class="container">

					<div class="row">
						<div class="col-lg-12 mx-5 my-3"><h2>Recommanded for you</h2>
						</div>
						<div class="row card-deck d-flex justify-content-center" >

							<?php foreach($recommandeds as $recommanded) { ?>
								<div class="col-lg-2  col-md-6 card mx-3 p-0">
									<img class="card-img-top img img-fluid" src="imageminiature/<?php echo $recommanded['image'] ?>" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title"><?php echo $recommanded['titreDuCours'] ?></h5>
										<div class="card-text">
											<img src="imageminiature/clock.png" class="img img-fluid" width="10">
											<span><small><?php echo $recommanded['time'] ?></small></span>
											<img src="imageminiature/high-signal.png" class="img img-fluid" width="10">
											<span><small><?php echo $recommanded['note'] ?></small></span>
											<div >
												
									<?php  while($i <= $recommanded['note']){ ?>
										 <?php echo "<i class='fas fa-star'></i>" ?>
									<?php  $i++; } $i = 1; ?>


												<small><?php echo $recommanded['note']." rated" ?></small>
											</div>
										</div>
										<div class="card-footer bg-white mt-2 align-items-center">
											<img src="imageminiature/profil-1.jpg" class="img img-fluid rounded-circle" width="25">
											<span class="card-text"><small class=""><?php echo $recommanded['professeur'] ?></small></span>
											<i class="far fa-check-square float-end "></i>
										</div>
									</div>
								</div>
							<?php } ?>

						</div> <!-- End Card-deck -->

					</div> <!-- End recommanded for you card section -->

					<!-- hear we have the most popular card section -->

					<div class="container">

						<div class="row">
							<div class="col-lg-12 mx-5 my-3"><h2>Most popular</h2>
							</div>
							<div class="row card-deck d-flex justify-content-center" >

								<?php foreach($populaires as $populaire  ) { ?>
								<div class="col-lg-2  col-md-6 card mx-3 p-0">
									<img class="card-img-top img img-fluid" src="imageminiature/img3.jpeg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title"><?php echo $populaire['titreDuCours'] ?></h5>
										<div class="card-text">
											<img src="imageminiature/clock.png" class="img img-fluid" width="10">
											<span><small><?php echo $populaire['note'] ?></small></span>
											<img src="imageminiature/high-signal.png" class="img img-fluid" width="10">
											<span><small>intermadiate</small></span>
											<div >
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<small>4.3 rated</small>
											</div>
										</div>
										<div class="card-footer bg-white mt-2 align-items-center">
											<img src="imageminiature/profil-1.jpg" class="img img-fluid rounded-circle" width="25">
											<span class="card-text"><small class="">Mrs Spark</small></span>
											<i class="far fa-check-square float-end align-items-center "></i>
										</div>
									</div>
								</div>
								<?php } ?>
							</div> <!-- End Card-deck -->

						</div> <!-- End most popular card section -->

						<!-- hear we have the trending card section -->

						<div class="container">

							<div class="row">
								<div class="col-lg-12 mx-5 my-3"><h2>Recommanded for you</h2>
								</div>
								<div class="row card-deck d-flex justify-content-center" >

									<div class="col-lg-2  col-md-6 card mx-3 p-0">
										<img class="card-img-top img img-fluid" src="imageminiature/img8.jpeg" alt="Card image cap">
										<div class="card-body">
											<h5 class="card-title">Python courses build web application</h5>
											<div class="card-text">
												<img src="imageminiature/clock.png" class="img img-fluid" width="10">
												<span><small>2h20</small></span>
												<img src="imageminiature/high-signal.png" class="img img-fluid" width="10">
												<span><small>intermadiate</small></span>
												<div >
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="far fa-star"></i>
													<i class="far fa-star"></i>
													<small>4.3 rated</small>
												</div>
											</div>
											<div class="card-footer bg-white mt-2 align-items-center">
												<img src="imageminiature/profil-1.jpg" class="img img-fluid rounded-circle" width="25">
												<span class="card-text"><small class="">Mrs Spark</small></span>
												<i class="far fa-check-square float-end align-items-center "></i>
											</div>
										</div>
									</div>

									<div class="col-lg-2  col-md-6 card mx-3 p-0">
										<img class="card-img-top img img-fluid" src="imageminiature/img10.jpeg" alt="Card image cap">
										<div class="card-body">
											<h5 class="card-title">Python courses build web application</h5>
											<div class="card-text">
												<img src="imageminiature/clock.png" class="img img-fluid" width="10">
												<span><small>2h20</small></span>
												<img src="imageminiature/high-signal.png" class="img img-fluid" width="10">
												<span><small>intermadiate</small></span>
												<div >
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="far fa-star"></i>
													<i class="far fa-star"></i>
													<small>4.3 rated</small>
												</div>
											</div>
											<div class="card-footer bg-white mt-2 align-items-center">
												<img src="imageminiature/profil-1.jpg" class="img img-fluid rounded-circle" width="25">
												<span class="card-text"><small class="">Mrs Spark</small></span>
												<i class="far fa-check-square float-end align-items-center "></i>
											</div>
										</div>
									</div>

									<div class="col-lg-2  col-md-6 card mx-3 p-0">
										<img class="card-img-top img img-fluid" src="imageminiature/img9.jpeg" alt="Card image cap">
										<div class="card-body">
											<h5 class="card-title">Python courses build web application</h5>
											<div class="card-text">
												<img src="imageminiature/clock.png" class="img img-fluid" width="10">
												<span><small>2h20</small></span>
												<img src="imageminiature/high-signal.png" class="img img-fluid" width="10">
												<span><small>intermadiate</small></span>
												<div >
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="far fa-star"></i>
													<i class="far fa-star"></i>
													<small>4.3 rated</small>
												</div>
											</div>
											<div class="card-footer bg-white mt-2 align-items-center">
												<img src="imageminiature/profil-1.jpg" class="img img-fluid rounded-circle" width="25">
												<span class="card-text"><small class="">Mrs Spark</small></span>
												<i class="far fa-check-square float-end align-items-center "></i>
											</div>
										</div>
									</div>

									<div class="col-lg-2  col-md-6 card mx-3 p-0">
										<img class="card-img-top img img-fluid" src="imageminiature/img8.jpeg" alt="Card image cap">
										<div class="card-body">
											<h5 class="card-title">Python courses build web application</h5>
											<div class="card-text">
												<img src="imageminiature/clock.png" class="img img-fluid" width="10">
												<span><small>2h20</small></span>
												<img src="imageminiature/high-signal.png" class="img img-fluid" width="10">
												<span><small>intermadiate</small></span>
												<div >
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="far fa-star"></i>
													<i class="far fa-star"></i>
													<small>4.3 rated</small>
												</div>

											</div>
											<div class="card-footer bg-white mt-2 align-items-center">
												<img src="imageminiature/profil-1.jpg" class="img img-fluid rounded-circle" width="25">
												<span class="card-text"><small class="">Mrs Spark</small></span>
												<i class="far fa-check-square float-end align-items-center "></i>
											</div>
										</div>
									</div>
								</div> <!-- End Card-deck -->

							</div> <!-- End trending card section -->

						</div> <!-- container-fluid main content page -->


					</body>
					</html>