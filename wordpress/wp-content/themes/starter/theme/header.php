<?php get_template_part("head"); ?>

<body <?php body_class(); ?>>

<header id="header" class='sticky top-0 z-50 bg-white '>

  <a href="#main" class="screen-reader-shortcut">Skip to main content</a>
  <div class='container py-4'>
    <div class='flex flex-row justify-between'>
      <div class="flex items-center logo">
        <a href="/" class="flex flex-row items-center gap-4 no-underline text-dark hover:text-primary">
          <img
            src="<?php bloginfo('template_url'); ?>/library/images/logo.png"
            alt="Logo"
            class="dark:invert"
            width=70
            priority
          />
          <h1 class="text-lg"><?php echo esc_html(get_bloginfo('name')); ?></h1>
        </a>
      </div>

      <nav aria-label="Main Menu" x-data="{ mobileMenuOpen: false }" @click.outside="mobileMenuOpen = false" class="inset-x-0 top-0 flex transition disclosure-nav open-on-focus_DISABLED justify-stretch">

        <button :aria-expanded="mobileMenuOpen" type="button" @click="mobileMenuOpen = !mobileMenuOpen" class="relative text-white bg-transparent border-none mobile-menu-toggle md:hidden">
          <span class="sr-only">Toggle main menu</span>
          <div class="space-y-2 hamburger padding-2" >
            <div class="w-8 h-1 bg-gray-600 rounded-full"></div>
            <div class="w-8 h-1 bg-gray-600 rounded-full"></div>
            <div class="w-8 h-1 bg-gray-600 rounded-full"></div>
          </div>
        </button>

        <div class="justify-between nav-wrapper" :class="{'open': mobileMenuOpen } ">

          <?php
            wp_nav_menu(
                array(
                'menu' => 'primary-nav',
                'container' => 'primary-nav',
                'walker' => new Ocupop_Nav_Menu()
                )
            );

            wp_nav_menu(
                array(
                'menu' => 'utility-nav',
                'container' => 'utility-nav',
                'walker' => new Ocupop_Nav_Menu()
                )
            );
            ?>
        </div>

      </nav>

    </div>
  </div>
</header>







