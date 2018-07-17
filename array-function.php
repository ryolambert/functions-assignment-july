<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<title>Array Function Assignment</title>
	</head>
	<body>
		<h1>Array Function Assignment- Array Sorting</h1>
		<h2>PHP Example</h2>
		<?php

		function squaredPlusThree($z) {
			return (($z * $z) + 3);
			}
		function mappedArray() {
			$a = array ('1', '2', '3', '4', '5', '6', '7');
			return array_map("squaredPlusThree", $a);
		}

		$arrayMapped = mappedArray();

		var_dump($arrayMapped);

		?>
		<h2>JavaScript Example</h2>
		<script>
			let array1 = [1, 2, 3, 4, 5, 6, 7];
			document.write('<strong>Original Array</strong> <br/>' + array1 + '<br/>');
			function arrayMapped(array) {
				const map1 = array1.map(x => (x * x) + 3);
				return map1;
			}
			document.write('<strong>Array Mapped</strong> <br/>' + arrayMapped(array1));
		</script>
	</body>
</html>