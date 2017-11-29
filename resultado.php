<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Resultado</title>
	<link rel="stylesheet" href="resultado.css" />
</head>
<body>
	<div id="php">
		<?php
			if ($_POST['valor']!=""){
			$v1= $_POST['valor'];
			$acumladora = 0;
			for ($n=0; $n<13; $n++){
			$res = $n*$v1;
			$acumladora = $acumladora +$res;
			echo $v1." x ".$n." = ".$res."<p>";
			}
			echo " A soma de todos os resultado é! ".$acumladora;
			}
		?>
		<a href=""></a>
	</div>
</body>
</html>