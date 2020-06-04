<?php
	session_start();
	$filename = $_SESSION['resourceName'];
	$file = '../uploadedResource/'.$filename;
	$type = explode(".", $filename);
	if($type[1] == pdf)
	{
		header('Content-type: application/pdf');
	}
	else
	{
		header('Content-type: application/ppt');	
	}
	header('Content-Disposition: inline; filename="'.$filename.'"');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: '.filesize($file));
	header('Accept-Ranges: bytes');
	@readfile($file);
?>