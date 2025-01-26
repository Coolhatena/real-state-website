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
			<p class="alerta success">The property was registered succesfully</p>
		<?php endif; ?>


		<a href="/admin/properties/create.php" class="button button-green">Agregar propiedad</a>
	</main>

	<?php includeTemplate('footer'); ?>
	
	<script src="/build/js/bundle.min.js"></script>
</body>
</html>