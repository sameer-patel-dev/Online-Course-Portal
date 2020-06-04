<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Create Quiz</title>
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
</head>

<body style="background-image: url(&quot;assets/img/star-sky.jpg&quot;);">
    <!-- Start: Navigation with Search -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="../index.php">Online Portal</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form><a class="btn btn-light action-button" role="button" href="../login.php">Log out</a></div>
        </div>
    </nav>
    <!-- End: Navigation with Search -->
    <div class="jumbotron text-body bg-secondary" style="padding: 32px;margin: 0px;height: 50px;">
        <h3 class="text-center" style="height: 0px;margin: -14px;">Welcome to Teacher Dashboard</h3>
    </div>
    <section style="height: 200px; margin-top: -100px">
        <h1 class="text-center text-white">Create Quiz</h1>
        <hr>
    </section>
    <!-- Start: 1 Row 2 Columns -->
    <center>
    <label><b style="color:white;">Question 1: </b></label>
	<input type="text" name="question" id="question" placeholder="Enter the Question">
	<br><br>
	<label><b style="color:white;">Option 1: </b></label>
	<input type="text" name="option1" id="option1" placeholder="Enter the Option 1">
	<br><br>
	<label><b style="color:white;">Option 2: </b></label>
	<input type="text" name="option2" id="option2" placeholder="Enter the Option 2">
	<br><br>
	<label><b style="color:white;">Option 3: </b></label>
	<input type="text" name="option3" id="option3" placeholder="Enter the Option 3">
	<br><br>
	<label><b style="color:white;">Option 4:</b> </label>
	<input type="text" name="option4" id="option4" placeholder="Enter the Option 4">
	<br><br>
	<label ><b style="color:white;">Correct Option: </b></label>
	<input type="number" min="1" max="4" name="correctOption" id="correctOption" placeholder="Enter the Correct Option" style="width: 15%;">
	<br><br>
	<button class="btn btn-primary" onclick="nextQuestion()">Next Question</button>
	<button class="btn btn-primary" onclick="submitQuiz()">Submit Quiz</button>
	</center>
    <!-- End: 1 Row 2 Columns -->
    <section></section>
    <!-- Start: Footer Dark -->
    <div class="footer-dark">
                    <footer>
                        <div class="container">
                            <div class="row">
                                <!-- Start: Services -->
                                <div class="col-sm-6 col-md-3 item">
                                    <h3>Services</h3>
                                    <ul>
                                        <li><a href="#">Course Floating</a></li>
                                        <li><a href="#">Quiz Evaluation</a></li>
                                    </ul>
                                </div>
                                <!-- End: Services -->
                                <!-- Start: About -->
                                <div class="col-sm-6 col-md-3 item">
                                    <h3>About</h3>
                                    <ul>
                                        <li><a href="#">KJSCE</a></li>
                                        <li><a href="#">Team</a></li>
                                    </ul>
                                </div>
                                <!-- End: About -->
                                <!-- Start: Footer Text -->
                                <div class="col-md-6 item text">
                                    <h3>Initiative by TY students under Manjitsing Valvi and Sunayana Jadhav.</h3>
                                    <p></p>
                                </div>
                                <!-- End: Footer Text -->
                                <!-- Start: Social Icons -->
                                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                                <!-- End: Social Icons -->
                            </div>
                            <!-- Start: Copyright -->
                            <p class="copyright">Copyright © Somaiya University . All Rights Reserved</p>
                            <!-- End: Copyright -->
                        </div>
                    </footer>
                </div>
    <!-- End: Footer Dark -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative.js"></script>
    <script type="text/javascript">

<script type="text/javascript">
	function nextQuestion() 
	{
		let question = document.getElementById("question").value;
		let option1 = document.getElementById("option1").value;
		let option2 = document.getElementById("option2").value;
		let option3 = document.getElementById("option3").value;
		let option4 = document.getElementById("option4").value;
		let correctOption = document.getElementById("correctOption").value;

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() 
		{
		    if(this.readyState == 4 && this.status == 200)
		    {
		        console.log(this.responseText);
		        let response = JSON.parse(this.responseText);
		        console.log(response);
		        if(response.status == "success")
		        {
		        	alert("Question created, Enter next Question");
		        	window.location.href = "./createQuiz.php";
		        }
		        else
		        {
		            alert("Error");
		        }

		    }
		};
		
		xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=nextQuestion&question=" + question + "&option1=" + option1 + "&option2=" + option2 + "&option3=" + option3 + "&option4=" + option4 + "&correctOption=" + correctOption,true);
		xhttp.setRequestHeader("Content-Type", "application/json");
		xhttp.send();
	}

	function submitQuiz() 
	{
		let question = document.getElementById("question").value;
		let option1 = document.getElementById("option1").value;
		let option2 = document.getElementById("option2").value;
		let option3 = document.getElementById("option3").value;
		let option4 = document.getElementById("option4").value;
		let correctOption = document.getElementById("correctOption").value;

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() 
		{
		    if(this.readyState == 4 && this.status == 200)
		    {
		        console.log(this.responseText);
		        let response = JSON.parse(this.responseText);
		        console.log(response);
		        if(response.status == "success")
		        {
		        	alert("Quiz created");
					window.location.href = "./dashboard.php" ;
		        }
		        else
		        {
		            alert("Error");
		        }

		    }
		};
		
		xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=nextQuestion&question=" + question + "&option1=" + option1 + "&option2=" + option2 + "&option3=" + option3 + "&option4=" + option4 + "&correctOption=" + correctOption,true);
		xhttp.setRequestHeader("Content-Type", "application/json");
		xhttp.send();
	}
</script>
</body>
</html>
