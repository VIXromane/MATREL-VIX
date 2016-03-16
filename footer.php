<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

	</section>

	<footer>
		<div class="row">
			<nav class="text-center">
				<ul class="large-12 columns">
					<li><a href="#">Accueil</a></li>
					<li><a href="#">Qui sommes nous</a></li>
					<li><a href="#">Produits</a></li>
					<li><a href="#">Contactez-nous</a></li>
				</ul>
			</nav>
		</div>
	</footer>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
