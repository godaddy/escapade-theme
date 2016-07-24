<?php
/**
 * Template part for displaying the post title inside The Loop.
 *
 * @package Primer
 */
?>

<header class="entry-header">

	<div class="entry-header-row">

		<div class="entry-header-column">

			<?php do_action( 'primer_before_post_title' ) ?>

			<?php if ( is_singular() ) : ?>

				<h1 class="entry-title"><?php the_title() ?></h1>
				<ul class="entry-meta">
					<li><span class="genericon genericon-user"></span> <?php the_author(); ?></li>
					<li><span class="genericon genericon-time"></span> <?php the_time('F j, Y'); ?></li>
				</ul>
			<?php else : ?>

				<h2 class="page-title"><a href="<?php the_permalink() ?>" rel="permalink"><?php the_title() ?></a></h2>

			<?php endif; ?>

			<?php do_action( 'primer_after_post_title' ) ?>

		</div><!-- .entry-header-column -->

	</div><!-- .entry-header-row -->

</header><!-- .entry-header -->
