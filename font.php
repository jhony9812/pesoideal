<meta charset="utf-8">
<?php
	
	$altura = $_POST["altura"];
	$sexo = $_POST["sexo"];
	

	function pesoIdeal(){
		global $altura;
		global $sexo;
		if($sexo == 'm'){
			$pesoideal = (72.7 * $altura) - 50;
			echo "O seu peso ideal é: ".$pesoideal;
		}
		if ($sexo == 'f') {
			$pesoideal = (62.1 * $altura) - 50;
			echo "O seu peso ideal é:".$pesoideal;
		}
	}
	pesoIdeal();
	

?>