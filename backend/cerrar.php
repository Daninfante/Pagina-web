<script type='text/javascript'>
function redireccionar2()
		{
			window.location="../index.php";
		} 
	setTimeout ("redireccionar2()", 10);
</script> 
<?php
session_start();
session_destroy();
echo "<script type='text/javascript'> alert('HAS CERRADO SESION CORRECTAMENTE.') </script>";
echo "<script> redireccionar2(); </script>";
?>
