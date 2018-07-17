<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<script language="JavaScript">
			<!--
			function dollarConverter(){
				document.converter.yen.value = document.converter.dollar.value * 112.267
			}
			function yenConverter(){
				document.converter.dollar.value = document.converter.yen.value / 112.267
			}
			//-->
		</script>

		<title>Math Function Assignment</title>

	</head>
	<body>
		<h1>Math Function Assignment- Currency Conversion</h1>
		<h2>PHP Example</h2>
		<?php
            function usdToJpy(float $currency) {
                return $currency * 112.267;
            }

            function jpyToUsd(float $currency) {
                return $currency / 112.267;
            }

            if (isset($_GET['usDollarPhp'])) {
                $usDollarPhp = floatval($_GET['usDollarPhp']);
                $jpYenPhp = usdToJpy($usDollarPhp);
                $jpYenConversion = "$usDollarPhp Dollars = $jpYenPhp Yen";
            }

            if (isset($_GET['jpYenPhp'])) {
                $jpYenPhp = floatval($_GET['jpYenPhp']);
                $usDollarPhp = jpyToUsd($jpYenPhp);
                $usDollarConversion = "$jpYenPhp Yen = $usDollarPhp Dollars" ;
			}
		?>

		<form>
			USD : <input type = "number" name = "usDollarPhp">
			<input type = "submit" value = "Convert USD to JPY">
			<?php
			if (isset($jpYenConversion)) {
			echo $jpYenConversion;
			}
			?>
		</form>
		<br>
		<form>
			JPY: <input type="number" name="jpYenPhp">
			<input type="submit" value="Convert JPY to USD">
			<?php
			if(isset($usDollarConversion)) {
				echo $usDollarConversion;
			}
			?>
		</form>
		<h2>JS Example</h2>
		<form name="converter">
			<table border="0">
				<tr>
					<td>US Dollar: </td><td><input type="text" name="dollar" onChange="dollarConverter()" /></td>
				</tr>
				<tr>
					<td>Japanese Yen: </td><td><input type="text" name="yen" onChange="yenConverter()" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="button" value="Convert!" /></td>
				</tr>
			</table>
		</form>

	</body>
</html>