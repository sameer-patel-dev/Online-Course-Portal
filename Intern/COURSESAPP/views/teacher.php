<?php
  if(!isset($_SESSION['type']))
  {
      header('Location: ../index.php');
      exit();
  }
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
        <div class="container"><a class="navbar-brand" href="../index.php">Online Portal</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="teacherMail.php">Mailing System</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form><a class="btn btn-light action-button" role="button" href="../login.php">Log out</a></div>
        </div>
    </nav>
    <!-- End: Navigation with Search -->
    <div class="jumbotron text-body bg-secondary" style="padding: 32px;margin: 0px;height: 50px;">
        <h3 class="text-center" style="height: 0px;margin: -14px;">Welcome to Teacher Dashboard</h3>
        <p></p>
    </div>

    <section style="height: 246px;">
        <h1 class="text-center text-white">Teacher Access</h1>
        <hr>
    </section>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div role="tablist" id="accordion-1">
                        <div class="card">
                            <div role="tab" class="card-header text-center">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" class="text-center">Create Quiz</a></h5>
                            </div>
                            <div role="tabpanel" data-parent="#accordion-1" class="collapse item-1">
                                <div class="card-body">
                                  <label>Enter Quiz Name:</label>
                                  <input type="text" name="quizName" id="quizName" placeholder="Name of Quiz">
                                  <br><br>
                                  <label>Enter the Course Id:</label>
                                  <input type="text" name="course_id" id="course_id" placeholder="Id of Course">
                                  <br><br>
                                  <button onclick="createQuiz()">Create Quiz</button>                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div role="tablist" id="accordion-2">
                        <div class="card">
                            <div role="tab" class="card-header">
                                <h5 class="text-center mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-2 .item-1" href="#accordion-2 .item-1" class="text-center">Upload Video</a></h5>
                            </div>
                            <div role="tabpanel" data-parent="#accordion-2" class="collapse item-1">
                                <div class="card-body">
                                  <label>Enter Video Name:</label>
                                  <input type="text" name="displayVideoName" id="displayVideoName" placeholder="Name of Video">
                                  <br><br>
                                  <label>Enter the Course Id:</label>
                                  <input type="text" name="course_id_forVideo" id="course_id_forVideo" placeholder="Id of Course">
                                  <br><br>
                                  <button onclick="uploadVideo()">Upload Video</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div role="tablist" id="accordion-3">
                        <div class="card">
                            <div role="tab" class="card-header">
                                <h5 class="text-center mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-3 .item-1" href="#accordion-3 .item-1">Send Mails</a></h5>
                            </div>
                            <div role="tabpanel" data-parent="#accordion-3" class="collapse item-1">
                                <div class="card-body">
                                    <a href="teacherMail.php"><button>Mail the students</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<section></section>
<h1 class="text-center text-white">My Courses</h1>
<hr>
<div class="table-responsive bg-white border rounded-0 border-warning shadow">
<table id="coursesTable" class="table">
  <thead>
    <tr>
        <th style="width: 258px;">ID</th>
        <th style="width: 129px;">Name</th>
        <th class="text-center" style="width: 500px;">Info</th>
    </tr>
    </thead>    
</table>
</div>

<section></section>

<div id="look">
  <h3 class="text-capitalize text-center text-white" data-aos="zoom-in" data-aos-duration="500"><strong>Course Details</strong></h3><hr>
  <div class="container" style="max-height: 250px;">
        <div class="row">
          <div class="col-md-6">
                <center>
                    <h5 class="text-capitalize text-center text-white" data-aos="zoom-in" data-aos-duration="500"><strong>Students List</strong></h5><hr>

                    <div class="table-responsive bg-white border rounded-0 border-warning shadow">
                    <table id="studentsList" class="table">
                      <tr>
                        <thead>
                        <th>Students Name</th>
                        <th>Progress</th>
                      </thead>
                      </tr>
                    </table>
                  </div>
              </center>
          </div>

          <div class="col-md-6">
                <center>
                <h5 class="text-capitalize text-center text-white" data-aos="zoom-in" data-aos-duration="500"><strong>Quiz List</strong></h5><hr>
                <ol id="quizList" class="list-inline"></ol>
              </center>
          </div>

        </div>
  </div>
