<?php
 require("connection.php");
 
class Course
{
	static function createCourse($name, $startDate, $endDate)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("INSERT INTO courses (cname, cstartDate, cendDate) VALUES ('$name', '$startDate', '$endDate')");
		$lastId = -1;
		if($result)
		{
			$lastId = $conn->getLastInsertedId();
		}
		$conn->closeConnection();
		return $lastId;
	}

	static function getAllCourses()
	{
		$conn = new Connection();
		$conn->createConnection();
		$today = date('Y-m-d');
		$result = $conn->executeQuery("SELECT * FROM courses WHERE cendDate > '$today'");
		$courses = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $courses;
	}

	static function getAllCoursesForAdmin()
	{
		$conn = new Connection();
		$conn->createConnection();
		$result = $conn->executeQuery("SELECT * FROM courses");
		$courses = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $courses;
	}


	static function getCoursesByTeacher($teacherId)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM courses WHERE teacher_id = $teacherId");
		$courses = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $courses;
	}

	static function getStudentsInCourse($courseId)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM users INNER JOIN student_course ON users.id = student_id WHERE course_id = $courseId");
		$students = mysqli_fetch_all($result , MYSQLI_ASSOC);

		return $students;
	}

	static function getQuizInCourse($courseId)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM quiz WHERE course_id = $courseId");
		$quiz = mysqli_fetch_all($result , MYSQLI_ASSOC);

		return $quiz;
	}

	static function getVideoInCourse($courseId)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM video WHERE course_id = $courseId");
		$video = mysqli_fetch_all($result , MYSQLI_ASSOC);

		return $video;
	}

	static function getResource($courseId)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM resource INNER JOIN video ON video.id = resource.video_id WHERE video.course_id = $courseId");
		$resource = mysqli_fetch_all($result , MYSQLI_ASSOC);

		return $resource;
	}

	static function getResourceForStudent($videoId)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM resource WHERE video_id = $videoId");
		$resource = mysqli_fetch_all($result , MYSQLI_ASSOC);

		return $resource;
	}

	static function openResource($resourceId)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM resource WHERE id = $resourceId");
		$resource = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $resource;
	}

	static function createQuiz($quizName, $course_id)
	{
		$conn = new Connection();
		$conn->createConnection();

		session_start();
		$teacherId = $_SESSION['id'];

		$precheck = $conn->executeQuery("SELECT * FROM courses WHERE id = $course_id AND teacher_id = $teacherId");
		$watchCourse = mysqli_fetch_all($precheck , MYSQLI_ASSOC);
		if($watchCourse)
		{
			$result = $conn->executeQuery("INSERT into quiz (quizName, teacher_id, course_id) VALUES ('$quizName', '$teacherId', '$course_id')");
			$lastId = -1;
			if($result)
			{
				$lastId = $conn->getLastInsertedId();
			}
			$conn->closeConnection();
			return $lastId;
		}
		else
			return -1;
	}

	static function nextQuestion($question, $option1, $option2, $option3, $option4, $correctOption)
	{
		$conn = new Connection();
		$conn->createConnection();

		session_start();
		$quiz_id = $_SESSION['quiz_id'];

		$result = $conn->executeQuery("INSERT into questions (quiz_id, question, option1, option2, option3, option4, correctOption) VALUES ($quiz_id, '$question', '$option1', '$option2', '$option3', '$option4', '$correctOption')");
		$lastId = -1;
		if($result)
		{
			$lastId = $conn->getLastInsertedId();
		}
		$conn->closeConnection();
		return $lastId;
	}

	static function watchCourse($courseId)
	{
		$conn = new Connection();
		$conn->createConnection();

		session_start();
		$_SESSION['course_id'] = $courseId;

		$result = $conn->executeQuery("SELECT * FROM courses WHERE id = $courseId");
		$watchCourse = mysqli_fetch_all($result , MYSQLI_ASSOC);

		return $watchCourse;
	}

	static function displayQuizToStudent($quizId)
	{
		$conn = new Connection();
		$conn->createConnection();

		session_start();
		$_SESSION['quiz_id'] = $quizId;
		$studentId = $_SESSION['id'];
		$precheck = $conn->executeQuery("SELECT * FROM score WHERE quiz_id = $quizId AND student_id = $studentId");
		$precheckOutput = mysqli_fetch_object($precheck);

		if(!$precheckOutput)
		{	
			$result = $conn->executeQuery("SELECT * FROM questions WHERE quiz_id = $quizId");
			$displayQuiz = mysqli_fetch_all($result , MYSQLI_ASSOC);
			return $displayQuiz;
		}
		else
			return null;		
	}

	static function displayVideoToStudent($videoId)
	{
		$conn = new Connection();
		$conn->createConnection();

		$result = $conn->executeQuery("SELECT * FROM video WHERE id = $videoId");
		$displayVideo = mysqli_fetch_all($result , MYSQLI_ASSOC);

		return $displayVideo;
	}

	static function uploadVideo($displayVideoName, $course_id_forVideo)
	{
		$conn = new Connection();
		$conn->createConnection();
		
		session_start();
		$_SESSION['displayVideoName'] = $displayVideoName;
		$_SESSION['course_id_forVideo'] = $course_id_forVideo;
		$teacherId = $_SESSION['id'];

		$result = $conn->executeQuery("SELECT * FROM courses WHERE id = $course_id_forVideo AND teacher_id = $teacherId");
		$watchCourse = mysqli_fetch_all($result , MYSQLI_ASSOC);

		return $watchCourse;
	}

	static function uploadResource($displayResourceName, $videoId)
	{
		$conn = new Connection();
		$conn->createConnection();
		
		session_start();
		$_SESSION['video_id'] = $videoId;
		$_SESSION['displayResourceName'] = $displayResourceName;
		$teacherId = $_SESSION['id'];

		$result = $conn->executeQuery("SELECT * FROM courses INNER JOIN video ON courses.id = video.course_id WHERE courses.teacher_id = $teacherId AND video.id = $videoId");
		$uploadResource = mysqli_fetch_object($result);

		return $uploadResource;
	}

	static function viewProgress($studentId, $courseId)
	{
		$conn = new Connection();
		$conn->createConnection();
		$result = $conn->executeQuery("SELECT * FROM score INNER JOIN quiz ON quiz.id = score.quiz_id WHERE score.student_id = $studentId AND quiz.course_id = $courseId");
		$viewProgress = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $viewProgress;
	}

	static function viewQuiz($quizId)
	{
		$conn = new Connection();
		$conn->createConnection();

		session_start();
		$_SESSION['quiz_id'] = $quizId;
		$studentId = $_SESSION['id'];
		$precheck = $conn->executeQuery("SELECT * FROM score WHERE quiz_id = $quizId AND student_id = $studentId");
		$precheckOutput = mysqli_fetch_object($precheck);

		return $precheckOutput;		
	}

	static function viewQuizByTeacher($quizId)
	{
		$conn = new Connection();
		$conn->createConnection();

		session_start();
		$_SESSION['quiz_id'] = $quizId;
		$precheck = $conn->executeQuery("SELECT * FROM quiz WHERE id = $quizId");
		$precheckOutput = mysqli_fetch_object($precheck);

		return $precheckOutput;		
	}
}



?>