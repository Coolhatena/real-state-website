<?php

	// echo "<pre>";
	// var_dump($_GET);
	// echo "</pre>";
	$result = $_GET['result'] ?? null;
	require '../includes/functions.php';
	includeTemplate('header'); 
?>

	<main class="container section">
		<h1>Administrador de Bienes Raices</h1>
		<?php if($result === '1' ): ?>
			<p class="alert success">The property was registered succesfully</p>
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
			<tbody>
				<tr>
					<td>1</td>
					<td>Casa en la playa</td>
					<td> <img src="/images/649383509ebbeab61b1a48c839ba1bd8.jpg" alt="Imagen propiedad" class="table-image"> </td>
					<td>$1200000</td>
					<td>
						<a href="#" class="button-yellow-block">Actualizar</a>
						<a href="#" class="button-red-block">Eliminar</a>
					</td>
				</tr>
			</tbody>
		</table>
	</main>

	<?php includeTemplate('footer'); ?>
	
	<script src="/build/js/bundle.min.js"></script>
</body>
</html>