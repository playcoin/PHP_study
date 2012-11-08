<html>
	<head>
		<title>Arrays</title>
	</head>

	<body>
		<?php
			$array1 = array(4,24,15,16,23,42);
			$array2 = $array1;
		?>
		<br />
		<pre><?php rsort($array2); print_r($array1);?><br />
		<?php print_r($array2);?><br />
	</body>

</html>