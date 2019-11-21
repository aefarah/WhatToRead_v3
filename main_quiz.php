<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>What To Read</title>
  <meta charset="UTF-8">
    <meta name="author" content="Annette Farah, Mihaela McReynolds">
    <meta name="description" content="What To Read-group project for Internet Software Development class at PSTCC. Team: Annette Farah, Mihaela McReynolds">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="prefix-free.js" type="text/javascript"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link href="wtrquiz.css" rel="stylesheet">
  <link href="wtr.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

<?php require register.php ?>

<div class="container-fluid" style="padding: 0; height: 100%;">
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
	<div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-xs-5" style="background-color: white; padding: 2.3%;">
<!----------------------------------------------------- LOG IN FORM  ------------------------------------------------------------>
		<form action = "login.php" method = "post">
			<div class="form-group">
				<label for="exampleInputEmail1" style="color: #324519;">Email address
				</label>
				<input type="email" class="form-control" name="logemail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email@email.com">
				<small id="emailHelp" class="form-text text-muted" style="color: #8a0e0b;">We'll never share your email with anyone else.
				</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1" style="color: #324519;">Password
				</label>
				<input type="password" class="form-control" name="logpwd" id="exampleInputPassword1" placeholder="Password...">
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1" style="color: #324519;">Remember me
				</label>
			</div>
		</form>
		<div class="container pb-modalreglog-container" style="margin: 0;">
			<div class="input-group pb-modalreglog-input-group">
				<div class="row" style="flex: 1; padding-left: 20px; padding-right: 20px;">
          <!-- Log in button -->
					<a type="submit" class="btn btn-warning" name = "login-submit">Log in
					</a>
          <!-- Register button -->
					<div class="btn btn-warning pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2" style="margin-left:20px;">Register
					</div>
          <form action = "includes/logout.inc.php" method = "post">
            <button type = "submit"class="btn btn-warning" name = "logout-submit">Log out</button>
          </form>
          <!-- Registration form in modal -->
					<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-sm" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<div class="btn" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;
										</span>
									</div>
								</div>
								<div class="modal-body">
    <!--------------------------------------------- REGISTRATION FORM -------------------------------------------------->
									<form class="pb-modalreglog-form-reg" method = "post" action = "register.php">
										<div class="form-group">
											<div id="pb-modalreglog-progressbar">
											</div>
										</div>
                    <div class="form-group">
											<label for="fname" style="color: #324519;">First name
											</label>
											<div class="input-group pb-modalreglog-input-group">
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-user">
													</span>
												</span>
												<input type="text" class="form-control" id="fname" placeholder="Jane" name = "fname">
											</div>
										</div>
                    <div class="form-group">
											<label for="fname" style="color: #324519;">Last name
											</label>
											<div class="input-group pb-modalreglog-input-group">
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-user">
													</span>
												</span>
												<input type="text" class="form-control" id="lname" placeholder="Doe" name = "lname">
											</div>
										</div>
										<div class="form-group">
											<label for="email" style="color: #324519;">Email address
											</label>
											<div class="input-group pb-modalreglog-input-group">
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-user">
													</span>
												</span>
												<input type="email" class="form-control" id="email" placeholder="Email@email.com" name = "email">
												<small id="emailHelp" class="form-text text-muted" style="color: #8a0e0b;">We'll never share your email with anyone else.
												</small>
											</div>
										</div>
										<div class="form-group">
											<label for="password" style="color: #324519;">Password
											</label>
											<div class="input-group pb-modalreglog-input-group">
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-lock">
													</span>
												</span>
												<input type="password" class="form-control" name = "pwd" id="inputPws" placeholder="Password">
											</div>
										</div>
										<div class="form-group">
											<label for="confirmpassword" style="color: #324519;">Confirm password
											</label>
											<div class="input-group pb-modalreglog-input-group">
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-lock">
													</span>
												</span>
												<input type="password" class="form-control" name = "pwd-repeat" id="inputConfirmPws" placeholder="Repeat Password">
											</div>
										</div>
										<div class="form-group">
											<label for="country" style="color: #324519;">Country
											</label>
											<div class="input-group pb-modalreglog-input-group">
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-globe">
													</span>
												</span>
												<input type="text" class="form-control" id="countries" placeholder="USA" name = "country">
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close
									</button>
									<button type="submit" name ="signup-submit" class="btn btn-warning">Sign up
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>

 <!-- Page body -->

 <div class="container" onload = "startQuiz()">
	<div class="container text-center" style="padding:20px; float:left;">
		<h4> What to read next? Take our short quiz to find out! </h4><br><hr>
		<h5 class="display-5" style="color: #8a0e0b;">Choose one:
		</h5><hr>
		<div class="border border-warning" id = "quiz">
		<!-- Quiz options in a grid of pictures -->
			<div class="row">
				<div class="column">
					<a href="selection_01.html"><img id = "martian" src="images/martian.jpg" alt="Martian Book Cover"></a>
					<a href="selection_01.html"><img id = "gatsby" src="images/gatsby.jpg" alt="Gatsby Book Cover"></a>
				</div>
				<div class="column">
					<a href="selection_01.html"><img id = "homegoing" src="images/homegoing.jpg" alt="Homegoing Book Cover"></a>
					<a href="selection_01.html"><img id = "hp1" src="images/hp1.jpg" alt="Harry Potter Book Cover"></a>
				</div>
				<div class="column">
					<a href="selection_01.html"><img id= "malaria" src="images/malaria.jpg" alt="Malaria Book Cover"></a>
					<a href="selection_01.html"><img id = "dracula" src="images/dracula.jpg" alt="Dracula Book Cover"></a>
				</div>
				<div class="column">
					<a href="selection_01.html"><img id = "set" src="images/set.jpg" alt="Set Book Cover"></a>
					<a href="selection_01.html"><img id = "mothergoose" src="images/mothergoose.jpg" alt="Mothergoose Book Cover"></a>
				</div>
			</div>
      <button type = "submit" id = "quizSubmit">Submit</button>
		</div>
	</div>
  </div>

  <!-- Book of the Month -->
  <div class="container-fluid">
	<div class="flex-row">
		<div class="card img-fluid mx-auto" style="width: 18rem; text-align: center; padding: 20px; border: none; margin-top: 30px;">

			<img src="41UY3xTBq3L._SX322_BO1,204,203,200_.jpg" class="img-responsive" style="max-width: 200px; margin-top: 30px;">
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

	<!-- Bottom of the page -->

  <?php require "footer.php" ?>


 <script>
   const quizContainer = document.getElementById("quiz");
   const submitButton = document.getElementById("quizSubmit");

   function startQuiz(questions, quizContainer, submitButton) {
     function showQuestions(questions, quizContainer){}
      submitButton.hide();
     }
     function sowResult(questions, quizContainer){

     }

     showQuestions(questions, quizContainer);

     submitButton.onclick = function(){
       showResults(questions, quizContainer)
     }
   }

   var myQuestions = [
    {
      answers: {
        a:
      }
    }
   ]

</script>

</body>
</html>
