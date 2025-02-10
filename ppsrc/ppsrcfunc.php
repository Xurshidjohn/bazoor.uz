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

	function fetchMessages($id)
	{
		$sql = connect();
		$result = $sql->query("SELECT * FROM `messages` WHERE `msg_post_id` = '$id'");
		$result = mysqli_fetch_assoc($result);
		return $result;
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

	function get_User_by_Token($token) {
		$sql = connect();
		$result = $sql->query("SELECT * FROM `products` WHERE `pr_token` = '22ejii2ilkn2n2m2222131jnj2n2n2n1101';");
		while($row = mysqli_fetch_assoc($result)) {
			$data = $row;
		}

		return $data;
	}

?>