<?php
/**
 * @package Carambole
 */
?>


<?php if ( 'post' == get_post_type() ) : ?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="row featured-post-header">
				<div class="small-2 large-2 columns entry-meta ">

					<div class="date">
						<span class='day'><?php echo get_the_date('n') ?></span>
						<div class='date-group'>
						<span class='month'><?php echo get_the_date('M') ?></span>
						<span class='year'><?php echo get_the_date('Y') ?></span>
						</div>
					</div><!-- end date -->




				</div>
				<div class="small-10 large-10 columns sticky-title">
					<?php the_title( sprintf( '<h2 class="entry-title "><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				</div>
				<div class="small-10 large-10 columns entry-breadcrumb">
						<?php carambole_posted_on(); ?>
				</div><!-- .entry-meta -->
		</div>
		<?php endif; ?>


	</header><!-- .entry-header -->

	<div class="entry-content">
		<ul class="large-block-grid-2">
			<li class="text-home">
			<?php
				/* translators: %s: Name of current post */
				the_excerpt( sprintf(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'carambole' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>
			</li>
			<li>
			<?php
				the_post_thumbnail( 'thumbnail' )
			?>
			</li>
			<li>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'carambole' ),
					'after'  => '</div>',
				) );
			?>
			</li>
		</ul>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->



