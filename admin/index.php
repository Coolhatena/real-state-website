<?php

	require '../includes/config/database.php';
	$db = connectDB();

	$query = "SELECT * FROM properties";
	$query_result = mysqli_query($db, $query);

	$result = $_GET['result'] ?? null;
	require '../includes/functions.php';
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
							<a href="#" class="button-red-block">Eliminar</a>
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