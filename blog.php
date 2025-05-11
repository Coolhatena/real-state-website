<?php

	require 'includes/app.php';
	includeTemplate('header'); 
?>

	<main class="container section centered-content">
		<h1>Nuestro Blog</h1>

		<article class="blog-entry">
			<div class="image">
				<picture>
					<source srcset="build/img/blog1.webp" type="image/webp">
					<source srcset="build/img/blog1.jpg" type="image/jpeg">
					<img loading="lazy" src="build/img/blog1.jpg" alt="Imagen entrada blog">
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
					<img loading="lazy" src="build/img/blog2.jpg" alt="Imagen entrada blog">
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

		<article class="blog-entry">
			<div class="image">
				<picture>
					<source srcset="build/img/blog3.webp" type="image/webp">
					<source srcset="build/img/blog3.jpg" type="image/jpeg">
					<img loading="lazy" src="build/img/blog3.jpg" alt="Imagen entrada blog">
				</picture>
			</div>

			<div class="entry-text">
				<a href="entry.php">
					<h4>Guia para decoracion de tu habitación</h4>
					<p class="meta-inf">Escrito el: <span>19/10/2024</span> por <span>Admin</span> </p>

					<p>Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
				</a>
			</div>
		</article>

		<article class="blog-entry">
			<div class="image">
				<picture>
					<source srcset="build/img/blog4.webp" type="image/webp">
					<source srcset="build/img/blog4.jpg" type="image/jpeg">
					<img loading="lazy" src="build/img/blog4.jpg" alt="Imagen entrada blog">
				</picture>
			</div>

			<div class="entry-text">
				<a href="entry.php">
					<h4>Guia para decoracion de tu hogar</h4>
					<p class="meta-inf">Escrito el: <span>19/10/2024</span> por <span>Admin</span> </p>

					<p>Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
				</a>
			</div>
		</article>
	</main>

	<?php includeTemplate('footer'); ?>
	
	<script src="build/js/bundle.min.js"></script>
</body>
</html>