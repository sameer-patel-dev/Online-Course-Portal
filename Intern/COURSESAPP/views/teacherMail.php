<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Teacher Mail</title>
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
        <div class="container"><a class="navbar-brand" href="#">Online Portal</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="teacher.php">Dashboard</a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form><a class="btn btn-light action-button" role="button" href="../index.php">Log out</a></div>
        </div>
    </nav>

        <!-- End: Navigation with Search -->
        <div class="jumbotron text-body bg-secondary" style="padding: 32px;margin: 0px;height: 50px;">
            <h3 class="text-center" style="height: 0px;margin: -14px;">Welcome to Teacher Dashboard</h3>
            <p></p>
        </div>
        <section style="height: 246px;">
            <h1 class="text-center text-white">TEACHER MAIL SYSTEM</h1>
        </section>
        <!-- Start: 1 Row 2 Columns -->
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div role="tablist" id="accordion-1">
                            <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="text-center mb-0"><a class="text-center" data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1"><strong>Send Email to a Specific Student</strong><br></a></h5>
                                </div>
                                <div class="collapse item-1" role="tabpanel" data-parent="#accordion-1">
                                    <div class="card-body">Enter Email: <input id="mailSpecificStudentByTeacher_Email" placeholder="Email"><br>Enter Subject: <input id="mailSpecificStudentByTeacher_Subject" placeholder="Subject"><br>Enter Body: <input id="mailSpecificStudentByTeacher_Body" placeholder="Body"><br><br><button class="btn btn-primary" type="button" onclick="mailSpecificStudentByTeacher()">Send mail</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div role="tablist" id="accordion-2">
                            <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="text-center mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-2 .item-1" href="#accordion-2 .item-1"><strong>Send Email to All Students</strong></a></h5>
                                </div>
                                <div class="collapse item-1" role="tabpanel" data-parent="#accordion-2">
                                    <div class="card-body">Enter Subject: <input id="mailAllStudentByTeacher_Subject" placeholder="Subject"><br>Enter Body:  <input id="mailAllStudentByTeacher_Body" placeholder="Body"> <br><br><button class="btn btn-primary" type="button" onclick="mailAllStudentByTeacher()">SEND MAIL</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div role="tablist" id="accordion-3">
                            <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="text-center mb-0"><a class="text-center" data-toggle="collapse" aria-expanded="true" aria-controls="accordion-3 .item-1" href="#accordion-3 .item-1"><strong>Send Email to All Students of Specific Course</strong><br></a></h5>
                                </div>
                                <div class="collapse item-1" role="tabpanel" data-parent="#accordion-3">
                                    <div class="card-body">Enter Course Name: <input type="text" id="mailAllStudentOfSpecificCourseByTeacher_CourseName" placeholder="Enter the Course Name"><br>Enter Subject: <input id="mailAllStudentOfSpecificCourseByTeacher_Subject" placeholder="Subject"> <br>Enter Body: <input id="mailAllStudentOfSpecificCourseByTeacher_Body" placeholder="Body"><br><br><button class="btn btn-primary" type="button" onclick="mailAllStudentOfSpecificCourseByTeacher()">Send mail</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    function mailSpecificStudentByTeacher()
        {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() 
            {
                if(this.readyState == 4 && this.status == 200)
                {
                    let response = JSON.parse(this.responseText);
                    if(response.status == "success")
                    {
                        alert("done");
                        window.location.href = "./teacherMail.php";
                    }
                    else
                    {
                        alert("not done");
                    }
                }
            };
            
            xhttp.open("POST","http://localhost/Intern/COURSESAPP/scripts/users.php",true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(JSON.stringify({
                query: "mailSpecificStudentByTeacher",
                email:document.getElementById("mailSpecificStudentByTeacher_Email").value,
                subject:document.getElementById("mailSpecificStudentByTeacher_Subject").value,
                body:document.getElementById("mailSpecificStudentByTeacher_Body").value
            }));            
        }

        function mailAllStudentByTeacher()
        {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() 
            {
                if(this.readyState == 4 && this.status == 200)
                {
                    let response = JSON.parse(this.responseText);
                    if(response.status == "success")
                    {
                        alert("done");
                        window.location.href = "./teacherMail.php";
                    }
                    else
                    {
                        alert("not done");
                    }
                }
            };
            
            xhttp.open("POST","http://localhost/Intern/COURSESAPP/scripts/users.php",true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(JSON.stringify({
                query: "mailAllStudentByTeacher",
                subject:document.getElementById("mailAllStudentByTeacher_Subject").value,
                body:document.getElementById("mailAllStudentByTeacher_Body").value
            }));            
        }

        function mailAllStudentOfSpecificCourseByTeacher()
        {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() 
            {
                if(this.readyState == 4 && this.status == 200)
                {
                    let response = JSON.parse(this.responseText);
                    if(response.status == "success")
                    {
                        alert("done");
                        window.location.href = "./teacherMail.php";
                    }
                    else
                    {
                        alert("not done");
                    }
                }
            };
            
            xhttp.open("POST","http://localhost/Intern/COURSESAPP/scripts/users.php",true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(JSON.stringify({
                query: "mailAllStudentOfSpecificCourseByTeacher",
                course_name:document.getElementById("mailAllStudentOfSpecificCourseByTeacher_CourseName").value,
                subject:document.getElementById("mailAllStudentOfSpecificCourseByTeacher_Subject").value,
                body:document.getElementById("mailAllStudentOfSpecificCourseByTeacher_Body").value
            }));            
        }

</script>
 </body>

    </html>