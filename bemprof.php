<?php  

session_start();
if (!isset($_SESSION['login']))
header('Location:professor.php');

$usuario = json_decode($_SESSION['login']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Professor</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--CDN-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<!--MATERIALIZE CDN-->
	 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Inclusão do jQuery-->
<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
<!-- Inclusão do Plugin jQuery Validation-->
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<header class="head">
	<label class="tamanhoLetra">Bem vindo <?=$usuario->nome?><i class="fas fa-chalkboard-teacher"></i></label>
		<a href="sairProf.php">Sair</a>

		
</header>

<tbody>
	
</tbody>

<script type="text/javascript">
	/*$(document).ready(function(){
		$('#sair').mouseover(function(){
			$('#sair').css('font-size','17px');
			$('#sair').css('color', '#999999');
		});
		$('#sair').mouseout(function(){
			$('#sair').css('font-size', '14px');
			$('#sair').css( 'color', '#ffffff');
		});
	});*/
</script>
</html>