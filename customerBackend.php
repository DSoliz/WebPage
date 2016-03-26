<!DOCTYPE html>
<html>

<head>
        <link rel=stylesheet type=text/css href=style.css>
</head>

<body>
<h1>Your Receipt!</h1>
	<?php
		$price_value = $_POST['hiddenValue'];
		$pass_value = $_POST['pass'];
		$ship_price = $_POST['a'];
		$Arr = split($_POST['cartArr']);
		echo '<br>'.'<div>Your purchase has been processed!</div>'.'<br>';
		echo '<div>And your password was: </div><div>' . $pass_value .'</div><br>';
		$price1 = $Arr->price;
		echo $price1;
	?>
	<br>
	<table style="width:500px" border="1">
		<tr>
			<td>Shipping Method: </td>
			<td>
				<?php
					if($ship_price==0){
						echo 'FREE';
					}elseif($ship_price==50){
						echo 'Over Night Shipping';
					}else{
						echo '3 Day Shipping';
					}
				?>
			</td>
		</tr>
		<tr>
			<td>Total Price: </td>
			<td><?php echo $price_value ?>$</td>
		</tr>
	</table>

</body>
</html>