</div>

<br>
<hr>
<br>

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
            <ol id="videoList" class="list-inline"></ol>
            <br>
            <ol id="displayResource" class="list-inline"></ol>
          </div>

        </div>
  </div>
</div>








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
    
    function addRowToCoursesTable(course)
    {
        document.getElementById("coursesTable").innerHTML += `<tr>
                                                                <td>${course.id}</td>
                                                                <td>${course.cname}</td>
                                                                <td class="text-center"><a href="#look"><button onclick="getStudents(${course.id}); getQuiz(${course.id}); getVideo(${course.id}); "class="btn btn-primary">Course Details</button></a></td>
                                                            </tr>`
    }

    function addListItem(student)
    {
        
        document.getElementById("studentsList").innerHTML += `<tr>
                                                                  <td>${student.name}</td>
                                                                  <td>${student.progress}%</td> 
                                                              </tr>`
    }

    function addListItem2(quiz)
    {
        document.getElementById("quizList").innerHTML += `<li class="list-inline-item"><button onclick='viewQuiz(${quiz.id})'>${quiz.quizName}</button></li>`
    } 

    // function addListItem3(video)
    // {
    //     document.getElementById("videoList").innerHTML += `<li>
    //                                                           ${video.displayVideoName}<br>
    //                                                           <label>Enter Resource Name:</label>
    //                                                           <input type="text" name="displayResourceName" id="${video.id}-displayResourceName" placeholder="Name of Resource">
    //                                                           <button onclick=addResources(${video.id})>Add Resources</button>
    //                                                           <br><br>
    //                                                         </li>`
    // }    

    function addListItemToCourseVideo(video)
    {
        document.getElementById("videoList").innerHTML += `<li class="list-inline-item"><button onclick='watchVideo(${video.id}); getResource(${video.id});'>${video.displayVideoName}</button> </li>`
    } 

    function addListItemToCourseResource(displayResource)
    {
        document.getElementById("displayResource").innerHTML += `<li class="list-inline-item"><button onclick = "openResource(${displayResource.id})">${displayResource.displayResourceName}</button></li>`
    }

    function addVideoToDisplayVideo(displayVideo)
    {
        document.getElementById("displayVideo").innerHTML = `<video width = "615" height = "315" controls>
                                                                <source src = "../uploadedVideo/${displayVideo.actualVideoName}" type = "video/mp4">
                                                              </video>`
    } 

    function getCourses()
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
                       for(let i = 0; i < response.courses.length; i++)
                       {
                           addRowToCoursesTable(response.courses[i]);
                       }
                   }
               }
           };
           
           xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=getCoursesByTeacher&teacherId=<?php echo $_SESSION['id']; ?>", true);
           xhttp.setRequestHeader("Content-Type", "application/json");
           xhttp.send();            
    }

    function getStudents(courseId) 
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
                        document.getElementById("studentsList").innerHTML = "";
                        document.getElementById("studentsList").innerHTML = `<tr>
                                                                                  <th>Student</th>
                                                                                  <th>Progress</th> 
                                                                              </tr>`
                       for(let i = 0; i < response.students.length; i++)
                       {
                           addListItem(response.students[i]);
                       }
                   }
               }
               else
               {
                  document.getElementById("studentsList").innerHTML = "";
                  document.getElementById("studentsList").innerHTML = "<center><h5>No Students Enrolled</h5></center>";
               }
           };
           
           xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=getStudentsInCourse&courseId=" + courseId, true);
           xhttp.setRequestHeader("Content-Type", "application/json");
           xhttp.send();  
    }

    function getQuiz(courseId) 
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
                       document.getElementById("quizList").innerHTML = "";
                       for(let i = 0; i < response.quiz.length; i++)
                       {
                           addListItem2(response.quiz[i]);
                       }
                   }
                   else
                   {
                      document.getElementById("quizList").innerHTML = "";
                      document.getElementById("quizList").innerHTML = "No Quiz";
                   }

               }
           };
           
           xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=getQuizInCourse&courseId=" + courseId, true);
           xhttp.setRequestHeader("Content-Type", "application/json");
           xhttp.send();  
    }

    function getVideo(courseId)
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
                       document.getElementById("videoList").innerHTML = "";
                       for(let i = 0; i < response.video.length; i++)
                       {
                           addListItemToCourseVideo(response.video[i]);
                       }
                   }
                   else
                   {
                      document.getElementById("videoList").innerHTML = "";
                      document.getElementById("videoList").innerHTML = "No Video Uploaded";
                   }
               }
           };
           
           xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=getVideoInCourse&courseId=" + courseId, true);
           xhttp.setRequestHeader("Content-Type", "application/json");
           xhttp.send();
    }
    

    function createQuiz()
    {
      let quizName = document.getElementById("quizName").value;
      let course_id = document.getElementById("course_id").value;
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
                  window.location.href = './createQuiz.php';
              }
              else
              {
                  alert("Error");
              }

          }
      };
      
      xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=createQuiz&quizName=" + quizName + "&course_id=" + course_id,true);
      xhttp.setRequestHeader("Content-Type", "application/json");
      xhttp.send();
    }

    function uploadVideo()
    {
      let displayVideoName = document.getElementById("displayVideoName").value;
      let course_id_forVideo = document.getElementById("course_id_forVideo").value;
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
                  window.location.href = './uploadVideo.php';
              }
              else
              {
                  alert("Error");
              }

          }
      };
      
      xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=uploadVideo&displayVideoName=" + displayVideoName + "&course_id_forVideo=" + course_id_forVideo,true);
      xhttp.setRequestHeader("Content-Type", "application/json");
      xhttp.send();
    }

    function addResources(videoId)
    {
        let displayResourceName = document.getElementById(videoId + "-displayResourceName").value;
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
                    window.location.href = './uploadResource.php';
                }
                else
                {
                    alert("Error");
                }

            }
        };
        
        xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=uploadResource&displayResourceName=" + displayResourceName + "&videoId=" + videoId ,true);
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
                    // document.getElementById("displayVideo").innerHTML = "";
                    // document.getElementById("displayQuiz").innerHTML = "";
                    window.location.href = "./viewQuiz.php";
                 }
                 else
                 {
                    // document.getElementById("displayVideo").innerHTML = "";
                    // document.getElementById("displayQuiz").innerHTML = "";
                    alert("Some error occured. Try again in some time!");
                 }
             }
         };
         
         xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=viewQuizByTeacher&quizId=" + quizId, true);
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
                       document.getElementById("displayResource").innerHTML = "<h4 class='text-capitalize text-center text-white' data-aos='zoom-in' data-aos-duration='500'><strong>Resources:</strong></h4>";
                       for(let i = 0; i < response.resource.length; i++)
                       {
                           addListItemToCourseResource(response.resource[i]);
                       }

                   }
                   else
                   {
                      document.getElementById("displayResource").innerHTML = "";
                      document.getElementById("displayResource").innerHTML = "<h3>Resources:</h3><br>No Resources!";
                   }

                    document.getElementById("displayResource").innerHTML += `<br><br>`;
                    document.getElementById("displayResource").innerHTML += `<h4 class='text-capitalize text-center text-white' data-aos='zoom-in' data-aos-duration='500'><strong>Add a Resource:</strong></h4>
                                                              <label>Enter Resource Name:</label><br>
                                                              <input type="text" name="displayResourceName" id="${videoId}-displayResourceName" placeholder="Name of Resource">
                                                              <button onclick=addResources(${videoId})>Add Resources</button>`

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
                      document.getElementById("displayVideo").innerHTML = "";
                      addVideoToDisplayVideo(response.displayVideo[0]);
              
                 }
                 else
                 {
                    document.getElementById("displayVideo").innerHTML = "";
                    document.getElementById("displayResource").innerHTML = "";
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
     //Executing the code once the page loads
     getCourses();
</script>

</body>

</html>