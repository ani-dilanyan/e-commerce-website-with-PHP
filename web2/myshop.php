<!DOCTYPE html>
<html>
<head>
	<title>Syntax</title>
</head>
<body>
	<?php
	include('header.php');	
	include('menu.php');	
	?>
<div class="main5">

	<?php
$conn = mysqli_connect("localhost", "root", "", "shop");
	if(!empty($_POST['insert'])){
		$title = $_POST["title"];
		$price = $_POST["price"];
		$image = $_POST["image"];

		

		$sql = "INSERT INTO `products` (`title`, `image`, `price`, ) VALUES ('$title', '$image', '$price', )";

		$res = mysqli_query($conn, $sql);

		mysqli_close($conn);
	}


	$link = mysqli_connect("localhost", "root", "", "shop");

	mysqli_set_charset($conn, "utf8");

	$sql1 = "SELECT * FROM `products`";

	$res = mysqli_query($link, $sql1);

	while ($arr = mysqli_fetch_assoc($res)) { ?>
		<div class='a1' width="500" height="200" >
			<div class='pp1'>
				<img src="<?php echo $arr[image]; ?>" width="200" height="150" >
				<h2><?php echo $arr["title"]; ?></h2>
				<h4><?php echo $arr["info"]; ?></h4>
				<h5><?php echo $arr["price"]; ?>$</h5>
				<div class='pv1'>
					<a href="product.php?id=<?php echo $arr[id]; ?>" class="link">Read more</a>
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