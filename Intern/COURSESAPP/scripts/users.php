<?php

require("../models/user.php");
require '../PHPMailer/class.phpmailer.php';
require '../PHPMailer/class.smtp.php';
require '../PHPMailer/PHPMailerAutoload.php';
session_start();


if($_SERVER['REQUEST_METHOD'] == "POST")
{
	// takes raw data from the request
	$json = file_get_contents('php://input');

	// converts it into a PHP object
	$data = json_decode($json);

	if($data->query == "signup")
	{
		$newId = User::signup($data->name, $data->username, $data->password,  $data->email, $data->gender, $data->branch, $data->type);
		if($newId != -1)
		{
			echo json_encode(["status"=> "success","newId"=>$newId]);
		}
		else
		{
			echo json_encode(["status"=> "failure"]);		
		}
	}



	else if($data->query == "login")
	{
		$user = User::login($data->username, $data->password);
		if($user != null)
		{
			$_SESSION['id'] = $user->id;
			$_SESSION['type'] = $user->type;
			echo json_encode(["status"=> "success","user"=>$user]);
		}
		else
		{
			echo json_encode(["status"=> "failure is hard"]);
		}
	}



	else if ($data->query == "mailSpecificStudent") 
	{
		$user = User::mailSpecificStudent($data->email, $data->subject, $data->body);
		if($user != null)
		{
			$mail = new PHPMailer;
			$mail->setFrom('Online Portal');
			$mail->addAddress($data->email);
			$mail->Subject = $data->subject;
			$mail->Body = "\n".$data->body;
			$mail->IsSMTP();
			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'ssl://smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Port = 465;

			//Sender's mail and pass
			$mail->Username = 'kjsce.2019@gmail.com';
			$mail->Password = 'Kjsce065';

			$mail->send(); 
			
			echo json_encode(["status"=> "success","user"=>$user]);
		}
		else
		{
			echo json_encode(["status"=> "failure is hard"]);
		}
	}



	else if ($data->query == "mailAllStudent") 
	{
		$user = User::mailAllStudent($data->subject, $data->body);
		if($user != null)
		{
			$mail = new PHPMailer;
			$mail->setFrom('Online Portal');
			for ($i = 0; $i < sizeof($user); $i++) 
			{ 
				$mail->addAddress($user[$i]['email']);				
			}			
			$mail->Subject = $data->subject;
			$mail->Body = "\n".$data->body;
			$mail->IsSMTP();
			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'ssl://smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Port = 465;
			
			//Sender's mail and pass
			$mail->Username = 'kjsce.2019@gmail.com';
			$mail->Password = 'Kjsce065';

			$mail->send(); 
			
			echo json_encode(["status"=> "success","user"=>$user]);
		}

		else
		{
			echo json_encode(["status"=> "failure is hard"]);
		}
	}



	else if ($data->query == "mailAllStudentOfSpecificCourse") 
	{
		$user = User::mailAllStudentOfSpecificCourse($data->course_name, $data->subject, $data->body);
		if($user != null)
		{
			$mail = new PHPMailer;
			$mail->setFrom('Online Portal');
			for ($i = 0; $i < sizeof($user); $i++) 
			{ 
				$mail->addAddress($user[$i]['email']);				
			}			
			$mail->Subject = $data->subject;
			$mail->Body = "\n".$data->body;
			$mail->IsSMTP();
			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'ssl://smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Port = 465;
			
			//Sender's mail and pass
			$mail->Username = 'kjsce.2019@gmail.com';
			$mail->Password = 'Kjsce065';

			$mail->send(); 
			
			echo json_encode(["status"=> "success","user"=>$user]);
		}
		else
		{
			echo json_encode(["status"=> "failure is hard"]);
		}
	}



	else if ($data->query == "mailSpecificTeacher") 
	{
		$user = User::mailSpecificTeacher($data->email, $data->subject, $data->body);
		if($user != null)
		{
			$mail = new PHPMailer;
			$mail->setFrom('Online Portal');
			$mail->addAddress($data->email);
			$mail->Subject = $data->subject;
			$mail->Body = "\n".$data->body;
			$mail->IsSMTP();
			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'ssl://smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Port = 465;

			//Sender's mail and pass
			$mail->Username = 'kjsce.2019@gmail.com';
			$mail->Password = 'Kjsce065';

			$mail->send(); 
			
			echo json_encode(["status"=> "success","user"=>$user]);
		}
		else
		{
			echo json_encode(["status"=> "failure is hard"]);
		}
	}



	else if ($data->query == "mailAllTeacher") 
	{
		$user = User::mailAllTeacher($data->subject, $data->body);
		if($user != null)
		{
			$mail = new PHPMailer;
			$mail->setFrom('Online Portal');
			for ($i = 0; $i < sizeof($user); $i++) 
			{ 
				$mail->addAddress($user[$i]['email']);				
			}			
			$mail->Subject = $data->subject;
			$mail->Body = "\n".$data->body;
			$mail->IsSMTP();
			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'ssl://smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Port = 465;
			
			//Sender's mail and pass
			$mail->Username = 'kjsce.2019@gmail.com';
			$mail->Password = 'Kjsce065';

			$mail->send(); 
			
			echo json_encode(["status"=> "success","user"=>$user]);
		}

		else
		{
			echo json_encode(["status"=> "failure is hard"]);
		}
	}




	else if ($data->query == "mailSpecificStudentByTeacher") 
	{
		$user = User::mailSpecificStudentByTeacher($data->email, $data->subject, $data->body);
		if($user != null)
		{
			$mail = new PHPMailer;
			$mail->setFrom('Online Portal');
			$mail->addAddress($data->email);
			$mail->Subject = $data->subject;
			$mail->Body = "\n".$data->body;
			$mail->IsSMTP();
			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'ssl://smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Port = 465;

			//Sender's mail and pass
			$mail->Username = 'kjsce.2019@gmail.com';
			$mail->Password = 'Kjsce065';

			$mail->send(); 
			
			echo json_encode(["status"=> "success","user"=>$user]);
		}
		else
		{
			echo json_encode(["status"=> "failure is hard"]);
		}
	}



	else if ($data->query == "mailAllStudentByTeacher") 
	{
		$user = User::mailAllStudentByTeacher($data->subject, $data->body);
		if($user != null)
		{
			$mail = new PHPMailer;
			$mail->setFrom('Online Portal');
			for ($i = 0; $i < sizeof($user); $i++) 
			{ 
				$mail->addAddress($user[$i]['email']);				
			}			
			$mail->Subject = $data->subject;
			$mail->Body = "\n".$data->body;
			$mail->IsSMTP();
			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'ssl://smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Port = 465;
			
			//Sender's mail and pass
			$mail->Username = 'kjsce.2019@gmail.com';
			$mail->Password = 'Kjsce065';

			$mail->send(); 
			
			echo json_encode(["status"=> "success","user"=>$user]);
		}

		else
		{
			echo json_encode(["status"=> "failure is hard"]);
		}
	}



	else if ($data->query == "mailAllStudentOfSpecificCourseByTeacher") 
	{
		$user = User::mailAllStudentOfSpecificCourseByTeacher($data->course_name, $data->subject, $data->body);
		if($user != null)
		{
			$mail = new PHPMailer;
			$mail->setFrom('Online Portal');
			for ($i = 0; $i < sizeof($user); $i++) 
			{ 
				$mail->addAddress($user[$i]['email']);				
			}			
			$mail->Subject = $data->subject;
			$mail->Body = "\n".$data->body;
			$mail->IsSMTP();
			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'ssl://smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Port = 465;
			
			//Sender's mail and pass
			$mail->Username = 'kjsce.2019@gmail.com';
			$mail->Password = 'Kjsce065';

			$mail->send(); 
			
			echo json_encode(["status"=> "success","user"=>$user]);
		}
		else
		{
			echo json_encode(["status"=> "failure is hard"]);
		}
	}



	else
	{
		echo json_encode(["status"=> "failure", "message"=>"cannot find query!"]);
	}

}

