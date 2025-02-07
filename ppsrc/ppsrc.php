<?php
	function connect() {
		$mysql=new mysqli("localhost", "root", "", "bazoor.uz");
		return $mysql;
	}
	function fetchall(){
		$sql=connect();
		$result = $sql->query("SELECT * FROM `products`");
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}
	$data = json_encode(fetchall());
	echo $data;

?>