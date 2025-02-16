<?php
	// echo "<pre>";
	// var_dump($_POST);
	// echo "</pre>";
	// Check if user is authenticated
	require '../includes/functions.php';
	if(!isAuth()) {
		header('Location: /');
	}

	
	require '../includes/config/database.php';
	$db = connectDB();

	// Get properties from db
	$query = "SELECT * FROM properties";
	$query_result = mysqli_query($db, $query);

	// Show messages to user
	$result = $_GET['result'] ?? null;

	// Handle property delete
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$delete_id = $_POST['id'];
		$delete_id = filter_var($delete_id, FILTER_VALIDATE_INT);

		if ($delete_id) {
			// Delete property image 
			$query_get_image_name = "SELECT image FROM properties WHERE id = $delete_id";
			$result_get_image_name = mysqli_query($db, $query_get_image_name);
			$property = mysqli_fetch_assoc($result_get_image_name);
			$image_name = $property['image'];
			
			unlink('../images/' . $image_name); // Unlink deletes the file

			// Delete property
			$query = "DELETE FROM properties WHERE id = $delete_id";
			$result = mysqli_query($db, $query);

			if ($result) {
				header('location: /admin?result=3');
			}
		}
	}

	includeTemplate('header'); 
?>

	<main class="container section">
		<h1>Administrador de Bienes Raices</h1>
		<?php if($result === '1' ): ?>
			<p class="alert success">Propiedad registrada correctamente</p>
		<?php endif; ?>
		<?php if($result === '2' ): ?>
			<p class="alert success">Propiedad modificada correctamente</p>
		<?php endif; ?>
		<?php if($result === '3' ): ?>
			<p class="alert success">Propiedad eliminada correctamente</p>
		<?php endif; ?>

		<!-- Add proerty -->
		<a href="/admin/properties/create.php" class="button button-green">Agregar propiedad</a>

		<table class="properties">
			<thead>
				<tr>
					<th>ID</th>
					<th>Titulo</th>
					<th>Imagen</th>
					<th>Precio</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody> <!-- Show properties dinamically -->
				<?php while( $property = mysqli_fetch_assoc($query_result) ): ?>
					<tr>
						<td><?php echo $property['id']; ?></td>
						<td><?php echo $property['title']; ?></td>
						<td> <img src=<?php echo "/images/" . $property['image']; ?> alt="Imagen propiedad" class="table-image"> </td>
						<td>$ <?php echo $property['price']; ?></td>
						<td>
							<a href="admin/properties/update.php?id=<?php echo $property['id']; ?>" class="button-yellow-block">Actualizar</a>
							<form method="POST">
								<input type="hidden" name="id" value="<?php echo $property['id']; ?>">
								<input type="submit" value="Eliminar" class="button-red-block">
							</form>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</main>

	<?php 
		mysqli_close($db);
		includeTemplate('footer'); 
	?>
	
	<script src="/build/js/bundle.min.js"></script>
</body>
</html>
