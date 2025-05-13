<?php  
$id = $_GET['id'];
$db = mysqli_connect("localhost", "root", "", "lilit");
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($db, $sql);
$r = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<div class="header">
			ADMINISTRATION
		</div>		
		<div class="container">	
			<h1>Update product <?php echo $_GET['id']; ?></h1>		

			<form action="action.php" method="post" enctype="multipart/form-data">
				<label for="title">Title</label><br>
				<input type="text" name="title" id="title" value="<?php echo $r['title']; ?>"> <br><br>

				<label for="image">image</label><br>
				<textarea name="image" id="image" rows="6" cols="46" > <?php echo $r['image']; ?></textarea><br><br>

				<label for="price">Price</label><br>
				<textarea name="price" id="price" rows="10" cols="46"><?php echo $r['price']; ?></textarea><br><br>				

				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

				<input type="submit" name="update">
			</form>			
		</div>
	</div>
</body>
</html>