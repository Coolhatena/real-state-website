<?php
	// Database connection
	require '../../includes/config/database.php';
	$db = connectDB();

	// Get sellers
	$sellers_query = "SELECT * FROM sellers";
	$sellers = mysqli_query($db, $sellers_query);

	// Error array
	$errors = [];
	$title = '';
	$price = '';
	$description = '';
	$rooms = '';
	$wc = '';
	$parkings = '';
	$seller_id = '';
	$created_at = date('Y/m/d');

	// Execute when user sends forms
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// echo "<pre>";
		// var_dump($_POST);
		// echo "</pre>";
		// echo "<pre>";
		// var_dump($_FILES);
		// echo "</pre>";

		$title = mysqli_real_escape_string($db, $_POST["title"]);
		$price = mysqli_real_escape_string($db, $_POST["price"]);
		$description = mysqli_real_escape_string($db, $_POST["description"]);
		$rooms = mysqli_real_escape_string($db, $_POST["rooms"]);
		$wc = mysqli_real_escape_string($db, $_POST["wc"]);
		$parkings = mysqli_real_escape_string($db, $_POST["parkings"]);
		$seller_id = mysqli_real_escape_string($db, $_POST["seller_id"]);

		// Save image file on a variable
		$image = $_FILES['image'];

		// Validations
		if(!$title) {
			$errors[] = "Debes añadir un titulo";
		}

		if(!$price) {
			$errors[] = "El precio es obligatorio";
		}

		if(!$image['name']) {
			$errors[] = "La imagen es obligatoria";
		} else { // validate image size
			$expected_size = 1000 * 2000; // 100 kb
			if($image['size'] > $expected_size || $image['error']) {
				$errors[] = "La imagen es muy pesada";
			}
		}

		if(strlen($description) < 50) {
			$errors[] = "La descripción es obligatoria y debe ser mayor a 50 caracteres";
		}

		if(!$rooms) {
			$errors[] = "El número de habitaciones es obligatorio";
		}

		if(!$wc) {
			$errors[] = "El número de baños es obligatorio";
		}

		if(!$parkings) {
			$errors[] = "El número de estacionamientos es obligatorio";
		}

		if(!$seller_id) {
			$errors[] = "Elige un vendedor";
		}


		// Check that the error array is empty
		if (empty($errors)) {
			// Image folder verification
			$imagesFolder = "../../images";
			if( !is_dir($imagesFolder) ){
				mkdir($imagesFolder);
			}
			// File upload
			move_uploaded_file($image['tmp_name'], $imagesFolder . '/file.jpg');


			exit;

			// Insert
			$query = "INSERT INTO properties (title, price, description, rooms, wc, parkings, created_at, seller_id) VALUES ( '$title', '$price', '$description', '$rooms', '$wc', '$parkings', '$created_at','$seller_id');";
			// echo $query;
			
			$result = mysqli_query($db, $query);
			if ($result) {
				// Redirect user
				header("Location: /admin");
			}
		}

		// echo "<pre>";
		// var_dump($errors);
		// echo "</pre>";

	}

	require '../../includes/functions.php';
	includeTemplate('header'); 
?>

	<main class="container section">
		<h1>Crear</h1>

		<a href="/admin" class="button button-green">Volver</a>

		<?php foreach($errors as $error): ?>
			<div class="alerta error">
				<?php echo $error; ?>
			</div>
		<?php endforeach; ?>


		<form method="POST" action="/admin/properties/create.php" class="form" enctype="multipart/form-data" >
			<fieldset>
				<legend>Información General</legend>

				<label for="title">Titulo:</label>
				<input type="text" name="title" id="title" placeholder="Titulo Propiedad" value="<?php echo $title; ?>">

				<label for="price">Precio:</label>
				<input type="number" name="price" id="price" placeholder="Precio Propiedad" value="<?php echo $price; ?>">

				<label for="imagen">Imagen:</label>
				<input type="file" id="image" name="image" accept="image/jpeg, image/png">

				<label for="description">Descripción</label>
				<textarea name="description" id="description"><?php echo $description; ?></textarea>
			</fieldset>

			<fieldset>
				<legend>Información de la propiedad:</legend>

				<label for="rooms">Habitaciones:</label>
				<input type="number" name="rooms" id="rooms" placeholder="Ej: 3" min="1" value="<?php echo $rooms; ?>">
				
				<label for="wc">Baños:</label>
				<input type="number" name="wc" id="wc" placeholder="Ej: 3" min="1" value="<?php echo $wc; ?>">	

				<label for="parking">Estacionamientos:</label>
				<input type="number" name="parkings" id="parkings" placeholder="Ej: 3" min="1" value="<?php echo $parkings; ?>">	
			</fieldset>

			<fieldset>
				<legend>Información del Vendedor</legend>

				<select name="seller_id" id="seller_id">
					<option value="" disabled selected>-- Seleccione --</option>
					<?php while($row = mysqli_fetch_assoc($sellers) ): ?>
						<option <?php echo $seller_id === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']?>"><?php echo $row['name'] . " " . $row['lastname'] ?></option>

					<?php endwhile; ?>
				</select>
			</fieldset>

			<input type="submit" value="Crear Propiedad" class="button button-green">
		</form>
	</main>

	<?php includeTemplate('footer'); ?>
	
	<script src="/build/js/bundle.min.js"></script>
</body>
</html>