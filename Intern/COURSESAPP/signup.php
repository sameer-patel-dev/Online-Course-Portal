<html>
    <head>

        <style type="text/css">
            .error{
                color: red;
            }
        </style>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Register</title>
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
        <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
        <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
        <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">

    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="index.php">Online portal</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    
                </div>
            </div>
        </nav>
        <!-- Start: Login Form Dark -->
        <center>
        <div class="login-dark" style="height: 765px;color: #292121; padding: 20px;">
            <div method="post" style="height: 559px;margin: 3px;padding: 50px; width: 400px;">
                <h2 class="text-center" style="margin: 12px;padding: -30px;height: 41px; color: white;">Register</h2>
                <div style="margin: 8px;padding: -33px;height: 454px;"> 

                    <div class="form-group"><input class="form-control" type="text" id="signup-name" placeholder="Name" name="name"/><span id="nameError" class="error"></span></div>

                    <div class="form-group"><input class="form-control" type="text" id="signup-username" placeholder="Username" name="username"/><span id="usernameError" class="error"></span></div>

                    <div class="form-group"><input class="form-control" type="password" id="signup-password" name="password" placeholder="Password"><span id="passwordError" class="error"></span></div>

                    <div class="form-group"><input class="form-control" type="password" id="signup-cpassword" placeholder="ReType Password" name="cpassword" /></div>

                    <div class="form-group"><input class="form-control" type="email" id="signup-email" name="email" placeholder="Email"> <span id="emailError" class="error"></span></div>

                    <div class="form-group">
                        <div class="form-row text-center">
                            <div class="col">
                                <div class="form-check"><input class="form-check-input" type="radio" name="gender" value="Male"><label class="form-check-label" for="formCheck-1">Male</label></div>
                            </div>
                            <div class="col">
                                <div class="form-check"><input class="form-check-input" type="radio" name="gender" value="Female"><label class="form-check-label" for="formCheck-2">Female</label></div>
                            </div>
                            <span id="genderError" class="error"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <select id ="branch" class="border rounded form-control" style="color: black;opacity: 1;">
                            <option value="Information Technology">Information Technology</option>
                            <option value="Computers">Computer Science</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Electronics and Telecom">Electronics and Telecom</option>
                        </select>
                    </div>
                    <span id="branchError" class="error"></span>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit" name="submit" value="Signup" onclick="validate()">Register
                        </button>

                        <a class="forgot" href="login.php">Already a member? Login here!</a>
                    </div>
        </div>
        </div>
        </center>
        <!-- End: Login Form Dark -->
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
    


    <script>

        function validate()
        {
            var nameError = ""; 
            var usernameError = "";
            var passwordError = ""; 
            var emailError = ""; 
            var genderError = ""; 
            var branchError = "";

            var name = document.getElementById("signup-name").value;
            var namePattern = /^\w[\s\w]*$/;

            var username = document.getElementById("signup-username").value;
            var usernamePattern = /^\w[\d\w]*$/;

            var password = document.getElementById("signup-password").value;
            var cpassword = document.getElementById("signup-cpassword").value;
            var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;

            var email = document.getElementById("signup-email").value;
            var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            
            var gender = document.getElementsByName("gender");
            var branch = document.getElementById("branch").value;


            if(name == "" || !namePattern.test(name))
                nameError = "nameError";
            if(username == "" || !usernamePattern.test(username) || username.length < 6)
                usernameError = "usernameError";
            if(password == "" || cpassword == "" || !passwordPattern.test(password) || password != cpassword)
                passwordError = "passwordError";
            if(email == "" || !emailPattern.test(email))
                emailError = "emailError";
            if(gender[0].checked == false && gender[1].checked == false)
                genderError = "select gender";
            if(branch == null)
                branchError = "select branch";
            if(nameError == "" && usernameError == "" && passwordError =="" && emailError =="" && genderError == "" && branchError =="")
            {
                document.getElementById("nameError").innerHTML = "";  
                document.getElementById("usernameError").innerHTML = ""; 
                document.getElementById("passwordError").innerHTML = "";   
                document.getElementById("emailError").innerHTML = "";   
                document.getElementById("genderError").innerHTML = "";  
                document.getElementById("branchError").innerHTML = ""; 
                signup();
            }
            else
            {
                document.getElementById("nameError").innerHTML = nameError;  
                document.getElementById("usernameError").innerHTML = usernameError; 
                document.getElementById("passwordError").innerHTML = passwordError;   
                document.getElementById("emailError").innerHTML = emailError;   
                document.getElementById("genderError").innerHTML = genderError;  
                document.getElementById("branchError").innerHTML = branchError;        
            }
        }

        function signup()
        {
            var gender;
            if(document.getElementsByName("gender")[0].checked)
                gender = "Male";
            else
                gender = "Female";

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() 
            {
                if(this.readyState == 4 && this.status ==200)
                {
                    console.log(this.responseText);
                    let response = JSON.parse(this.responseText);
                    if(response.status == "success")
                    {
                        window.location.href = "./login.php";
                        alert("Registration successful");
                    }
                    else
                    {
                        alert("Some error occured. Try again in some time")       
                    }
                }
            };
            
            xhttp.open("POST","http://localhost/Intern/COURSESAPP/scripts/users.php",true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(JSON.stringify({
                query: "signup",
                name: document.getElementById("signup-name").value,
                username:document.getElementById("signup-username").value,
                password:document.getElementById("signup-password").value,
                email:document.getElementById("signup-email").value,
                gender:gender,
                branch:document.getElementById("branch").value,
                type:"student"
            }));            
        }


    </script>
</html>
