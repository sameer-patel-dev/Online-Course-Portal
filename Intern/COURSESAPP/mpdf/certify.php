<?php
session_start();
include ('vendor/autoload.php');
$mpdf=new \Mpdf\Mpdf();
$name=$_GET['q'];
$course=$_GET['r'];

$html='
<html >
<head>
<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	
<style type="text/css">
section{
	padding-top:40px;
}
body{
	margin-top:80px;
		
}

	#logo{
		
		margin-left: 410px;
		border:groove;
		border-radius:20px;		
		width: 12%;

	}
	.tab{
		margin-top:40px;
		border: ridge;
		border-radius: 3px;
		border-width: 2px;
		margin-left: auto;
		margin-right: auto;

		}
	.tab td{
			
			padding: 10px;
		}
		.main{
			font-family: "Great Vibes";
		}

</style>

</head>
<body style="background-image:url(C:\xampp\htdocs\Intern\COURSESAPP\mpdf\bgtemp.png); background-image-resize:4;">
	
		
		
	<img src="C:\xampp\htdocs\Intern\COURSESAPP\mpdf\logo.jpg" style="width:150px;padding-left:47%;">

	<div class="main" style="font-size: 18px; text-align:center ;margin-left:40px;margin-right:40px; padding-top:25px ;">
	<center><h3 style:"font-size: 18px; text-align:center ;margin-left:40px;margin-right:40px; padding-top:15px ">K.J Somaiya College Of Engineering</h3></center>
		<div style:"font-size:22px">
		<b>Date:</b><span>25th December 2019</span><span style="color:white;">_____________________</span>
		<b>Branch:</b><span>IT</span><span style="color:white;">_____________________</span>
		<b>Semester:</b><span>5</span>
		</div>
		<section style="font:"Great Vibes";">
		This certificate is awarded to Mr/Mrs <b style="font-size: 25px;">'.$name.'</b> for successfully completing the course of <b style="font-size: 15px;">'.$course.'</b> in the session 2019-2020 provided by K.J  Somaiya College Of Engineering
		</section>
	</div>

	<table class="tab">
         <tr>
            <th>Topic Name</th>
            <td>Module1</td>
            <td>Module2</td>
            <td>Module3</td>
            <td>Module4</td>
            <td>Module5</td>
            <td>C.G.P.A</td>
         </tr>       
         <tr>
            <th>Score</th>
            <td>15</td>
            <td>17</td>
            <td>25</td>
            <td>19</td>
            <td>20</td>
            <td>8.7</td>
         </tr>
      </table>
      <div style="margin-right:20px;">Sign:_________________________</div>
</body>
</html>

';
$mpdf->AddPage('L');
$mpdf->writeHTML($html);
$mpdf->output();
?>