else
{
	if($_GET['query'] == "joinCourse")
	{
		if(User::joinCourse($_GET['studentId'], $_GET['courseId']))
		{
			echo json_encode(["status"=> "success"]);	
		}

		else
		{
			echo json_encode(["status"=> "failure"]);
		}
	}


	else if($_GET['query'] == "leaveCourse")
	{
		if(User::leaveCourse($_GET['studentId'], $_GET['courseId']))
		{
			echo json_encode(["status"=> "success"]);	
		}

		else
		{
			echo json_encode(["status"=> "failure"]);
		}
	}


	else if($_GET['query'] == "getJoinedCourses")
	{
		$courses = User::getJoinedCourses($_GET['studentId']); 
		if($courses)
		{
			echo json_encode(["status"=> "success", "courses"=> $courses]);	
		}

		else
		{
			echo json_encode(["status"=> "failure"]);
		}
	}


	else if($_GET['query'] == "teachCourse")
	{
		User::teachCourse($_GET['teacherId'], $_GET['courseId']);
		if(User::teachCourse($_GET['teacherId'], $_GET['courseId']))
		{
			echo json_encode(["status"=> "success"]);
		}
		 
		else
		{
			echo json_encode(["status"=> "failure"]);
		}
	}


	else if($_GET['query'] == "getAllTeachers")
	{
		$teachers = User::getAllTeachers();
		if($teachers)
		{
			echo json_encode(["status"=> "success", "teachers"=>$teachers]);
		}
		 
		else
		{
			echo json_encode(["status"=> "failure"]);
		}
	}	


	else if($_GET['query'] == "getAllStudents")
	{
		$students = User::getAllStudents();
		if($students)
		{
			echo json_encode(["status"=> "success", "students"=>$students]);
		}
		 
		else
		{
			echo json_encode(["status"=> "failure"]);
		}
	}	

	else if($_GET['query'] == "getAllStudentsInCourse")
	{
		$students = User::getAllStudentsInCourse($_GET['courseId']);
		if($students)
		{
			echo json_encode(["status"=> "success", "students"=>$students]);
		}
		 
		else
		{
			echo json_encode(["status"=> "failure"]);
		}
	}
	
}
 
?> 

