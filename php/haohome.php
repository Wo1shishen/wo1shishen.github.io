<?php
	header('content-type:text/html;charset=utf-8');
     $is_json=isset($_GET['is_json'])?$_GET['is_json']:1;
     $page=isset($_GET['page'])?$_GET['page']:1;
	$data=file_get_contents("http://m.haozaishop.com/v2/h5/index/home?is_json={$is_json}&page={$page}");
	echo $data;
?>