<?php 
	$url = htmlspecialchars($_GET["url"]);
?>

<html>
<head>
</head>
<body>
<form action="" method="GET">
<input type="text" name="url" id="url" value="<?php echo $url ?>" />
<input type="submit" value="Submit" />
</form>
<img id="image" src="<?php echo $url ?>" />

</body>
</html>