<?php

	include("ppsrcfunc.php");
	if(isset($_POST['search'])){
		$search_field = $_POST['search'];
		getSearchDatas($search_field);
	}
?>