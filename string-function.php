<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<title>String Function Assignment</title>
	</head>
	<body>
		<h1>String Function Assignment- Reverse Strings</h1>
		<h2>PHP Example</h2>
		<?php
			function stringReverse($string) {
				$len = strlen($string);
				for($i = $len - 1; $i >= 0; $i--) {
					echo $string[$i];
				}
			}
			print_r('DESSERTS'.'<br/>');
			print_r(stringReverse('DESSERTS'));
		?>
		<h2>JavaScript Example</h2>
		<script>document.write("DELIVER <br/>");</script>
		<script>
			function reverseString(str){
				return str.split("").reverse().join("");
			}
			document.write(reverseString("DELIVER"));
		</script>
	</body>
</html>