<!DOCTYPE html>
<html lang="cat">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Exercici2</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<p>
			<label for="ufsCursades">Ufs cursades:</label>
			<input type="textarea" name="ufsCursades"/>
			<label for="numUfs">Numero Ufs:</label>
			<input type="textarea" name="numUfs"/><br><br>
			<button type="submit" name="guardar">Guardar</button>
		</p>
	</form>
	<?php
		session_start();
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $ufs = $_POST["ufsCursades"];
			$numUfs = $_POST["numUfs"];

			if (isset($_POST["guardar"])) {

				$_SESSION["ufsCursades"] = $ufs;
                $_SESSION["numUfs"] = $numUfs;

				header("Location: ./exercici2.php");
			
			}
		}
	?>
</body>