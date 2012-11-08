<html>
	<head>
		<title>Logic Expressions</title>
	</head>

	<body>
		<?php
			$ages = array(1,2,3,4,5,6,7,8);

			while($age = current($ages)){
				echo $age . ",";
				next($ages);
			}
			echo $age;
		 ?>
	</body>

</html>