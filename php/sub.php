<?php
	header('content-type:text/html;charset=utf-8');
	$data=file_get_contents("http://m.maizuo.com/v4/api/cinema");
	echo json_encode($data)
?>