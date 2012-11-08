<html>
	<head>
		<title>Functions</title>
	</head>

	<body>
		<?php
			$bar = "Outside";
			function foo(){
				global $bar;
				$bar = "Inside";
			}
			foo();
			echo $bar . "<br />";

		?>
		<?php
			$bar1 = array(1,2);
			function foo2($bar){
				$bar[1] = 3;
			}
			foo2($bar1);
			print_r($bar1) . "<br />";

			echo print_r(get_defined_vars());
		?>
	</body>

</html>