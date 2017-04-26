<?php 
	
	
	$precio=$_POST['precio'];
	$id=$_GET['param_id'];
	$total= array_sum($precio);
	
	
	for ($i=0; $i<count($precio); $i++)
		{
			echo $precio[$i]."<br>";
		}
		
		echo "<br><br>". $id;
		echo "<br><br>". $total;
	
?>