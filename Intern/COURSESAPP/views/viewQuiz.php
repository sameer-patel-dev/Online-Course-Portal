<?php
 	require("../models/connection.php");
 	session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Teacher Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/cards.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form-1.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body style="background-image: url(&quot;assets/img/star-sky.jpg&quot;);">
	<nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
	    <div class="container"><a class="navbar-brand" href="#">Online Portal</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
	        <div class="collapse navbar-collapse"
	            id="navcol-1">
	            <ul class="nav navbar-nav">
	                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Dashboard</a></li>
	                <li class="nav-item" role="presentation"></li>
	                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Courses</a></li>
	                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Users</a></li>
	            </ul>
	            <form class="form-inline mr-auto" target="_self">
	                <div class="form-group"><label for="search-field"></label></div>
	            </form><a class="btn btn-light action-button" role="button" href="../login.php">Log out</a></div>
	    </div>
	</nav>


	<div class="jumbotron text-body bg-secondary" style="padding: 32px;margin: 0px;height: 50px;">
	    <h3 class="text-center" style="height: 0px;margin: -14px;">Welcome to Teacher Dashboard</h3>
	</div>
	<br>
	<h1 class="text-center text-white">Quiz Results</h1>


<?php

 	$quiz_id = $_SESSION['quiz_id'];
	
 	$conn = new Connection();
 	$conn->createConnection();

 	$result = $conn->executeQuery("SELECT * FROM questions WHERE quiz_id = $quiz_id");
 	$viewQuiz = mysqli_fetch_all($result , MYSQLI_ASSOC);

 	echo '<center>';
 	echo '<div class="border rounded shadow-sm" style="background-color: #ffffff;padding: 21px;margin: 33px;">';
 	echo '<div class="container">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center"><a href="student.php"><button class="btn btn-primary d-flex align-items-center align-self-center" type="button" style="height: 38px;background-color: #f95602;">Back &nbsp;To Dashboard&nbsp;<i class="icon ion-ios-home" style="width: 20px;height: 21px;"></i></button></a>
                </div>
            </div>';
    echo '<hr>';

 	for ($i = 0; $i < sizeof($viewQuiz) ; $i++) 
 	{ 
 		$question = $viewQuiz[$i]['question'];
 		$option1 = $viewQuiz[$i]['option1'];
 		$option2 = $viewQuiz[$i]['option2'];
 		$option3 = $viewQuiz[$i]['option3'];
 		$option4 = $viewQuiz[$i]['option4'];
 		$correctOption = $viewQuiz[$i]['correctOption'];
 		$ans = $viewQuiz[$i]['option'.$correctOption];

 		echo '<div class="row">
 			               <div class="col-md-12"><table id="example" class="table table-bordered" cellspacing="0" width="100%">
 			           <tr>
 			               <th></th>
 			               <th>Question</th>
 			               <th>Option 1</th>
 			               <th>Option 2</th>
 			               <th>Option 3</th>
 			               <th>Option 4</th>
 			               
 			               <th>Accepted Answer</th>
 			           </tr>
 			           <tbody>
 			           <tr>
 			           	<td>'.($i+1).'</td>
 			               <td><b>Q'.($i+1).': '.$question.'</b></td>
 			               <td>'.$option1.'</td> 
 			               <td>'.$option2.'</td>
 			               <td>'.$option3.'</td>
 			               <td>'.$option4.'</td>
 			               
 			               <td><h5 style="color: green;">Accepted Answer:<br><i>'.$ans.'</i></h5></td>
 						</tr>
 						</tbody>';
 			       echo '</table>';

 				echo '</div>';
 				echo '</div>';
 	}
 	echo '<hr>';
 	echo '<br>';
 	echo '</div>';
 	echo '</center>';
 	echo '<br>';
 	echo '<br>';
 	echo '<br>';
 	$conn->closeConnection();

 	echo '<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Start: Services -->
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <!-- End: Services -->
                    <!-- Start: About -->
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <!-- End: About -->
                    <!-- Start: Footer Text -->
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <!-- End: Footer Text -->
                    <!-- Start: Social Icons -->
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    <!-- End: Social Icons -->
                </div>
                <!-- Start: Copyright -->
                <p class="copyright">Company Name © 2017</p>
                <!-- End: Copyright -->
            </div>
        </footer>
    </div>';
 	
?>
