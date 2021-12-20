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
            <button type="submit" name="consultar">Consultar</button>
            <button type="submit" name="modificar">Modificar</button>
            <button type="submit" name="esborrar">Esborrar</button>
			<button type="submit" name="tancarSessio">Tancar Sessió</button>
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

            
            }

            if (isset($_POST["consultar"])) {
                if ((isset($_SESSION["ufsCursades"]) && !empty($_SESSION["ufsCursades"])) && ($_SESSION["numUfs"]) && !empty($_SESSION["numUfs"])) {
                    echo "Curses les següents UFs, $_SESSION[ufsCursades]; un total de $_SESSION[numUfs] UFs";
                }
                else {
                    echo "No hi han variables de sessió";
                }
            }
            if (isset($_POST["modificar"])) {

                header("Location: ./exercici22.php");

            }
            if (isset($_POST["esborrar"])) {

                unset($_SESSION["ufsCursades"]);
                unset($_SESSION["numUfs"]);

            }
			if (isset($_POST["tancarSessio"])) {
				session_unset();
			}
		}
	?>
</body>
</html>