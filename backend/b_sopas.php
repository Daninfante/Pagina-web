<script type='text/javascript'>
	function redireccionar1()
	{
		window.location="../vistas/sopas.php";		
	} 
	setTimeout ("redireccionar()", 20); 
</script>
<?php 
	
	$precio=$_POST['precio'];
	$oe=$_POST['nombre'];
	$total= array_sum($precio);
	
	if (isset($_POST["precio"]) and $_POST["nombre"])
	{
	
	for ($i=0; $i<count($precio); $i++)
		{
			echo $precio[$i]."<br>";
		}
		
		//echo "<br><br>". $oe;
		echo "<br><br>". $total;
	}
	
	else 
	{
		echo "<script> alert('Debes elegir los 2.') </script>";
		echo "<script> redireccionar2(); </script>";
		die();
	}
?>