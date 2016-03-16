<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<div class="row">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<img class="border" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/border.jpg" alt="border"/><br/>

	</div>

	<div class="row">
	  <div class="small-12 large-7 columns centered">
		  <?php the_content();?>
	  </div>
	  <div class="small-12 large-5 columns description-produit"><!--DESCRIPTION-->

		 <h4><?php echo $value = get_field("sous-titre");?></h4>
		 <?php echo $value = get_field("description");?>

		  <a href="<?php echo $value = get_field("pdf");?>" class="button large expanded download"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/download-orange.png" height="30" width="37"/>TÉLÉCHARGER LA FICHE PRODUIT </a>
	  </div>
	</div>

</div>
<div class="heading-blue small-12 columns">
	<h3>Caractéristiques de la <strong>Raineuse-plieuse CF 375</strong>	<i class="fa fa-angle-down"></i></h3>
</div>
<div class="caracteristiques-listes"><!--CARACTERISTIQUES-->
	<div class="row">
		<article class="large-4 small-12 columns">
			<?php echo $value = get_field("liste1");?>
		</article>
		<article class="large-4 small-12 columns">
			<?php echo $value = get_field("liste2");?>
		</article>
		<article class="large-4 small-12 columns">
			<?php echo $value = get_field("liste3");?>
		</article>
	</div>
</div>

<h3>VIDÉO DÉMONSTRATION DU PRODUIT</h3>

<div class="row">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/pPLc8RMYmRg" frameborder="0" allowfullscreen></iframe>
</div>

<div class="bg-orange small-12 columns">
	<div class="row">
		<h4 class="large-8 small-12 columns">BESOIN DE <strong>RENSEIGNEMENTS SUPPLÉMENTAIRES</strong> ?</h4>
		<a href="<?php echo $value = get_field("contact-link");?>" class="large-4 small-12 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/contact-orange.png" height="30" width="37"/>CONTACTEZ-NOUS !</a>
	</div>

</div>

<div class="row cross-selling">
	<h3>CES PRODUITS POURRAIENT également VOUS INTÉRESSER !</h3>
	<div class="large-12 columns row">

		<div class="large-4 small-12 columns products">
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/produit2.jpg" />
					<h5>Raineuse TOUCHLINE C375</h5>
					<img class="border" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/border.jpg" alt="border"/><br/>
				</a>
		</div>

		<div class="large-4 small-12 columns products">
			<a href="#">
				<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/produit3.jpg"  alt="raineuse cpc"/>
				<h5>Touchline CPC 375 Duo</h5>
				<img class="border" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/border.jpg" alt="border"/><br/>
			</a>
		</div>

		<div class="large-4 small-12 columns products">
			<a href="#">
				<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/produit4.jpg" alt="touchline cpc 375" />
				<h5>Touchline CPC 375</h5>
				<img class="border" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/border.jpg" alt="border"/><br/>
			</a>
		</div>

	</div>
</div>
