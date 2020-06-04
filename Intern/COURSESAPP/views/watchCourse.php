<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Students Course Videos</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/cards-1.css">
    <link rel="stylesheet" href="assets/css/cards.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean-1.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/countdown-timer-1.css">
    <link rel="stylesheet" href="assets/css/countdown-timer.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form-1-1.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form-1.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form-2.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-1.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/Icon-Bar-Horizontal---mloureiro1973-1.css">
    <link rel="stylesheet" href="assets/css/Icon-Bar-Horizontal---mloureiro1973.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark-1-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark-2.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button-1.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search-1.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/progress-wizard.compiled.css">
    <link rel="stylesheet" href="assets/css/SIdebar-Responsive-2-1.css">
    <link rel="stylesheet" href="assets/css/SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="assets/css/SO-Floating-Nav_v10.css">
    <link rel="stylesheet" href="assets/css/Steps-Progressbar.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>


<body style="background-image: url(&quot;assets/img/star-sky.jpg&quot;);">
    <!-- Start: Navigation with Search -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="#">Online Portal</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form><a class="btn btn-light action-button" role="button" href="../login.php">Log out</a></div>
        </div>
    </nav>
    <!-- End: Navigation with Search -->
    <!-- Start: 2 Rows 1+1 Columns -->
    <br><br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center text-white" style="margin-top: -50px"><strong>Course Details</strong></h2>
                    <hr>
                    <br>
                </div>
            </div>
        </div>


<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="displayVideo">
                    <video width = "615" height = "315" controls>
                        <source type = "video/mp4">
                    </video>
                </div>
            </div>

            <div class="col-md-6">
              <h4 class="text-capitalize text-center text-white" data-aos="zoom-in" data-aos-duration="500"><strong>Videos</strong></h4>
              <ul id="courseVideo" class="list-inline"></ul>
              <ol id="displayResource" class="list-inline"></ol>
            </div>
        </div>
    </div>
</div>

<br><br><br><br>

<div>
    <div class="container">
      <h2 class="text-capitalize text-center text-white" data-aos="zoom-in" data-aos-duration="500"><strong>Take Quizzes</strong></h2>
      <hr>
      <br><br>
        <div class="row">
            <div class="col-md-6">
                <ul id="courseQuiz"></ul>
            </div>
            <div class="col-md-6">
                <h5>Quiz</h5>
                <form id="displayQuiz" action="getResult.php" method="POST"></form>
            </div>
        </div>
    </div>
</div>


  

  






<section>
    <h2 class="text-capitalize text-center text-white" data-aos="zoom-in" data-aos-duration="500"><strong>Your Progress</strong></h2>
    <hr>
    <div class="table-responsive bg-white border rounded-0 border-warning shadow">
        <table class="table" id="viewProgress">
            <thead>
                <tr>
                    <th>Quiz Name</th>
                    <th>Score</th>
                </tr>
            </thead>
        </table>
    </div>
</section>


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
    <script src="assets/js/quiz.js"></script>




