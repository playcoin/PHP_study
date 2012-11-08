<html>
	<head>
		<title>Arrays</title>
	</head>

	<body>
		<?php
			$array1 = array(4,"nihao!",15,16,23,42);
			echo $array1["1"][2];
		?>
		<br />
		<?php
			$array2 = array("10" => "haha", "first_name" => "Cheng", "last_name" => "Peng");
			echo $array2["first_name"] . "<br />";
			echo count($array2);
			echo max($array2);
			echo min($array2);

		?>
		<br />
		<pre><?php rsort($array2); print_r($array2);?></pre>
		<pre><?php echo $string = implode(" * ", $array1);?></pre>
		<pre><?php print_r(explode(" * ", "haha"));?></pre>
		<pre><?php print_r(array_chunk($array1, 4));?></pre>
	</body>

</html>