<?php get_header(); ?>

<?php if (have_posts() ) { while ( have_posts() ) : the_post(); ?>
    <main class="main pt-0 pb-0" id="main">

    <section class="bg-secondary-light p-12 mt-0">
      <div class="container">
        <?php the_content(); ?>
      </div>
    </section>



    <section class="container prose">
      <p>This is the "Jeffs Coffee" theme. It utilizes tailwind, Alpine.js and esbuild. It is a work in progress.</p>
      <p>This template your are viewing can be found at starter/theme/front-page.php</p>
      <p>Tailwind css is developed in the "tailwind" folder, and is compiled into the /theme/library/css folder.</p>
      <p>Read the <a href="https://github.com/ocupop/wordpress_starter/blob/main/src/wp-content/themes/starter/README.md" target="_blank">docs</a>, check out the <a href="/style-guide/">style guide</a>, some <a href="/sample-components/">example components</a>, or just dive in and start developing!</p>
    </section>

    <section class="bg-primary-dark text-white mb-0">
      <div class='container'>
        <p>Here is a search form for testing the search functionality</p>
        <?php get_search_form(); ?>
      </div>
    </section>
    </main>

<?php endwhile;
}; ?>

<?php get_footer(); ?>