<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<main class="main container cf" id="main">

    <?php
      $page_title = get_field('header_copy') ? get_field('header_copy') : get_the_title();
    ?>

    <h1 class="pagetitle tk-purista-web cf"><?php echo esc_html($page_title); ?></h1>

    <?php the_content(); ?>

	</main>



<?php endwhile; ?>

<?php get_footer(); ?>