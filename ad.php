<?php
	
	require 'includes/config/database.php';
	$db = connectDB();

	$property_id = $_GET['id'];

	// Get property data from db
	$query_property_data = "SELECT * FROM properties WHERE id=$property_id";
	$property_data_result = mysqli_query($db, $query_property_data);
	$property_data = mysqli_fetch_assoc($property_data_result);

	require 'includes/functions.php';
	includeTemplate('header'); 
?>

	<main class="container section centered-content">
		<h1><?php echo $property_data['title']; ?></h1>

		<!-- <picture>
			<source srcset="build/img/destacada.webp" type="image/webp">
			<source srcset="build/img/destacada.jpg" type="image/jpeg">
			<img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
		</picture> -->
		<img loading="lazy" src="/images/<?php echo $property_data['image']; ?>" alt="Anuncio"> 

		<div class="property-summary">
			<p class="price"><?php echo $property_data['price']; ?></p>
			<ul class="icons-specs">
				<li>
					<img class="ad-icon" loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
					<p><?php echo $property_data['wc']; ?></p>
				</li>
				<li>
					<img class="ad-icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
					<p><?php echo $property_data['parkings']; ?></p>
				</li>
				<li>
					<img class="ad-icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
					<p><?php echo $property_data['rooms']; ?></p>
				</li>
			</ul>

			<p><?php echo $property_data['description']; ?></p>
		</div>
	</main>

	<?php includeTemplate('footer'); ?>
	
	<script src="build/js/bundle.min.js"></script>
</body>
</html>

<?php 
	mysqli_close($db);
?>