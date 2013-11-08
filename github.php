<?php
header('Access-Control-Allow-Origin: *');

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
	function objectToArray($d) {
		if (is_object($d)) {
			// Gets the properties of the given object
			// with get_object_vars function
			$d = get_object_vars($d);
		}

		if (is_array($d)) {
			/*
			* Return array converted to object
			* Using __FUNCTION__ (Magic constant)
			* for recursive call
			*/
			return array_map(__FUNCTION__, $d);
		}
		else {
			// Return array
			return $d;
		}
	}

	function get_content_from_github($url) {
	  $content = file_get_contents($url);
	  return $content;
	}

	$github = get_content_from_github("https://api.github.com/users/Jamesking56");

	$github = objectToArray(json_decode($github));

	if($github['hireable'] == true)
	{
		echo 'I am currently <span class="label label-success">Available</span> for hire.';
	}
	else
	{
		echo 'I am currently <span class="label label-danger">Unavailable</span> for hire.';
	}
	exit;
}
else
{
	header('Location: index.php');
}