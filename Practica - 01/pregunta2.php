
<?php
    $name = $_POST["name"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $age = $_POST["age"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="pregunta2.css">
    <title>Pregunta02</title>
</head>
<body>
	<div class="container mt-5">
		<div class="card">
			<div id="top" class="card-header">
				<h2 class="text-center">Bienvenido</h2>
			</div>
			<div class="card-body">
				<p id="txt"><?php echo "¡Hola " . $_POST["name"] . "! "; ?></p>
				<p id="txt"><?php echo "Tu dirección es " . $_POST["address"]; ?></p>
				<p id="txt"><?php echo "Tienes " . $_POST["age"] . " años, y tu correo es " . $_POST["email"]; ?></p>
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
