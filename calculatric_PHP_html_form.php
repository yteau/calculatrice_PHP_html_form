<html>
<head>
	<title>Calculatrice en PHP</title>
</head>
<body>
	<h1>Calculatrice en PHP</h1>
	<form method="post" action="">
		<input type="text" name="nombre1" placeholder="Entrez un nombre">
		<select name="operation">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="text" name="nombre2" placeholder="Entrez un autre nombre">
		<input type="submit" name="calculer" value="Calculer">
	</form>

	<?php
	if(isset($_POST['calculer'])) {
		$nombre1 = $_POST['nombre1'];
		$nombre2 = $_POST['nombre2'];
		$operation = $_POST['operation'];

		switch($operation) {
			case '+':
				$resultat = $nombre1 + $nombre2;
				break;
			case '-':
				$resultat = $nombre1 - $nombre2;
				break;
			case '*':
				$resultat = $nombre1 * $nombre2;
				break;
			case '/':
				if($nombre2 == 0) {
					$resultat = "Erreur: division par zéro";
				} else {
					$resultat = $nombre1 / $nombre2;
				}
				break;
			default:
				$resultat = "Opération invalide";
		}

		echo "<p>Résultat: $resultat</p>";
	}
	?>
</body>
</html>


