<?php

	require 'includes/functions.php';
	includeTemplate('header', $isAlt = true); 
?>

	<main class="container section">
		<h1>Más Sobre Nosotros</h1>

		<div class="us-icons">
			<div class="icon">
				<img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
				<h3>Seguridad</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam molestias dolorem.
					laborum dolor repellendus reprehenderit, non eaque qui necessitatibus, 
					officia nam magnam vitae laudantium.
				</p>
			</div>
			<div class="icon">
				<img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
				<h3>Precio</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam molestias dolorem.
					laborum dolor repellendus reprehenderit, non eaque qui necessitatibus, 
					officia nam magnam vitae laudantium.
				</p>
			</div>
			<div class="icon">
				<img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
				<h3>A Tiempo</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam molestias dolorem.
					laborum dolor repellendus reprehenderit, non eaque qui necessitatibus, 
					officia nam magnam vitae laudantium.
				</p>
			</div>
		</div>
	</main>

	<section class="section container">
		<h2>Casas y Depas en Venta</h2>

		<?php 
			$limit = 3;
			include 'includes/templates/ads_template.php';
		?>

		<div class="align-right">
			<a href="ads.php" class="button-green">Ver todas</a>
		</div>
	</section>

	<section class="contact-image">
		<h2>Encuentra la casa de tus sueños</h2>
		<p>Llena el formulario de contacto y un asesor de pondrá en contacto contigo a la brevedad</p>
		<a href="contact.php" class="button-yellow">Contáctanos</a>
	</section>

	<div class="container section lower-section">
		<section class="blog">
			<h3>Nuestro Blog</h3>
			<article class="blog-entry">
				<div class="image">
					<picture>
						<source srcset="build/img/blog1.webp" type="image/webp">
						<source srcset="build/img/blog1.jpg" type="image/jpeg">
						<img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
					</picture>
				</div>

				<div class="entry-text">
					<a href="entry.php">
						<h4>Terraza en el techo de tu casa</h4>
						<p class="meta-inf">Escrito el: <span>20/10/2024</span> por <span>Admin</span> </p>

						<p>Consejos para contruir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
					</a>
				</div>
			</article>

			<article class="blog-entry">
				<div class="image">
					<picture>
						<source srcset="build/img/blog2.webp" type="image/webp">
						<source srcset="build/img/blog2.jpg" type="image/jpeg">
						<img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
					</picture>
				</div>

				<div class="entry-text">
					<a href="entry.php">
						<h4>Construye una alberca en tu hogar</h4>
						<p class="meta-inf">Escrito el: <span>19/10/2024</span> por <span>Admin</span> </p>

						<p>Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
					</a>
				</div>
			</article>

		</section>
		<section class="testimonies">
			<h3>Testimonios</h3>
			<div class="testimony">
				<blockquote>
					El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
				</blockquote>
				<p>- William Gibson</p>
			</div>
		</section>
	</div>

	<?php includeTemplate('footer'); ?>
	
	<script src="build/js/bundle.min.js"></script>
</body>
</html>