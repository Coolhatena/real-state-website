<?php
	// Database
	require '../../includes/config/database.php';
	$db = connectDB();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// echo "<pre>";
		// var_dump($_POST);
		// echo "</pre>";

		$title = $_POST["title"];
		$price = $_POST["price"];
		$description = $_POST["description"];
		$rooms = $_POST["rooms"];
		$wc = $_POST["wc"];
		$parkings = $_POST["parkings"];
		$seller_id = $_POST["seller_id"];

		// Insert
		$query = "INSERT INTO properties (title, price, description, rooms, wc, parkings, seller_id) VALUES ( '$title', '$price', '$description', '$rooms', '$wc', '$parkings', '$seller_id');";
		// echo $query;
		
		$result = mysqli_query($db, $query);
		if ($result) {
			echo "Insertado correctamente";
		}
	}

	require '../../includes/functions.php';
	includeTemplate('header'); 
?>

	<main class="container section">
		<h1>Crear</h1>

		<a href="/admin" class="button button-green">Volver</a>

		<form method="POST" action="/admin/properties/create.php" class="form">
			<fieldset>
				<legend>Información General</legend>

				<label for="title">Titulo:</label>
				<input type="text" name="title" id="title" placeholder="Titulo Propiedad">

				<label for="price">Precio:</label>
				<input type="number" name="price" id="price" placeholder="Precio Propiedad">

				<label for="imagen">Imagen:</label>
				<input type="file" id="image" accept="image/jpeg, image/png">

				<label for="description">Descripción</label>
				<textarea name="description" id="description"></textarea>
			</fieldset>

			<fieldset>
				<legend>Información de la propiedad:</legend>

				<label for="rooms">Habitaciones:</label>
				<input type="number" name="rooms" id="rooms" placeholder="Ej: 3" min="1">
				
				<label for="wc">Baños:</label>
				<input type="number" name="wc" id="wc" placeholder="Ej: 3" min="1">	

				<label for="parking">Estacionamientos:</label>
				<input type="number" name="parkings" id="parkings" placeholder="Ej: 3" min="1">	
			</fieldset>

			<fieldset>
				<legend>Información del Vendedor</legend>

				<select name="seller_id" id="seller_id">
					<option value="1">Eduardo</option>
					<option value="2">Evelyn</option>
				</select>
			</fieldset>

			<input type="submit" value="Crear Propiedad" class="button button-green">
		</form>
	</main>

	<?php includeTemplate('footer'); ?>
	
	<script src="/build/js/bundle.min.js"></script>
</body>
</html>