<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
	include("header.php");
	include("menu.php");	
	?>
	<div class="main10" style="margin: 10px; padding: 10px; border: 2px solid black; width: 530px; height: 530px;">
<?php
$conn = mysqli_connect("localhost", "root", "", "lilit");
mysqli_set_charset($conn, "utf8");

$sql = "SELECT * FROM `products` WHERE `id`=".$_GET['id'];
$res = mysqli_query($conn, $sql);

while ($arr = mysqli_fetch_assoc($res)) { ?>
			<div class='pp1'>
				<img src="<?php echo $arr["image"]; ?>" width="400" height="400" >
				<h2><?php echo $arr["title"]; ?></h2>
				<h5><?php echo $arr["price"]; ?>$</h5>
			</div>

	<?php 
}

	mysqli_close($conn);

	?>
	<button>BUY NOW</button>
</div>

	<?php
	include("footer.php");	
	?>

</body>
</html>