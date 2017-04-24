<!DOCTYPE html>
<html>
<head>
<title> Restaurante </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
<link rel="stylesheet" href="Estilo.css"/> -->
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style>

	button
	{
		margin: 15px 10px;
		width: 45%;
		/*box-shadow: inset 10px -1px 7px 1px rgba(161,51,51,0.75);*/
		/*word-wrap: break-word;*/
	}

	@media (max-width: 700px)
	{
		button
		{
			width: 65%;

		}

		#usr
		{
			width: 65%;
		}		
	}

	div
	{
		background-color: white;
		/*height: 350px;*/
		width: 50%;
		margin: 10% 25%;
		border-radius: 1px 65px 1px 65px;
		box-shadow: inset 23px -1px 40px 7px rgba(118,33,33,0.75);
	}

	html
	{
		/*background: rgba(99, 66, 66, 1);*/
		background-image: url("http://torrecatalunya.expohotels.com/wp-content/uploads/2014/12/Visual-Eje-__H81.jpg");
	}

	body
	{
		text-align: center;
	}

	#usr
	{
		font-family: monotype corsiva, cursive;
		position: relative;
		size: 25px;
		text-transform: uppercase;
		border-radius: 15px;
		opacity: .2;

	}
 
	#usr
	{ 
    	background-image: black;
    	animation: usr 2s infinite;
	}

/*@keyframes usr {
    50% {
    	opacity: 0.1;
    	}
}*/

#usr:hover
{
	margin: 1px solid red;
	opacity: .7;
}

</style>

<?php
	
	session_start();
	if (!isset($_SESSION['cliente1']))
	{
		echo "<script> alert('NO HAS ELEGIDO UNA MESA.') </script>";
		echo " <a href='index.html' class='ref' title='Ingresa para publicar tu servicio' style='margin: 0 auto; color: red; font-family: algerian, cursive; font-size: large;''> VOLVER</a> ";
		die();
	}
?>

<body>

<div>
<br>
<input onclick="location='/contades/cerrar.php'" id='usr' value="<?php echo $_SESSION['cliente1'] ?>" class='w3-btn w3-ripple'>
<br><br>

<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-blue w3-round-xlarge">ENTRADAS</button>
<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-black w3-round-xlarge"><i>ESPECIALIDADES</i></button>
<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-pink w3-round-xlarge">POSTRES</button>
<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-green w3-round-xlarge">ENSALADAS</button>
<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-aqua w3-round-xlarge">BEBIDAS</button>
<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-aqua w3-round-xlarge">SOPAS</button><br>
<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-teal w3-round-xlarge">PAGAR</button>
</div>

</body>
</html>