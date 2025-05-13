<?php  
if( isset($_POST['add']) ){
	$title = $_POST['title'];
	$image = $_POST['image'];
	$price = $_POST['price'];

	$link = mysqli_connect('localhost', 'root', '', 'lilit');

	$sql = "INSERT INTO `products`( `title`, `image`,`price`) VALUES ('$title','$image','$price')";

	$result = mysqli_query($link, $sql);

	mysqli_close($link);
}

if( isset($_POST["update"]) ){

	$id = $_POST['id'];
	$title = $_POST['title'];
	$price = $_POST['price'];
	$image = $_POST['image'];	

	$db = mysqli_connect("localhost", "root", "", "lilit");

	$sql = "UPDATE `products` SET `title`='$title',`image`='$image',`description`='$description' WHERE id = $id";
	$r = mysqli_query($db, $sql);

	if($r){
		echo "News Successfuly Updated";
	}
	else{
		echo "db error";
	}
}

if( isset($_GET['action']) && $_GET['action'] == "delete"){
	$id = $_GET['id'];

	$db = mysqli_connect("localhost", "root", "", "lilit");

	$sql = "DELETE FROM products WHERE id = $id";

	$r = mysqli_query($db, $sql);
}
?>