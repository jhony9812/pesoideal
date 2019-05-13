<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Peso ideal</title>
</head>
<body>
	<form id="form" action="font.php" method="POST">
		Altura: <br>
		<input type="number" name="altura" required id="altura" step="any"><br>
		sexo: <br>
		<select required name="sexo">
			<option value="m" >Masculino</option>
			<option value="f" >Feminino</option>
		</select><br><br>
		<input type="submit" id="enviar">
		<br>
	</form>
</body>
</html>