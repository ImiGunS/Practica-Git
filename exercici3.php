<!DOCTYPE html>
<html lang="cat">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Exercici3</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<p>
			<label for="producte">Producte:</label>
			<input type="textarea" name="producte"/>
			<label for="quantitat">quantitat:</label>
			<input type="textarea" name="quantitat"/><br><br>
			<button type="submit" name="afegir">Afegir a cistella</button>
            <button type="submit" name="netejar">Netejar cistella</button>
		</p>
	</form>
	<?php
		session_start();
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_SESSION["carro"])) {

                $carro = $_SESSION["carro"];

            }

            $carro = array($_POST["producte"] => $_POST["quantitat"]);

            print_r($carro);

            
            if (array_key_exists($_POST["producte"], $carro)) {

                #$key = array_search('100', array_column($userdb, 'uid'));

                #$carro[$_POST["producte"]] = $carro[$_POST["producte"]] + [$_POST["quantitat"]];

                echo "TRUE TRUE";
            }
            else {
                echo "FALSE FALSE";
            }


            $_SESSION["carro"] = $carro;
		}
	?>
</body>
</html>