<?php
session_start();

if(isset($_SESSION['login']))
	header('Location: bemprof.php');
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
	<label class="tamanhoLetra">Professor <i class="fas fa-chalkboard-teacher"></i></label>
</header>
<body class="back">
<div class="opc1-pro">
	<div class="opc2-pro">
		<form action="loginProf.php" method="post" id="prof-form">
			<div class="prof-login">
				<label for="login" class="login-prof-la">Login:</label><br>
				<input type="text" name="login" class="login" placeholder="login" id="login-prof-inp">
				
			</div>
			<div class="prof-pass">
				<label for="pass" class="login-prof-pass">Senha:</label><br>
				<input type="password" name="senha" class="pass" placeholder="Senha" id="prof-pass-inp">
				
			</div>
			<button id="prof-login-btn" type="submit" class="waves-effect waves-light btn">Entrar</button>
		</form>
		<a href="" id="esqueceu-senha" class="li-adm">Esqueceu a senha?</a>
	</div>
</div>

</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('#prof-login-btn').mouseover(function(){
			$('#prof-login-btn').css('background-color','#666666');
			$('#prof-login-btn').css('color','#ffffff');
		});
		$('#prof-login-btn').mouseout(function(){
			$('#prof-login-btn').css('background-color','#1a1a1a');
		});
	});

/*	$(document).ready(function(){
		$('#prof-form').click(function(){
			if($('#login-prof-inp').val().trim().length < 5){
				$('#prof-login-inp').css('color','red');
				alert('tem menos de 5 caracteres');
				return false;
			}
			return true;
		});
	});*/
	$(document).ready(function(){
		$("input").on({
			mouseenter:function(){
				$(this).css("background-color", "#8080ff");
			},
			mouseleave:function(){
				$(this).css("background-color","#6666ff");
			}
		});
	});

$(document).ready(function(){
		$('#esqueceu-senha').mouseover(function(){
			$('#esqueceu-senha').css('font-size','17px');
			$('#esqueceu-senha').css('color', '#ffffff');
		});
		$('#esqueceu-senha').mouseout(function(){
			$('#esqueceu-senha').css('font-size', '14px');
			$('#esqueceu-senha').css( 'color', 'black');
		});
	});
</script>

</html>