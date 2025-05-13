<!DOCTYPE html>
<html>
<head>
	<title>Syntax</title>
	<link href="https://fonts.googleapis.com/css?family=Laila" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php	
	include("header.php");
	include("menu.php");	
	?>
<div class="main5">

	<?php

	if(isset($_POST['add'])){
		$title = $_POST["title"];
		$price = $_POST["price"];
		$image = $_POST["image"];

		$conn = mysqli_connect("localhost", "root", "root", "lilit");

		$sql = "INSERT INTO `products` (`title`, `image`, `price`) VALUES ('$title', '$image', '$price'";

		$res = mysqli_query($conn, $sql);

		mysqli_close($conn);
	}


	$link = mysqli_connect("localhost", "root", "", "lilit");

	mysqli_set_charset($link, "utf8");

	$sql1 = "SELECT * FROM `products`";

	$res = mysqli_query($link, $sql1);

	while ($arr = mysqli_fetch_assoc($res)) { ?>
		<div class='a1' width="500" height="200" style="margin: 10px; padding: 10px; border: 2px solid black" >
			<div class='pp1'>
				<img src="<?php echo $arr["image"]; ?>" width="200" height="200" >
				<h2><?php echo $arr["title"]; ?></h2>
				<h5><?php echo $arr["price"]; ?>$/kg</h5>
				<div class='pv1'>
					<a href="product1.php?id=<?php echo $arr["id"]; ?>" class="link">Read more</a>
				</div>
			</div>
		</div>

	<?php 
}

	mysqli_close($link);

	?>
</div>
	
	<?php
	include("footer.php");	
	?>

</body>
</html>