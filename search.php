<?php session_start(); ?>
<?php include "dbh.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Author and Description -->
	<meta name="author" content="Mihaela McReynolds & Annette Emily Farah">
	<meta name="description" content="What To Read - group project for Internet Software Development class at PSTCC.">

	<!-- Bootstrap Libraries -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<!-- CSS files -->
	<link href="wtr.css" rel="stylesheet">

	<title>What To Read | Search</title>
</head>

<!----------------------------------------------------------------------
Webpage Body
---------------------------------------------------------------------->
<body>
	<div class="container-fluid" style="padding: 0; height: 100%">
		<!-- TOP OF THE PAGE -->
		<!-- Header -->
		<div class="page-header" style="display: flex; padding: 0; margin: 0;">
			<div class="row" style="flex: 1; vertical-align: top; padding: 0 !important;">
				<!-- Left columns -->
				<div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-xs-7">
					<!-- Logo -->
					<img class="img-responsive" src="wtr.png" alt="Logo What To Read" style="width:100%;">
					<!-- Navigation bar -->
					<nav class="navbar navbar-expand-md" style="background: white;">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarCollapse">
							<ul class="nav navbar-nav" style="display: flex; float: none; display: inline-block; width: 100%; background-color: white; color: #324519;">
								<li class="nav-item" >
									<a class="nav-link" href="index.php">Home</a>
								</li>
								<li class="nav-item" >
									<a class="nav-link" href="browse.php">Browse</a>
								</li>
								<li class="nav-item" >
									<a class="nav-link" href="contact.php">Contact</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="search.php">Search</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about.php">About</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- Top Right corner -->
				<div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-xs-5" style="padding: 0;">
					<div class="login-corner">
						<p style="padding: 25px; margin-top: 30px;">
							Hello, Johanna!</br>
						</p>
						<!-- Navigation buttons -->
						<button type="submit" class="btn btn-warning">My Bookshelf
						</button>
						<button class="btn btn-warning" onclick="window.location.href='profile.php';" style="margin-left:20px;">My Profile</button>
					</div>
				</div>
			</div>
		</div>
	</div>

				<!-- Search Container -->
				<div style="margin: 50px 80px;">
					<div class="active-purple-3 active-purple-4 mb-4">
						<input class="form-control" type="text" placeholder="Search" aria-label="Search">
					</div>

					<h2 class="text-center" style="margin: 80px 0 90px 0;">Search Results for More Reads</h2>
					<div class="row">
						<div class="floatleft">
							<span class="box"><img src="images/hobbit.jpg" alt="The Hobbit Cover Image" class="img-responsive mx-auto"></span>
						</div>

						<div class="floatleft">
							<span class="box"><img src="images/hp1.jpg" alt="Harry Potter and the Sorcerer's Stone Cover Image" class="img-responsive mx-auto"></span>
						</div>

						<div class="floatleft">
							<span class="box"><img src="images/allegiant.jpg" alt="Allegiant Cover Image" class="img-responsive mx-auto"></span>
						</div>
					</div>	<br>

					<div class="row">
						<div class="btnAdd">
							<button type="submit" class="btn btn-warning">Add to Book History</button>
							<button type="submit" class="btn btn-warning" style="margin:20px 0 50px 0;">Add to Book List</button>
						</div>
					</div>

				</div>


				<!-- Book of the Month -->
				<div class="container-fluid">
					<div class="flex-row">
						<div class="card img-fluid mx-auto" style="width: 18rem; text-align: center; padding: 20px; border: none; margin-top: 30px;">

							<img src="images/homegoing.jpg" class="img-responsive mx-auto" style="max-width: 200px; margin-top: 30px;">
							<div class="h4 mx-auto"><br>Book of the month
							</div>
						</div>
						<br>
						<div class="col-xl-8 mx-auto" style="border-top: 1px solid #f0d38e; margin-top: 20px;">
							<br><h6> Winner of the PEN/ Hemingway Award</h6><br>
							<p class="text-center"><strong>
								Homegoing</strong> follows the parallel paths of these sisters and their descendants through eight generations:
								from the Gold Coast to the plantations of Mississippi, from the American Civil War to Jazz Age Harlem.
								Yaa Gyasi’s extraordinary novel illuminates slavery’s troubled legacy both for those who were taken and those
								who stayed—and shows how the memory of captivity has been inscribed on the soul of our nation.
							</p>
						</div>
					</div>
				</div>
			</body>
			</html>

			<!-- Bottom of the page -->
			<?php include "footer.php" ?>
