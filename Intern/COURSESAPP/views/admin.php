<?php
if(!isset($_SESSION['type']))
{
    // not logged in
    header('Location: ../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Page</title>
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
    <!-- Start: Navigation with Search -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="#">Online Portal</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="adminMail.php">Mailing System</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form><a class="btn btn-light action-button" role="button" href="../login.php">Log out</a></div>
        </div>
    </nav>
    <!-- End: Navigation with Search -->
    <div class="jumbotron text-body bg-secondary" style="padding: 32px;margin: 0px;height: 50px;">
        <h3 class="text-center" style="height: 0px;margin: -14px;">Welcome to Admin Dashboard</h3>
        <p></p>
    </div>
    <section style="height: 246px;">
        <h1 class="text-center text-white">ADMIN ACCESS</h1>
    </section>
    <!-- Start: 1 Row 2 Columns -->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div role="tablist" id="accordion-1">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="text-center mb-0">
                                    <a class="text-center" data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1">
                                        <strong>Create a Course</strong>
                                    </a>
                                </h5>
                            </div>
                            <div class="collapse item-1" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <label>Enter Course Name: </label>
                                    <input type="text" id="name" name="courseName"><br>
                                    <label>Enter Start Date: </label>
                                    <input type="date" id="startDate" name="startDate"><br>
                                    <label>Enter End Date</label>
                                    <input type="date" id="endDate" name="endDate"><br>
                                    <button class="btn btn-primary" type="button" onclick="createCourse()">Create Course</button>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="text-center mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2"><strong>Assign Teacher to a Course</strong></a></h5>
                            </div>
                            <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <label>Enter Course Id: </label>
                                    <input id="courseId" placeholder="Course Id"><br>
                                    <label>Enter Teacher Id</label>
                                    <input id="teacherId" placeholder="Teacher Id"><br>
                                    <button class="btn btn-primary" type="button"  onclick="assignTeacher()">Assign Teacher</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div role="tablist" id="accordion-2">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="text-center mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-2 .item-1" href="#accordion-2 .item-1"><strong>Create Teacher</strong></a></h5>
                            </div>
                            <div class="collapse item-1" role="tabpanel" data-parent="#accordion-2">
                                <div class="card-body">
                                    <label>Enter Teacher Name: </label>
                                    <input id="signup-name" placeholder="Name"><br>
                                    <label>Enter Teacher Email: </label>
                                    <input id="signup-email" placeholder="Email"><br>
                                    <label>Enter Teacher Username: </label>
                                    <input id="signup-username" placeholder="Username"><br>
                                    <label>Enter Teacher Password: </label>
                                    <input id="signup-password" placeholder="Password"><br>
                                    <label>Enter Teacher Gender: </label>
                                    <input type="radio" name="gender"  value="Male">Male
                                    <input type="radio" name="gender"  value="Female">Female<br>
                                    <label>Enter Teacher Branch: </label>
                                    <select id ="branch" class="border rounded form-control" style="color: black;opacity: 1;">
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Computers">Computer Science</option>
                                        <option value="Mechanical">Mechanical</option>
                                        <option value="Electronics">Electronics</option>
                                        <option value="Electronics and Telecom">Electronics and Telecom</option>
                                    </select>

                                    <button class="btn btn-primary" type="button" onclick="createTeacher()">Create Teacher</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="text-center mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-2 .item-2" href="#accordion-2 .item-2"><strong>Send Mails</strong></a></h5>
                            </div>
                            <div class="collapse item-2" role="tabpanel" data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>Send Mails to Teachers, Students of specific and all courses here</p>
                                    <a href="adminMail.php"><button class="btn btn-primary" type="button">Send Mail</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <section>
            <h1 class="display-4 text-capitalize text-center text-white" data-aos="zoom-in" data-aos-duration="500"><strong>All Courses</strong></h1>
            <hr>
            <div class="table-responsive bg-white border rounded-0 border-warning shadow">
                <table class="table" id="coursesTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Teacher Name</th>
                            <th>Students List</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </section>

        <!--modal-->
        <div class="modal fade" role="dialog" tabindex="-1" id="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Students List</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table" id= "studentsList">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Grading</th>
                                        <th>Certificate</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section>
            <h1 class="display-4 text-center text-white" data-aos="zoom-in" data-aos-duration="500"><strong>All Teachers</strong></h1>
            <hr>
            <div class="table-responsive bg-white border rounded-0 border-warning shadow">
                <table class="table" id="teachersTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Teacher Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Gender</th>
                            <th>Branch</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </section>


        <section class="text-center text-white">
            <h1 class="display-4 text-white" data-aos="zoom-in" data-aos-duration="500"><strong>All Students</strong></h1>
            <hr>
            <div class="table-responsive bg-white border rounded-0 border-warning shadow">
                <table class="table" id="studentsTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Gender</th>
                            <th>Branch</th>
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


<script type="text/javascript">
        let teachersMap = new Map();

        function addRowToCoursesTable(course)
        {
            document.getElementById("coursesTable").innerHTML += `<tr>
                                                                    <td>${course.id}</td>
                                                                    <td>${course.cname}</td>
                                                                    <td>${course.cstartDate}</td>
                                                                    <td>${course.cendDate}</td>
                                                                    <td id='${course.id}-teacher'>${teachersMap.get(parseInt(course.teacher_id)) == null? "No Teacher Yet": teachersMap.get(parseInt(course.teacher_id))}</td>
                                                                    <td><a class="btn btn-primary btn-lg" role="button" data-toggle="modal" href="#myModal"  onclick = "studentsInCourse(${course.id})" style="width: 135px;height: 29px;margin: 0px;padding: 2px;">students</a></td>
                                                                </tr>`
        }

        function addRowToStudentsTable (student) 
        {
            document.getElementById("studentsTable").innerHTML += `<tr>
                                                                    <td>${student.id}</td>
                                                                    <td>${student.name}</td>
                                                                    <td>${student.username}</td>
                                                                    <td>${student.password}</td>
                                                                    <td>${student.gender}</td>
                                                                    <td>${student.branch}</td>
                                                                </tr>`
        }

        function addRowToTeachersTable (teacher) 
        {
            document.getElementById("teachersTable").innerHTML += `<tr>
                                                                    <td>${teacher.id}</td>
                                                                    <td>${teacher.name}</td>
                                                                    <td>${teacher.username}</td>
                                                                    <td>${teacher.password}</td>
                                                                    <td>${teacher.gender}</td>
                                                                    <td>${teacher.branch}</td>
                                                                </tr>`
        }

        function addRowToStudentsList (student) 
        {
            var name = `${student.name}`;
            if (`${student.progress}` == 100 )
            {
                document.getElementById("studentsList").innerHTML += `<tr>
                                                                    <td>${student.name}</td>
                                                                    <td>Pass</td>
                                                                    <td><button onclick = "generateCertificate(name)">&#x1f5b6</button></td>
                                                                </tr>`

            }
            else
            {
                document.getElementById("studentsList").innerHTML += `<tr>
                                                                    <td>${student.name}</td>
                                                                    <td>Fail</td>
                                                                    <td><button disabled style='cursor: not-allowed'>&#x1f5b6</button></td>
                                                                </tr>`  
            }
        }

        function generateCertificate()
        {
            window.open("http://localhost/Intern/COURSESAPP/mpdf/certify.php?q=Mittal&r=Course 2", '_blank');
        }

        function getCourses()
        {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() 
            {
                if(this.readyState == 4 && this.status == 200)
                {
                    let response = JSON.parse(this.responseText);
                    if(response.status == "success")
                    {
                        for(let i = 0; i < response.courses.length; i++)
                        {
                            addRowToCoursesTable(response.courses[i]);
                        }
                    }
                }
            };
            
            xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/courses.php?query=getAllCoursesForAdmin",true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send();            
        }

        function getTeachers()
        {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() 
            {
                if(this.readyState == 4 && this.status == 200)
                {
                    let response = JSON.parse(this.responseText);
                    if(response.status == "success")
                    {
                        for(let i = 0; i < response.teachers.length; i++)
                        {
                            teachersMap.set(parseInt(response.teachers[i].id), response.teachers[i].name);
                            addRowToTeachersTable(response.teachers[i]);
                        }
                        getCourses();
                        console.log(teachersMap);
                    }
                }
            };
            
            xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/users.php?query=getAllTeachers",true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send();            
        }

        function getStudents()
        {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() 
            {
                if(this.readyState == 4 && this.status == 200)
                {
                    let response = JSON.parse(this.responseText);
                    if(response.status == "success")
                    {
                        for(let i = 0; i < response.students.length; i++)
                        {
                            addRowToStudentsTable(response.students[i]);
                        }
                    }
                }
            };
            
            xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/users.php?query=getAllStudents",true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send();            
        }

        function createCourse()
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
                        addRowToCoursesTable({
                            id: response.newId,
                            cname: document.getElementById("name").value,
                            cstartDate: document.getElementById("startDate").value,
                            cendDate: document.getElementById("endDate").value,
                            teacher_id: "No Teacher Yet"
                        });
                        alert("Course Created");
                    }
                    else
                    {
                        alert("Error");
                    }

                }
            };
            
            xhttp.open("POST","http://localhost/Intern/COURSESAPP/scripts/courses.php",true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(JSON.stringify({
                query: "createCourse",
                name: document.getElementById("name").value,
                startDate: document.getElementById("startDate").value,
                endDate: document.getElementById("endDate").value
            }));
        }

        function createTeacher()
        {

            var gender;
            if(document.getElementsByName("gender")[0].checked)
                gender = "Male";
            else
                gender = "Female";
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status ==200)
                {
                    console.log(this.responseText);
                    let response = JSON.parse(this.responseText);
                    if(response.status == "success")
                    {
                        teachersMap.set(parseInt(response.newId), document.getElementById("signup-name").value);
                        addRowToTeachersTable({
                            id: response.newId,
                            name: document.getElementById("signup-name").value,
                            email: document.getElementById("signup-email").value,
                            username:document.getElementById("signup-username").value,
                            password:document.getElementById("signup-password").value,
                            gender:gender,
                            branch:document.getElementById('branch').value                        
                        });
                        alert("Teacher Created");
                    }
                    else
                    {
                        alert("Invalid Username/password");
                    }
                }
            };
            
            xhttp.open("POST","http://localhost/Intern/COURSESAPP/scripts/users.php",true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(JSON.stringify({
                query: "signup",
                username:document.getElementById("signup-username").value,
                password:document.getElementById("signup-password").value,
                name: document.getElementById("signup-name").value,
                email: document.getElementById("signup-email").value,
                gender:gender,
                branch:document.getElementById('branch').value,
                type:"teacher"
            }));            
        }

        function assignTeacher() 
        {
            let teacherId = document.getElementById("teacherId").value;
            let courseId = document.getElementById("courseId").value;
           var xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function() 
           {
               if(this.readyState == 4 && this.status == 200)
               {
                   let response = JSON.parse(this.responseText);
                   if(response.status == "success")
                   {
                       document.getElementById(courseId + "-teacher").innerHTML = teachersMap.get(parseInt(teacherId));

                       alert("Teacher assigned");
                   }
                   else
                   {
                    alert("Error");
                   }
               }
           };
           xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/users.php?query=teachCourse&teacherId=" + teacherId + "&courseId=" + courseId,true);
           xhttp.setRequestHeader("Content-Type", "application/json");
           xhttp.send(); 
        }

        function studentsInCourse(courseId)
        {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() 
            {
                if(this.readyState == 4 && this.status == 200)
                {
                    let response = JSON.parse(this.responseText);
                    if(response.status == "success")
                    {
                        document.getElementById("studentsList").innerHTML = "";
                        for(let i = 0; i < response.students.length; i++)
                        {
                            addRowToStudentsList(response.students[i]);
                        }
                    }
                    else
                    {
                        document.getElementById("studentsList").innerHTML = "";
                        document.getElementById("studentsList").innerHTML = "No Students Enrolled";
                    }
                }
            };
            
            xhttp.open("GET","http://localhost/Intern/COURSESAPP/scripts/users.php?query=getAllStudentsInCourse&courseId=" + courseId,true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send();
        }

        //Executing the code once the page loads
        
        getTeachers();
        getStudents();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative.js"></script>

<br>
