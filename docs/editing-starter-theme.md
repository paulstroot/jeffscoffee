# Begin editing the starter theme

At the time of writing, there are two starter themes you can choose from. To select a starter theme, update the value of `WORDPRESS_THEME_URL` and `WORDPRESS_THEME_REPO` in the .env file before you do the initial install.

Once installed, follow the readme file in the theme folder to learn how to develop the theme.

1. **starter**: This is a pretty bare-bones WordPress starter theme which does NOT include a theme.json file, and has Block Editing turned off by default. You would choose this theme if you are building custom PHP templates for all of your pages, or if you would like to use a theme builder like [Elementor](https://elementor.com/), [Salient](https://themenectar.com/salient/) or [Beaver Builder](https://www.wpbeaverbuilder.com/).<br>
`WORDPRESS_THEME_URL="https://github.com/ocupop/wordpress_starter_theme"`\
`WORDPRESS_THEME_REPO="wordpress_starter_theme"`

2. **child-theme-starter**: This theme is a child of [TwentyTwentyFour](https://wordpress.org/themes/twentytwentyfour/), and is intended to be used with The [Block Editor](https://developer.wordpress.org/block-editor/) (i.e. Gutenberg) and [Full Site Editing](https://www.smashingmagazine.com/2022/10/wordpress-full-site-editing/). There are less components included with this starter because most functionality will likely come from the parent theme or [installed plug-ins](https://www.wpbeginner.com/showcase/best-gutenberg-blocks-plugins-for-wordpress/).<br>
`WORDPRESS_THEME_URL="https://github.com/ocupop/wordpress_starter_theme_block_child"`\
`WORDPRESS_THEME_REPO="wordpress_starter_theme_block_child"`
