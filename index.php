<!DOCTYPE html>
<html>
<head>
	
	<title>Inicio</title>
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

    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body class="back">
	
	<div class="opc1">
		<div class="opc2">
			<div class="prof">
				<a id="prof" type="button" class="waves-effect waves-light btn" href="professor.php">Acesso Para Professor <i class="fas fa-chalkboard-teacher"></i></a>
			</div>
			<div class="alu">
				<a id="alu"type="button" class="waves-effect waves-light btn" href="aluno.php">Acesso Para Aluno <i class="fas fa-user-graduate"></i> </a>
			</div>
			<div class="adm">
				<a id="adm" class="li-adm" href="adm.php">Exclusivo Para Administradores <i class="fas fa-cogs"></i></a>
			</div>
		</div>
	</div>

</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('#prof').mouseover(function(){
			$('#prof').css('background-color','#666666');
			$('#prof').css('color','#ffffff');
		});
		$('#prof').mouseout(function(){
			$('#prof').css('background-color','#1a1a1a');
		});
	});

	$(document).ready(function(){
		$('#alu').mouseover(function(){
			$('#alu').css('background-color','#666666');
			$('#alu').css('color','#ffffff');
		});
		$('#alu').mouseout(function(){
			$('#alu').css('background-color','#1a1a1a');
		});
	});

	$(document).ready(function(){
		$('#adm').mouseover(function(){
			$('#adm').css('font-size','17px');
			$('#adm').css('color', '#ffffff');
		});
		$('#adm').mouseout(function(){
			$('#adm').css('font-size', '14px');
			$('#adm').css( 'color', 'black');
		});
	});

</script>
</html>