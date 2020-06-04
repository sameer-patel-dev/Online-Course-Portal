<?php

require("../models/course.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	// takes raw data from the request
	$json = file_get_contents('php://input');

	// converts it into a PHP object
	$data = json_decode($json);

	if($data->query == "createCourse")
	{
		$lastId = Course::createCourse($data->name, $data->startDate,$data->endDate);
		if($lastId != -1)
		{
			echo json_encode(["status"=> "success", "newId"=>$lastId]);
		}

		else
		{
			echo json_encode(["status"=> "failure"]);
		}
	}
	else
	{
		echo json_encode(["status"=> "failure", "message"=>"canot find query"]);
	}
}

else
{
	if($_GET['query'] == "getAllCourses")
	{
		$courses = Course::getAllCourses();
		if($courses)
		{
			echo json_encode(["status"=>"success", "courses"=> $courses]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "getAllCoursesForAdmin")
	{
		$courses = Course::getAllCoursesForAdmin();
		if($courses)
		{
			echo json_encode(["status"=>"success", "courses"=> $courses]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "getCoursesByTeacher")
	{
		$c = Course::getCoursesByTeacher($_GET["teacherId"]);
		if($c)
		{
			echo json_encode(["status"=>"success", "courses"=> $c]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}


	else if($_GET['query'] == "getStudentsInCourse")
	{
		$students = Course::getStudentsInCourse($_GET["courseId"]);
		if($students)
		{
			echo json_encode(["status"=>"success", "students"=> $students]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "getQuizInCourse")
	{
		$quiz = Course::getQuizInCourse($_GET["courseId"]);
		if($quiz)
		{
			echo json_encode(["status"=>"success", "quiz"=> $quiz]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "getVideoInCourse")
	{
		$video = Course::getVideoInCourse($_GET["courseId"]);
		if($video)
		{
			echo json_encode(["status"=>"success", "video"=> $video]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "getResourceForStudent")
	{
		$resource = Course::getResourceForStudent($_GET["videoId"]);
		if($resource)
		{
			echo json_encode(["status"=>"success", "resource"=> $resource]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "openResource")
	{
		$resource = Course::openResource($_GET["resourceId"]);
		if($resource)
		{
			session_start();
			$_SESSION['resourceName'] = $resource[0]['actualResourceName'];
			echo json_encode(["status"=>"success", "resource"=> $resource]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "getResource")
	{
		$resource = Course::getResource($_GET["courseId"]);
		if($resource)
		{
			echo json_encode(["status"=>"success", "resource"=> $resource]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "createQuiz")
	{
		$lastId = Course::createQuiz($_GET["quizName"], $_GET["course_id"]);
		if($lastId != -1)
		{
			$_SESSION['quiz_id'] = $lastId;
			echo json_encode(["status"=>"success", "$lastId"=> $lastId]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "nextQuestion")
	{
		$lastId = Course::nextQuestion($_GET["question"], $_GET["option1"], $_GET["option2"], $_GET["option3"], $_GET["option4"], $_GET["correctOption"]);
		if($lastId != -1)
		{
			echo json_encode(["status"=>"success", "$lastId"=> $lastId]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "watchCourse")
	{
		$watchCourse = Course::watchCourse($_GET["courseId"]);
		if($watchCourse)
		{
			echo json_encode(["status"=>"success", "watchCourse"=> $watchCourse]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "displayQuizToStudent")
	{
		$displayQuiz = Course::displayQuizToStudent($_GET["quizId"]);
		if($displayQuiz)
		{
			echo json_encode(["status"=>"success", "displayQuiz"=> $displayQuiz]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "displayVideoToStudent")
	{
		$displayVideo = Course::displayVideoToStudent($_GET["videoId"]);
		if($displayVideo)
		{
			echo json_encode(["status"=>"success", "displayVideo"=> $displayVideo]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "uploadVideo")
	{
		$displayVideo = Course::uploadVideo($_GET["displayVideoName"], $_GET["course_id_forVideo"]);
		if($displayVideo)
		{
			echo json_encode(["status"=>"success", "displayVideo"=> $displayVideo]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "uploadResource")
	{
		$uploadResource = Course::uploadResource($_GET["displayResourceName"], $_GET["videoId"]);
		if($uploadResource)
		{
			echo json_encode(["status"=>"success", "uploadResource"=> $uploadResource]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "viewProgress")
	{
		$viewProgress = Course::viewProgress($_GET["studentId"], $_GET["courseId"]);
		if($viewProgress)
		{
			echo json_encode(["status"=>"success", "viewProgress"=> $viewProgress]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "viewQuiz")
	{
		$viewQuiz = Course::viewQuiz($_GET["quizId"]);
		if($viewQuiz)
		{
			echo json_encode(["status"=>"success", "viewQuiz"=> $viewQuiz]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

	else if($_GET['query'] == "viewQuizByTeacher")
	{
		$viewQuizByTeacher = Course::viewQuizByTeacher($_GET["quizId"]);
		if($viewQuizByTeacher)
		{
			echo json_encode(["status"=>"success", "viewQuizByTeacher"=> $viewQuizByTeacher]);
		}
		else
		{
			echo json_encode(["status"=>"failure"]);
		}
	}

}


?>