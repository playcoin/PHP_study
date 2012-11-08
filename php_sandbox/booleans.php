<html>
	<head>
		<title>Booleans and NULL</title>
	</head>

	<body>
		<?php
			$bool1 = true;
			$bool2 = false;
		?>
		<br />
		<?php echo $bool1 ?><br />
		<?php echo $bool2 ?><br />
		<?php
			$var1 = 3;
			$var2 = "cat";
			$var4 = "0";
		?>

		$var1 is set: <?php echo isset($var1); ?><br />
		$var2 is set: <?php echo isset($var2); ?><br />
		$var3 is set: <?php echo isset($var3); ?><br />
		<?php unset($var1)?>
		$var1 is set: <?php echo isset($var1); ?><br />
		$var2 is set: <?php echo isset($var2); ?><br />
		$var3 is set: <?php echo isset($var3); ?><br />

		$var1 empty:<?php echo empty($var1); ?><br />
		$var4 empty:<?php echo empty($var4); ?><br />
	</body>

</html>