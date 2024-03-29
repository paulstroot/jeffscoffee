<?php
  get_header();
?>


<main class="main container cf" id="main">

  <h1 class="pagetitle tk-purista-web cf"><?php echo esc_html(get_the_title()); ?></h1>

  <?php
      if ( have_posts() ) {


        ?>
        <div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8 relative'>
        <?php
        while ( have_posts() ) {
          the_post();
          get_template_part( 'templates/template-parts/loop-excerpt' );
        }
        ?>
        </div>
        <?php
      } else {

        // If no content, include the "No posts found" template.
        get_template_part( 'template-parts/content/content', 'none' );

      }
		?>

</main>



<?php get_footer(); ?>