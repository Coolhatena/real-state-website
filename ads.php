<?php

	require 'includes/app.php';
	includeTemplate('header'); 
?>

	<main class="container section">
			<h2>Casas y Depas en Venta</h2>
			
			<?php 
				$limit = 9;
				include 'includes/templates/ads_template.php';
			?>
	</main>

	<?php includeTemplate('footer'); ?>
	
	<script src="build/js/bundle.min.js"></script>
</body>
</html>