<?php 
	$db = connectDB();

	// Get properties from db
	$query = "SELECT * FROM properties LIMIT $limit";
	$query_result = mysqli_query($db, $query);
?>

<div class="ads-container">
	<?php while( $property = mysqli_fetch_assoc($query_result) ): ?>
		<div class="ad">

			<!-- TODO: Create webp image on property upload -->
			<img loading="lazy" src="/images/<?php echo $property['image']; ?>" alt="Anuncio"> 

			<div class="ad-content">
				<h3><?php echo $property['title']; ?></h3>
				<p class="description"><?php echo $property['description']; ?></p>
				
					<p class="price"><?php echo $property['price']; ?></p>
					<ul class="icons-specs">
						<li>
							<img class="ad-icon" loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
							<p><?php echo $property['wc']; ?></p>
						</li>
						<li>
							<img class="ad-icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
							<p><?php echo $property['parkings']; ?></p>
						</li>
						<li>
							<img class="ad-icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
							<p><?php echo $property['rooms']; ?></p>
						</li>
					</ul>
					
					<a href="ad.php?id=<?php echo $property['id']; ?>" class="button-yellow-block">
						Ver Propiedad
					</a>	
			</div><!--.ad-content-->
		</div><!--.ad-->
	<?php endwhile; ?>
</div><!--.ads-container-->


<?php 
	mysqli_close($db);
?>