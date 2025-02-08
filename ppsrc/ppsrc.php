<?php

	include("ppsrcfunc.php");
	
	$data=json_encode(fetchall());
	echo $data;
	
?>