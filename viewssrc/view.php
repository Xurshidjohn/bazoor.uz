<?php	
	if(isset($_GET['token']) && isset($_GET['id'])) {
		$token = $_GET['token'];
		include("../ppsrc/ppsrcfunc.php");
		$sql = new mysqli("localhost", "root", "", "bazoor.uz");
		$result = $sql->query("SELECT * FROM `products` WHERE `pr_token` = '$token'");
		$data;
		$datas;
		$id = $_GET['id'];
		$result1 = fetchMessages(3);
		if($result->num_rows != 0) {
			$result = mysqli_fetch_assoc($result);
			$data = $result;
		}
		?>

		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Document</title>
		</head>
		<body>

			<main>
				<div class="container">
					<?php include("../nav_for_other.php"); ?>
					<div class="block_2">
						<div class="block_1">
							<img src="<?=$data['pr_image'];?>" alt="">
							<div class="block-3">
								<h1 class="pr_title_text"><?=$data['pr_title'];?></h1>
								<hr>
								<p class="p_price"><?=$data['pr_price'];?>$</p>
								<button class="buy_button">Sotib olish</button>
								<br>
								<br>
								<span class="span_class">Kommentlar</span>
							</div>
						</div>
					</div>
				</div>
			</main>
			
		</body>
		</html>

		<?php
	} else {
		echo "sahl";
	}
 ?>