<script type="text/javascript">

  function addListItemToCourseVideo(video)
  {
      document.getElementById("courseVideo").innerHTML += `<li class="list-inline-item"><button onclick='watchVideo(${video.id}); getResource(${video.id});'>${video.displayVideoName}</button> </li>`
  } 
	
	function addListItemToCourseQuiz(quiz)
	{
	    document.getElementById("courseQuiz").innerHTML += `<li>
                                                              <button onclick='attemptQuiz(${quiz.id})'>${quiz.quizName}</button>	
                                                              <button onclick='viewQuiz(${quiz.id})'>View ${quiz.quizName}</button>
                                                          </li>`
	}  

  function addVideoToDisplayVideo(displayVideo)
  {
      document.getElementById("displayVideo").innerHTML = `<video width = "615" height = "315" controls>
                                                              <source src = "../uploadedVideo/${displayVideo.actualVideoName}" type = "video/mp4">
                                                            </video>`
  } 

  function addListItemToCourseResource(displayResource)
  {
      document.getElementById("displayResource").innerHTML += `<li class="list-inline-item"><button onclick = "openResource(${displayResource.id})">${displayResource.displayResourceName}</button></li>`
  }
  
	function addQuestionToDisplayQuiz(displayQuiz)
	{
	    document.getElementById("displayQuiz").innerHTML += `<li>
	    														${displayQuiz.question}
	    														<br>
	    														<input type = 'radio' name = '${displayQuiz.id}-answer' value = '${displayQuiz.option1}'>${displayQuiz.option1}
	    														<br>
	    														<input type = 'radio' name = '${displayQuiz.id}-answer' value = '${displayQuiz.option2}'>${displayQuiz.option2}
	    														<br>
	    														<input type = 'radio' name = '${displayQuiz.id}-answer' value = '${displayQuiz.option3}'>${displayQuiz.option3}
	    														<br>
	    														<input type = 'radio' name = '${displayQuiz.id}-answer' value = '${displayQuiz.option4}'>${displayQuiz.option4}
	    													</li>
                                <br>`
	} 

  function addRowToMyViewProgressTable(viewProgress) 
  {   
        document.getElementById("viewProgress").innerHTML += `<tr>
                                                                <td>${viewProgress.quizName}</td>
                                                                <td>${viewProgress.score}</td>
                                                            </tr>`
  }

  function getVideo()
  {
      var xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function() 
         {
             if(this.readyState == 4 && this.status == 200)
             {
                 let response = JSON.parse(this.responseText);
                 console.log(response);
                 if(response.status == "success")
                 {
                     document.getElementById("courseVideo").innerHTML = "";
                     document.getElementById("displayResource").innerHTML = "<h4 class='text-capitalize text-center text-white'><strong>Resources</strong></h4>";
                     for(let i = 0; i < response.video.length; i++)
                     {
                         addListItemToCourseVideo(response.video[i]);
                     }
                 }
                 else
                 {
                    document.getElementById("courseVideo").innerHTML = "";
                    document.getElementById("courseVideo").innerHTML = "No Videos";
                 }
             }
         };
         
         xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=getVideoInCourse&courseId=<?php echo $_SESSION['course_id']?>", true);
         xhttp.setRequestHeader("Content-Type", "application/json");
         xhttp.send();
  }

	function getQuiz() 
    {
        var xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function() 
           {
               if(this.readyState == 4 && this.status == 200)
               {
                   let response = JSON.parse(this.responseText);
                   console.log(response);
                   if(response.status == "success")
                   {
                       document.getElementById("courseQuiz").innerHTML = "";
                       for(let i = 0; i < response.quiz.length; i++)
                       {
                           addListItemToCourseQuiz(response.quiz[i]);
                       }
                   }
                   else
                   {
                      document.getElementById("courseQuiz").innerHTML = "";
                      document.getElementById("courseQuiz").innerHTML = "No Quiz";
                   }
               }
           };
           
           xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=getQuizInCourse&courseId=<?php echo $_SESSION['course_id']?>", true);
           xhttp.setRequestHeader("Content-Type", "application/json");
           xhttp.send();  
    }

    function getResource(videoId)
    {
        var xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function() 
           {
               if(this.readyState == 4 && this.status == 200)
               {
                   let response = JSON.parse(this.responseText);
                   console.log(response);
                   if(response.status == "success")
                   {
                       document.getElementById("displayResource").innerHTML = "";
                       document.getElementById("displayResource").innerHTML = "<h4 class='text-capitalize text-center text-white'><strong>Resources</strong></h4>";
                       for(let i = 0; i < response.resource.length; i++)
                       {
                           addListItemToCourseResource(response.resource[i]);
                       }
                   }
                   else
                   {
                      document.getElementById("displayResource").innerHTML = "<h3>No Resources</h3>";
                   }
               }
           };
           
           xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=getResourceForStudent&videoId=" + videoId, true);
           xhttp.setRequestHeader("Content-Type", "application/json");
           xhttp.send();
    }

    function watchVideo(videoId)
    {
      var xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function() 
         {
             if(this.readyState == 4 && this.status == 200)
             {
                 let response = JSON.parse(this.responseText);
                 console.log(response);
                 if(response.status == "success")
                 {
                      document.getElementById("displayQuiz").innerHTML = "";
                      document.getElementById("displayVideo").innerHTML = "";
                      addVideoToDisplayVideo(response.displayVideo[0]);
              
                 }
                 else
                 {
                    document.getElementById("displayQuiz").innerHTML = "";
                    document.getElementById("displayVideo").innerHTML = "";
                    document.getElementById("displayVideo").innerHTML = "No Video File found";
                 }
             }
         };
         
         xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=displayVideoToStudent&videoId=" + videoId, true);
         xhttp.setRequestHeader("Content-Type", "application/json");
         xhttp.send();
    }

    function openResource(resourceId)
    {
          var xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function() 
           {
               if(this.readyState == 4 && this.status == 200)
               {
                   let response = JSON.parse(this.responseText);
                   console.log(response);
                   if(response.status == "success")
                   {
                        window.open('openResource.php','_blank');
                
                   }
                   else
                   {
                      alert("No file found");
                   }
               }
           };
           
           xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=openResource&resourceId=" + resourceId, true);
           xhttp.setRequestHeader("Content-Type", "application/json");
           xhttp.send();
    }

    function attemptQuiz(quizId)
    {
    	var xhttp = new XMLHttpRequest();
    	   xhttp.onreadystatechange = function() 
    	   {
    	       if(this.readyState == 4 && this.status == 200)
    	       {
    	           let response = JSON.parse(this.responseText);
    	           console.log(response);
    	           if(response.status == "success")
    	           {
                     document.getElementById("displayVideo").innerHTML = "<video width = '615' height = '315' controls>"+"<source src = '' type = 'video/mp4'>"+"</video>";
    	               document.getElementById("displayQuiz").innerHTML = "";
    	               for(let i = 0; i < response.displayQuiz.length; i++)
    	               {
    	                   addQuestionToDisplayQuiz(response.displayQuiz[i]);
    	               }
                     document.getElementById("displayQuiz").innerHTML +=   `<input type="submit" name="submitQuiz" value="Submit Quiz">`;
    	           }
    	           else
    	           {
                    document.getElementById("displayVideo").innerHTML = "<video width = '615' height = '315' controls>"+"<source src = '' type = 'video/mp4'>"+"</video>";
    	           		document.getElementById("displayQuiz").innerHTML = "";
                    alert("Your have already attempted this Quiz");
    	           }
    	       }
    	   };
    	   
    	   xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=displayQuizToStudent&quizId=" + quizId, true);
    	   xhttp.setRequestHeader("Content-Type", "application/json");
    	   xhttp.send();
    }

    function viewQuiz(quizId)
    {
      var xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function() 
         {
             if(this.readyState == 4 && this.status == 200)
             {
                 let response = JSON.parse(this.responseText);
                 console.log(response);
                 if(response.status == "success")
                 {
                    document.getElementById("displayVideo").innerHTML = "";
                    document.getElementById("displayQuiz").innerHTML = "";
                    window.location.href = "./viewAttemptedQuiz.php";
                 }
                 else
                 {
                    document.getElementById("displayVideo").innerHTML = "";
                    document.getElementById("displayQuiz").innerHTML = "";
                    alert("You haven't attempted this Quiz");
                 }
             }
         };
         
         xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=viewQuiz&quizId=" + quizId, true);
         xhttp.setRequestHeader("Content-Type", "application/json");
         xhttp.send();
    }

    function viewProgress()
    {
          var xhttp = new XMLHttpRequest();
             xhttp.onreadystatechange = function() 
             {
                 if(this.readyState == 4 && this.status == 200)
                 {
                     let response = JSON.parse(this.responseText);
                     console.log(response);
                     if(response.status == "success")
                     {
                         for(let i = 0; i < response.viewProgress.length; i++)
                         {
                             addRowToMyViewProgressTable(response.viewProgress[i]);
                         }
                     }
                     else
                     {
                        document.getElementById("viewProgress").innerHTML = "No Progress Yet";
                     }
                 }
             };
             
             xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=viewProgress&studentId=<?php echo $_SESSION['id']?>&courseId=<?php echo $_SESSION['course_id']?>", true);
             xhttp.setRequestHeader("Content-Type", "application/json");
             xhttp.send();
    }

    getQuiz();
    getVideo();
    viewProgress();
</script>
</body>
</html>
