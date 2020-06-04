<?php

require("connection.php");

class User
{
	static function signup($name, $username, $password, $email, $gender, $branch, $type)
	{
		$conn = new Connection();
		$conn->createConnection();

		$lastId = -1;

		$check = $conn->executeQuery("SELECT * FROM users WHERE username = '$username' OR email = '$email'");

		if(mysqli_num_rows($check) == 0)
		{
			$result = $conn->executeQuery("INSERT INTO users(name, username, password, email, gender, branch, type) VALUES ('$name','$username','$password','$email', '$gender', '$branch', '$type')");
			if($result)
			{
				$lastId = $conn->getLastInsertedId();
			}
		}
		
		$conn->closeConnection();
		return $lastId;
	}

	static function login($username, $password)
	{
		$conn = new Connection();
		$conn->createConnection();
		
		$result = $conn->executeQuery("SELECT * FROM users WHERE username = '$username' OR email = '$username'");
		$user = mysqli_fetch_object($result);
		
		if($password == $user->password)
		{
			return $user;
		}
		$conn->closeConnection();
		return null;
	}

	static function mailSpecificStudent($email, $subject, $body)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM users WHERE email= '$email'");
		$student = mysqli_fetch_object($result);
		return $student;
	}

	static function mailAllStudent($subject, $body)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM users WHERE type= 'student'");
		$student = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $student;
	}

	static function mailAllStudentOfSpecificCourse($course_name, $subject, $body)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM users INNER JOIN student_course ON users.id = student_course.student_id INNER JOIN courses ON student_course.course_id = courses.id WHERE users.type = 'student' AND courses.cname = '$course_name'");
		$student = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $student;
	}

	static function mailSpecificTeacher($email, $subject, $body)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM users WHERE email= '$email'");
		$teacher = mysqli_fetch_object($result);
		return $teacher;
	}

	static function mailAllTeacher($subject, $body)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM users WHERE type= 'teacher'");
		$teacher = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $teacher;
	}

	static function mailSpecificStudentByTeacher($email, $subject, $body)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM users WHERE email= '$email'");
		$student = mysqli_fetch_object($result);
		return $student;
	}

	static function mailAllStudentByTeacher($subject, $body)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM users WHERE type= 'student'");
		$student = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $student;
	}

	static function mailAllStudentOfSpecificCourseByTeacher($course_name, $subject, $body)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM users INNER JOIN student_course ON users.id = student_course.student_id INNER JOIN courses ON student_course.course_id = courses.id WHERE users.type = 'student' AND courses.cname = '$course_name'");
		$student = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $student;
	}


	static function joinCourse($studentId, $courseId)
	{
		$conn = new Connection();
		$conn->createConnection();
		return $conn-> executeQuery("INSERT INTO student_course(student_id,course_id) VALUES ($studentId, $courseId)");

	}

	static function leaveCourse($studentId, $courseId)
	{
		$conn = new Connection();
		$conn->createConnection();
		return $conn->executeQuery("DELETE FROM student_course WHERE student_id = $studentId AND course_id= $courseId");

	}

	static function getJoinedCourses($studentId)
	{
		$conn = new Connection();
		$conn->createConnection();
		$today = date('Y-m-d');

		$result1 = $conn->executeQuery("SELECT * FROM users INNER JOIN student_course ON users.id = student_course.student_id
			INNER JOIN courses ON student_course.course_id = courses.id WHERE users.id = $studentId AND courses.cendDate > '$today'");
		if(mysqli_num_rows($result1))
		{
			while ($course = mysqli_fetch_array($result1)) 
			{
				$progress = 0;
				$attemptedQuiz = 0;
				$precheck1 = $conn->executeQuery("SELECT * FROM quiz WHERE course_id = {$course['course_id']}");
				if(mysqli_num_rows($precheck1))
				{
					$totalQuiz = mysqli_num_rows($precheck1);
					while($quiz_id = mysqli_fetch_array($precheck1))
					{
						$precheck2 = $conn->executeQuery("SELECT * FROM score WHERE student_id = $studentId AND quiz_id = {$quiz_id['id']}");
						if(mysqli_num_rows($precheck2))
						{
							$attemptedQuiz++;
						}
					}
					$progress = round((($attemptedQuiz*100)/$totalQuiz),2);
				}
				$result = $conn->executeQuery("UPDATE student_course SET progress = '$progress' WHERE student_id = $studentId AND  course_id = {$course['course_id']}");
			}	
		}	

		$resultFinal = $conn->executeQuery("SELECT * FROM users INNER JOIN student_course ON users.id = student_course.student_id
			INNER JOIN courses ON student_course.course_id = courses.id WHERE users.id = $studentId AND courses.cendDate > '$today'");
		$courses = mysqli_fetch_all($resultFinal, MYSQLI_ASSOC);		
		return $courses;
	}

	static function teachCourse($teacherId,$courseId)
	{
		$conn = new Connection();
		$conn->createConnection();
		return $conn->executeQuery("UPDATE courses SET teacher_id = $teacherId WHERE id = $courseId");

	}

	static function getAllTeachers()
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM users WHERE type= 'teacher'");
		$teachers = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $teachers;
	}

	static function getAllStudents()
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM users WHERE type= 'student'");
		$students = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $students;

	}

	static function getAllStudentsInCourse($courseId)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM student_course INNER JOIN users ON student_course.student_id = users.id WHERE student_course.course_id = '$courseId'");
		$students = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $students;

	}
}

?>

