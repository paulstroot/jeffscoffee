<?php
    /**
     * Template Name: Style Guide
     */
?><?php get_header(); ?>

<?php if (have_posts() ) { while ( have_posts() ) : the_post(); ?>
    <main class="main cf" id="main">

    <div class="container mb-8">
      <h1 class="pagetitle tk-purista-web cf"><?php echo esc_html(get_the_title()); ?></h1>
      <div class="prose"><?php the_content(); ?></div>
    </div>

    <section class="bg-light py-8">
      <div class="container">
        <h1>h1 heading or .h1 class</h1>
        <h2>h2 heading or .h2 class</h2>
        <h3>h3 heading or .h3 class</h3>
        <h4>h4 heading or .h4 class</h4>
        <h5>h5 heading or .h5 class</h5>
      </div>
    </section>

    <section class="py-8">
      <div class="container">
        <h2>Colors</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
          <figure>
            <div class="bg-primary p-12"></div>
            <figcaption>Primary</figcaption>
          </figure>
          <figure>
            <div class="bg-primary-light p-12"></div>
            <figcaption>Primary Light</figcaption>
          </figure>
          <figure>
            <div class="bg-primary-dark p-12"></div>
            <figcaption>Primary Dark</figcaption>
          </figure>
          <figure>
            <div class="bg-secondary p-12"></div>
            <figcaption>Secondary</figcaption>
          </figure>
          <figure>
            <div class="bg-accent p-12"></div>
            <figcaption>Accent</figcaption>
          </figure>
          <figure>
            <div class="bg-dark p-12"></div>
            <figcaption>dark</figcaption>
          </figure>
          <figure>
            <div class="bg-mid p-12"></div>
            <figcaption>Mid</figcaption>
          </figure>
          <figure>
            <div class="bg-light p-12"></div>
            <figcaption>Light</figcaption>
          </figure>
          <figure>
            <div class="bg-info p-12"></div>
            <figcaption>Info</figcaption>
          </figure>
          <figure>
            <div class="bg-success p-12"></div>
            <figcaption>Success</figcaption>
          </figure>
          <figure>
            <div class="bg-warning p-12"></div>
            <figcaption>Warning</figcaption>
          </figure>
          <figure>
            <div class="bg-error p-12"></div>
            <figcaption>Error</figcaption>
          </figure>
        </div>
      </div>
    </section>


    <section class="bg-light py-8">
      <div class="container">
        <h2>Buttons</h2>
        <p>* Requires adding the class "btn" to the element</p>

          <fieldset>
            <legend>Buttons</legend>
            <p><input type="button" value="Input type button" class="btn"></p>
            <p><input type="submit" value="Input type submit" class="btn"></p>
            <p><input type="submit" value="Input type submit disabled" disabled="" class="btn"></p>
            <p><button class="btn">Button</button></p>
            <p><button type="button" disabled="" class="btn">Button disabled</button></p>
          </fieldset>

      </div>
    </section>

<section class="bg-white py-8">
  <div class="container">
    <h2>Forms</h2>
    <?php echo do_shortcode('[formidable id=2]'); ?>
  </div>
</section>

    <section class="bg-light py-8">
      <div class="container">
        <h2>Font Stacks</h2>

        <p class="font-body text-2xl"><b class="font-base-bold">Base Font:</b> The quick brown fox jumps over the lazy dog.</p>
        <p class="font-display text-2xl"><b>Headline/Display Font:</b> The quick brown fox jumps over the lazy dog.</p>
        <p class="font-serif text-2xl"><b class="font-body-bold">Serif Font:</b> The quick brown fox jumps over the lazy dog.</p>
        <p class="font-sans text-2xl"><b>Sans-Serif Font:</b> The quick brown fox jumps over the lazy dog.</p>
        <p class="font-mono text-2xl"><b>Monospace Font:</b> The quick brown fox jumps over the lazy dog.</p>
      </div>
    </section>

    <section class="bg-white py-8">
      <div class="container">
        <h2>Text Formatting</h2>
        <ul>
          <li>This is an unordered List</li>
          <li>Lorem</li>
          <li>Ipsum</li>
          <li>Dolor</li>
          <li>Sit</li>
          <li>Amet</li>
        </ul>

        <ol>
          <li>This is an ordered List</li>
          <li>Lorem</li>
          <li>Ipsum</li>
          <li>Dolor</li>
          <li>Sit</li>
          <li>Amet</li>
        </ol>

        <blockquote>This is a blockquote. Manchego red leicester cheesy grin. Edam cheesy grin bavarian bergkase who moved my cheese caerphilly st. agur blue cheese swiss swiss. Jarlsberg danish fontina airedale cheese and biscuits dolcelatte caerphilly hard cheese caerphilly. Lancashire macaroni cheese cheeseburger say cheese mascarpone cauliflower cheese bavarian bergkase manchego. Who moved my cheese gouda queso brie.</blockquote>

      </div>
    </section>

    <section class="bg-light py-8">
      <div class="container">
        <h2>Tailwind Typography with the "prose" class</h2>
        <div class="prose">
          This is an example of <a href="https://tailwindcss.com/docs/typography-plugin" target="_blank">tailwind's typography plug-in</a>. The containing element has the class "prose". Manchego red leicester cheesy grin. Edam cheesy grin bavarian bergkase who moved my cheese caerphilly st. agur blue cheese swiss swiss. Jarlsberg danish fontina airedale cheese and biscuits dolcelatte caerphilly hard cheese caerphilly. Lancashire macaroni cheese cheeseburger say cheese mascarpone cauliflower cheese bavarian bergkase manchego. Who moved my cheese gouda queso brie.</>
          <ul>
            <li>This is an unordered List</li>
            <li>Lorem</li>
            <li>Ipsum</li>
            <li>Dolor</li>
            <li>Sit</li>
            <li>Amet</li>
          </ul>

          <ol>
            <li>This is an ordered List</li>
            <li>Lorem</li>
            <li>Ipsum</li>
            <li>Dolor</li>
            <li>Sit</li>
            <li>Amet</li>
          </ol>

        <blockquote>This is a blockquote. Manchego red leicester cheesy grin. Edam cheesy grin bavarian bergkase who moved my cheese caerphilly st. agur blue cheese swiss swiss. Jarlsberg danish fontina airedale cheese and biscuits dolcelatte caerphilly hard cheese caerphilly. Lancashire macaroni cheese cheeseburger say cheese mascarpone cauliflower cheese bavarian bergkase manchego. Who moved my cheese gouda queso brie.</blockquote>

        </div>
      </div>
    </section>


    <section class="bg-white py-8">
      <div class="container container__supernarrow ">
        <p class="bg-red-300 py-8 text-center">Container Super Narrow</p>
      </div>
      <div class="container container__narrow ">
        <p class="bg-blue-300 py-8 text-center">Container Narrow</p>
      </div>
      <div class="container ">
        <p class="bg-green-300 py-8 text-center">Container</p>
      </div>
      <div class="container container__wide ">
        <p class="bg-teal-300 py-8 text-center">Container Wide</p>
      </div>
      <div class="container container__superwide ">
        <p class="bg-orange-300 py-8 text-center">Container Super Wide</p>
      </div>

    </section>

    </main>

<?php endwhile;
}; ?>

<?php get_footer(); ?>