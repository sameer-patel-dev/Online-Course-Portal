<?php
if(!isset($_SESSION['type']))
{
    // not logged in
    header('Location: ../index.php');
    exit();
}
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student Page</title>
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

    <style type="text/css">
        .horizontal .progress-bar {
         float: left;
         height: 45px;
         width: 100%;
         padding: 12px 0;
        }

        .horizontal .progress-track {
         position: relative;
         width: 100%;
         height: 20px;
         background: lightgrey;
        }

        .horizontal .progress-fill {
         position: relative;
         background: green;
         height: 20px;
         width: 50%;
         color: #fff;
         text-align: center;
         font-family: "Lato","Verdana",sans-serif;
         font-size: 12px;
         line-height: 20px;
        }

    </style>

</head>

    <body style="background-image: url(&quot;assets/img/star-sky.jpg&quot;);">
        <!-- Start: Navigation with Search -->
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="#">Online Portal</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Dashboard</a></li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"></label></div>
                    </form><a class="btn btn-light action-button" role="button" href="../index.php">Log out</a></div>
            </div>
        </nav>
        <!-- End: Navigation with Search -->
        <div class="jumbotron text-body bg-secondary" style="padding: 32px;margin: 0px;height: 50px;">
            <h3 class="text-center" style="height: 0px;margin: -14px;">Welcome to Student Dashboard</h3>
            <p></p>
        </div>

    <section>
        <section>
            <h1 class="display-4 text-capitalize text-center text-white" data-aos="zoom-in" data-aos-duration="500"><strong>My Courses</strong></h1>
            <hr>
            <div class="table-responsive bg-white border rounded-0 border-warning shadow">
                <table class="table" id="myCourses">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                            <th>Progress</th>
                        </tr>
                    </thead>
                    
                </table>
            </div>
        </section>
        <section>
            <h1 class="display-4 text-center text-white" data-aos="zoom-in" data-aos-duration="500"><strong>Other Courses</strong></h1>
            <hr>
            <div class="table-responsive bg-white border rounded-0 border-warning shadow">
                <table class="table" id="otherCourses">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    
                </table>
            </div>
        </section>
    </section>
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
</body>
</html>


<script type="text/javascript">

    let myCoursesMap = new Map();
    let otherCoursesMap = new Map(); 
    
    function addRowToMyCoursesTable(course) 
    {   
        document.getElementById("myCourses").innerHTML += `<tr  id='${course.id}-mycourses'>
                                                            <td>${course.id}</td>
                                                            <td>${course.cname}</td>
                                                            <td>
                                                                <button onclick="leave(${course.id})">Leave</button>
                                                                <button onclick="watchCourse(${course.id})">Watch Course</button>
                                                            </td>
                                                            <td>
                                                                <div class="horizontal progress-bar">
                                                                <div class="progress-track">
                                                                    <div class="progress-fill">
                                                                       <span class="span">${course.progress}%</span>
                                                                    </div>
                                                                </div>
                                                                </div>    
                                                            </td>
                                                        </tr>`
    }

    function addRowToOtherCoursesTable(course) 
    {   
        if (myCoursesMap.get(parseInt(course.id)) == null) 
        {
            document.getElementById("otherCourses").innerHTML += `<tr id='${course.id}-othercourses'>
                                                                <td>${course.id}</td>
                                                                <td>${course.cname}</td>
                                                                <td><button onclick="join(${course.id})">Join</button></td>
                                                            </tr>`
        }
    }

    function getMyCourses() 
    {
        var xhttp = new XMLHttpRequest();

        var prog = document.getElementsByClassName("progress-fill");
        var percent=document.getElementsByClassName('span');

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
                        myCoursesMap.set(parseInt(response.courses[i].id), response.courses[i]);
                        //calculateProgress(response.courses[i].course_id);
                        addRowToMyCoursesTable(response.courses[i]);
                    }
                    for (var i = 0; i < prog.length; i++)
                    {
                        prog[i].style.width = percent[i].innerHTML;
                    }
                    console.log(myCoursesMap);
                }
                getOtherCourses();
            }
        };
           
        xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/users.php?query=getJoinedCourses&studentId=<?php echo $_SESSION['id'];?>", true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send();
    }

    function getOtherCourses() 
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
                        otherCoursesMap.set(parseInt(response.courses[i].id), response.courses[i]);
                        addRowToOtherCoursesTable(response.courses[i]);
                    }
                }
            }
        };
           
        xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=getAllCourses", true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send();
    }

    function join(courseId)
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
                    alert("Course Joined");
                    document.getElementById(courseId + "-othercourses").remove();
                    let course = otherCoursesMap.get(parseInt(courseId))
                    otherCoursesMap.delete(parseInt(courseId));
                    myCoursesMap.set(parseInt(course.id), course);
                    addRowToMyCoursesTable(course);
                    window.location.href = "./dashboard.php"; 
                    
                }
                else
                {
                    alert("Error");
                }
            }
        };
           
        xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/users.php?query=joinCourse&courseId=" + courseId + "&studentId=<?php echo $_SESSION['id'];?>", true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send();
    }

    function leave(courseId)
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
                    alert("Course Left");
                    document.getElementById(courseId + "-mycourses").remove();
                    let course = myCoursesMap.get(parseInt(courseId))
                    myCoursesMap.delete(parseInt(courseId));
                    otherCoursesMap.set(parseInt(course.id), course);
                    addRowToOtherCoursesTable(course);
                }
                else
                {
                    alert("Error");
                }
            }
        };
           
        xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/users.php?query=leaveCourse&courseId=" + courseId + "&studentId=<?php echo $_SESSION['id'];?>", true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send();
    }

    function watchCourse(courseId)
    {
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
                    window.location.href = "./watchCourse.php";
                }
                else
                {
                    alert("Error");
                }

            }
        };
        
        xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=watchCourse&courseId=" + courseId,true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send();
    }

    //...
    getMyCourses();
    
</script>


