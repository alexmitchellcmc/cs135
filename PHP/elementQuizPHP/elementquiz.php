<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
</head>

<body>
	<?php print_r($_GET); ?>
	<h1>Elements Quiz</h1>
	<?php
		include("elementarray.php");
		include("elementfunctions.php");

		if ( isset( $_GET['go'] ) ){
			createResult($element);
		}
		
		createQuestion($element);
	?>
</body>
</html>
