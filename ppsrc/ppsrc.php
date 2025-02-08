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
	$data=json_encode(fetchall());
	echo $data;

?>