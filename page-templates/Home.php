<?php /* Template Name: Home */

 /* Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary"     <?php post_class('apropos'); ?>    role="main"       >

			<!-- première boucle pour récupérer le content de la page s' il a été rempli dans l' administration -->

			<section  id="page-loop">

					<?php if (have_posts())
						{
							while (have_posts())
								{
									 ?><h1><?php the_title(); ?></h1><?php

									the_post();

									the_content();


								} 	//end while
						}		// end if


						 if (current_user_can( 'administrator'))		//snippet pour pouvoir rapidement éditer le contenu de la page
								{		?>
						  			<span class="edit-link">'	<a href="<?php  echo get_edit_post_link();  ?>" target='new'>modifier</a> </span>
					<?php  }  ?>



				</section> <!-- fin de "page-loop"  -->


		<section  id="content-articles" role="main" class="boxes">

			<?php


					$category_id = get_cat_ID( 'Journal nomade' );


					$category_link = get_category_link( $category_id );

				?>
				<h4 class="category-title-home">
					<a href="<?php echo esc_url( $category_link ); ?>" title="Journal nomade">Journal nomade ~ Billets récents</a>
				</h4>








			<?php

				/* tu trouveras les arguments de la query ici: http://codex.wordpress.org/Class_Reference/WP_Query */

				$args = array(
										'category_name' => 'journal-nomade',
										'post_type' => 'post',
										'posts_per_page' =>3,
										'orderby' => 'date',
										'order'   => 'DESC',

									);

/* avec ces arguments tu récupères les 3 derniers posts de la catégorie 'journal-nomade', organisés par dates et un ordre descendant */

				query_posts($args) ;		// j' ai récupéré mes posts

/* pas besoin de if parce que c' est la catégorie appellée en home donc il DOIT  avoir des posts, mais si tu veux mettre une option de secours, pourquoi pas */


				while ( have_posts() )
					{
					 	the_post();


					  get_template_part( 'content', 'home');

					}; // end of the loop de la catégorie 'journal-nomade'

				the_posts_navigation();

			?>
			<div class="clear"></div>
		</section><!-- #content-article -->
	</section><!-- #primary -->


<?php get_footer(); ?>

</div> <!-- fermeture de #page  -->

</body>

</html>