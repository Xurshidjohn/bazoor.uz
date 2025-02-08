<?php
	function connect() {
		$mysql=new mysqli("localhost", "root", "", "bazoor.uz");
		return $mysql;
	}
	function fetchall(){
		$sql=connect();
		$result=$sql->query("SELECT * FROM `products`");
		while($row=mysqli_fetch_assoc($result)) {
			$data[]=$row;
		}
		return $data;
	}

	function getById($id) {
		$sql=connect();
		$result=$sql->query("SELECT * FROM `products` WHERE `pr_id` = '$id'");
		$data=mysqli_fetch_assoc($result);
		return $data;
	}

	function getSearchDatas($search_field) {
		$sql=connect();
		$result = $sql->query("SELECT * FROM `products` WHERE `pr_title` LIKE '$search_field%'");
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}

		echo json_encode($data);
	}
?>