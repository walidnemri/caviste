<?php
if(empty($_REQUEST['id']) || empty(trim($_REQUEST['data']))) {
	header("HTTP/1.0 400 Bad Request");
	die();
}

$vins = json_decode(file_get_contents('data.json'),true);
?>
