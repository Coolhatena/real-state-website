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
		<div class="ads-container">
			<div class="ad">
				<picture>
					<source srcset="build/img/anuncio1.webp" type="image/webp">
					<source srcset="build/img/anuncio1.jpg" type="image/jpeg">
					<img loading="lazy" src="build/img/anuncio1.jpg" alt="Anuncio">
				</picture>
				<div class="ad-content">
					<h3>Casa de Lujo en el Lago</h3>
					<p>Casa en el lago con excelente vista, acabados de lujo  a un excelente precio</p>
					<p class="price">$3,000,000</p>
					<ul class="icons-specs">
						<li>
							<img class="ad-icon" loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
							<p>3</p>
						</li>
						<li>
							<img class="ad-icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
							<p>3</p>
						</li>
						<li>
							<img class="ad-icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
							<p>4</p>
						</li>
					</ul>

					<a href="ad.php" class="button-yellow-block">
						Ver Propiedad
					</a>

				</div><!--.ad-content-->
			</div><!--.ad-->

			<div class="ad">
				<picture>
					<source srcset="build/img/anuncio2.webp" type="image/webp">
					<source srcset="build/img/anuncio2.jpg" type="image/jpeg">
					<img loading="lazy" src="build/img/anuncio2.jpg" alt="Anuncio">
				</picture>
				<div class="ad-content">
					<h3>Casa acabados de Lujo</h3>
					<p>Casa con diseño moderno, así como tecnologia inteligente y amueblada</p>
					<p class="price">$2,000,000</p>
					<ul class="icons-specs">
						<li>
							<img class="ad-icon" loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
							<p>3</p>
						</li>
						<li>
							<img class="ad-icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
							<p>3</p>
						</li>
						<li>
							<img class="ad-icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
							<p>4</p>
						</li>
					</ul>

					<a href="ad.php" class="button-yellow-block">
						Ver Propiedad
					</a>

				</div><!--.ad-content-->
			</div><!--.ad-->

			<div class="ad">
				<picture>
					<source srcset="build/img/anuncio3.webp" type="image/webp">
					<source srcset="build/img/anuncio3.jpg" type="image/jpeg">
					<img loading="lazy" src="build/img/anuncio3.jpg" alt="Anuncio">
				</picture>
				<div class="ad-content">
					<h3>Casa de Lujo en el Lago</h3>
					<p>Casa con alberca y acabados de lujo en la ciudad, excelente oportunidad</p>
					<p class="price">$3,000,000</p>
					<ul class="icons-specs">
						<li>
							<img class="ad-icon" loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
							<p>3</p>
						</li>
						<li>
							<img class="ad-icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
							<p>3</p>
						</li>
						<li>
							<img class="ad-icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
							<p>4</p>
						</li>
					</ul>

					<a href="ad.php" class="button-yellow-block">
						Ver Propiedad
					</a>

				</div><!--.ad-content-->
			</div><!--.ad-->

		</div><!--.ads-container-->

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