<?php
header('Access-Control-Allow-Origin: *');
$accesskey = '155991816ab974d05d9aa663946a2a3d836f1647';

$debug = false;
if(isset($_GET['debug']) && $_GET['debug'] == '1')
	$debug = true;

if((!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') || $debug)
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
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $url,
			CURLOPT_USERAGENT => 'Jamesking56.co.uk Hire Availability Robot',
			CURLOPT_HEADER => array(
				'Authorization: '.$accesskey
			)
		));

		$resp = curl_exec($ch);

		if(!$resp)
		{
			return json_encode(array(
				'hireable' => 'false'
			));
		}
		
		return strstr($resp, '{');
	}

	$github = get_content_from_github("https://api.github.com/users/Jamesking56");

	$github = objectToArray(json_decode($github));

	if($debug)
	{
		echo json_encode($github);
		exit;
	}

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