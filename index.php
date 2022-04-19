<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- css -->
		<link rel="stylesheet" href="./css/style.css" />
		
		<!-- title -->
		<title>Fahrenheit to Celsius</title>
	</head>
	
	<!-- body -->
	<body>
<?php echo '<h1>Fahrenheit To Celsius Calculator</h1>';?>

		<!-- input boxes -->
		<h3>
			<?php echo '<h2>Input the temperature in Fahrenheit:</h2>' ?>
			<form method = "post">
				<?php echo '<p>Temperature:</p>' ?><input type="number" step="0.01" name="fahren">  
				<br>
				<br>
				
				<!-- button -->
				<input type = "submit" name = "submit" value="Calculate">  
			</form> 
		</h3>
		
		<!-- calculations -->
<?php   
if(isset($_POST["submit"]))  
{   
$fahren= $_POST["fahren"]; 
			
$celsius = sprintf('%.2f',5/9*($fahren-32));
	
	echo "<h4>The temperature in Celsius is $celsius °.</h4>";
}
?>   
  </body>
</html>