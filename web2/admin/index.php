<html>
<head>
	<title>Admin page</title>
</head>
<body>
	<form action="action.php" method="post">
		<input type="text" name="title" placeholder="Վերնագիր"> <br><br>
		<input type="number" name="price" placeholder="Գին"> <br><br>
		<textarea name="image" placeholder="Նկար" rows="3" cols="60"></textarea> <br><br>
		<input type="submit" name="add">
	</form>

	<?php include('news_list.php') ?>
</body>
</html>