<?php
    /**
     * Template Name: Sample Components
     */
?><?php get_header(); ?>


<?php
$accordion_content = [
  (object) [
    'title' => 'First Accordion Item',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Interdum varius sit amet mattis vulputate enim nulla aliquet. Et malesuada fames ac turpis egestas integer eget aliquet. Eget felis eget nunc lobortis mattis. Leo integer malesuada nunc vel risus. Ultricies mi eget mauris pharetra et ultrices. Tristique senectus et netus et. Felis eget velit aliquet sagittis id. Tempor commodo ullamcorper a lacus vestibulum sed arcu. Amet mattis vulputate enim nulla. Vulputate enim nulla aliquet porttitor lacus luctus accumsan. A erat nam at lectus urna duis convallis. Id aliquet risus feugiat in ante metus dictum at. Pharetra pharetra massa massa ultricies mi quis.',
  ],
  (object) [
    'title' => 'Second item in the accordion',
    'content' => 'Libero id faucibus nisl tincidunt eget. Augue neque gravida in fermentum et sollicitudin ac orci. Hendrerit gravida rutrum quisque non tellus orci ac. Ut morbi tincidunt augue interdum velit euismod in pellentesque. Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat. Id diam maecenas ultricies mi eget. Tortor vitae purus faucibus ornare suspendisse sed. Non quam lacus suspendisse faucibus interdum. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Et ultrices neque ornare aenean euismod elementum nisi quis. Turpis in eu mi bibendum neque.',
  ],
  (object) [
    'title' => 'Here is one more item.',
    'content' => 'Nunc sed velit dignissim sodales. Egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. Nisi est sit amet facilisis magna. Faucibus vitae aliquet nec ullamcorper sit amet. Et leo duis ut diam quam nulla. Aenean sed adipiscing diam donec. Donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Maecenas accumsan lacus vel facilisis. Integer vitae justo eget magna fermentum iaculis eu non. Velit scelerisque in dictum non consectetur a erat nam. Auctor eu augue ut lectus arcu bibendum at. Quis viverra nibh cras pulvinar mattis. Nibh venenatis cras sed felis eget.',
  ]
];
?>

<?php if (have_posts() ) { while ( have_posts() ) : the_post(); ?>
    <main class="main cf" id="main">

    <div class="container mb-8">
      <h1 class="pagetitle tk-purista-web cf"><?php echo esc_html(get_the_title()); ?></h1>
      <div class="prose"><?php the_content(); ?></div>
    </div>


    <section class="bg-light py-8">
      <div class="container">


        <div class="grid grid-cols-1 sm:grid-cols-2 gap-16">
          <div>
            <h3 class="h4">Modal Window</h3>
            <!-- This wraps the entire modal window -->
            <div class="mt-6" x-data="{ open: false }">

              <!-- Button -->
              <button class="btn" @click="open = true" >Open Modal</button>


              <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="open" x-cloak>

                  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                  <div class="fixed z-10 inset-0 overflow-y-auto">
                    <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">

                      <div class="relative bg-white text-center rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-sm sm:w-full sm:p-6" @click.away="open = false">
                        <div>

                          <div class="mt-3 text-center sm:mt-5">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Hello Modal!</h3>
                            <div class="mt-2">
                              <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur amet labore.</p>
                            </div>
                          </div>
                        </div>
                        <button @click="open = false" class="btn">
                          Close this modal!
                        </button>
                      </div>
                      <!-- END Modal panel -->
                    </div>
                  </div>
              </div>
            </div><!-- END modal window wrapper -->
          </div>

          <div>
            <h3 class="h4">Modal with Transitions</h2>
            <!-- This wraps the entire modal window -->
            <div class="mt-6" x-data="{ open: false }">

              <!-- Button -->
              <button class="btn" @click="open = true" >Open Modal</button>


              <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="open" x-cloak>

                <div
                  class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                  x-show="open"
                  x-transition:enter="ease-out duration-300"
                  x-transition:enter-start="opacity-0 "
                  x-transition:enter-end="opacity-100"
                  x-transition:leave="ease-in duration-200 "
                  x-transition:leave-start="opacity-100"
                  x-transition:leave-end="opacity-0"
                  ></div>

                <div class="fixed z-10 inset-0 overflow-y-auto">
                  <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
                    <div
                      class="relative bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-sm sm:w-full sm:p-6"
                      @click.away="open = false"
                      x-show="open"
                      x-transition:enter="transition ease-out duration-300"
                      x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                      x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                      x-transition:leave="transition ease-in duration-200"
                      x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                      x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                      >
                      <div>

                        <!-- Checkbox icon -->
                        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-300">
                          <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                          </svg>
                        </div>

                        <div class="mt-3 text-center sm:mt-5">
                          <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Hello Modal!</h3>
                          <div class="mt-2">
                            <p class="text-sm text-gray-500">This modal should fade and scale in. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur amet labore.</p>
                          </div>
                        </div>
                      </div>
                      <button @click="open = false" class="btn">
                        Close this modal!
                      </button>
                    </div>
                    <!-- END Modal panel -->
                  </div>
                </div>
              </div>
            </div><!-- END modal window wrapper -->
          </div>

        </div>
      </div>
    </section>

    <section class="bg-white py-8">
      <div class="container">

        <h3 class="h4">Toggle buttons using AlpineJS</h3>
        <a href="https://tailwindcomponents.com/component/toggle-1">https://tailwindcomponents.com/component/toggle-1</a>

        <div class="mt-6" x-data="{enabled: false}">
          <label class="flex items-center justify-start ">

            <span class="order-2 text-gray-800 text-sm ml-3">I agree with terms and conditions</span>
            <button @click="enabled = !enabled" type="button" class="order-1 bg-mid relative inline-flex flex-shrink-0 h-5 w-10 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent" :class="enabled && 'bg-secondary'" role="switch" aria-checked="false">
                <span class="sr-only">Sleek Toggle</span>
                <span aria-hidden="true" class="pointer-events-none inline-block h-4 w-4 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled && 'translate-x-5'"></span>
            </button>
          </label>
        </div>


      </div>
    </section>

    <section class="bg-light py-8">
      <div class="container">
        <h3 class="h4">Carousel</h3>
        <?php

        if (wp_script_is( 'swiper', 'enqueued' )) {
          ?>
          <!-- Slider main container -->
          <div class="swiper swiper-example">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide py-20 text-center bg-accent">Slide 1</div>
                <div class="swiper-slide py-20 text-center bg-primary-light">Slide 2</div>
                <div class="swiper-slide py-20 text-center bg-secondary">Slide 3</div>
                <div class="swiper-slide py-20 text-center bg-primary">Slide 4</div>
                <div class="swiper-slide py-20 text-center bg-error">Slide 5</div>
                <div class="swiper-slide py-20 text-center bg-primary-dark">Slide 6</div>
            </div>
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->

          </div>

          <?php
        } else {
          ?>
            <p class="my-4"><a href="https://swiperjs.com/" target="_blank">Swiper carousel</a> is currently deactivated. To activate, uncomment the "swiper" scripts in theme/library/functions/scripts-and-enqueing.php</p>
            <p><a href="https://swiperjs.com/get-started" target="_blank">Click here for documentation</a></p>
          <?php
        }
        ?>
      </div>
    </section>

    <section class="bg-white py-8">
      <div class="container">
      <h3 class="h4">Expander</h3>

        <div class="bg-white max-w-xl border border-dark">
          <ul class="shadow-box p-0 list-none">

            <li class="relative border-b border-gray-200 mb-0" x-data="{opened:null}">
              <button :aria-expanded="opened" aria-controls="expander-content" type="button" class="w-full px-4 py-4 text-left" @click="opened = !opened">
                <div class="flex items-center justify-between">
                  <span>Click here to toggle the expander on and off</span>
                  <span class="icon" :class="opened ? 'opened' : 'closed'" x-html="opened ? '-' : '+'"></span>
                </div>
              </button>

              <div id="expander-content" class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1" x-bind:style="opened ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                <div class="p-6">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  <p>Libero id faucibus nisl tincidunt eget. Augue neque gravida in fermentum et sollicitudin ac orci.</p>
                  <p>Nunc sed velit dignissim sodales. </p>
                </div>
              </div>
            </li>


          </ul>
        </div>
    </section>

    <section class="bg-light py-8">
      <div class="container">
      <h3 class="h4">Accordion</h3>

        <div class="bg-white max-w-xl border border-dark" x-data="{selected:null}">
          <ul class="shadow-box pl-0 list-none">
            <?php
            for ($i = 0; $i < count($accordion_content); $i++) {
              ?>
              <li class="relative border-b border-gray-200 mb-0">
                <button :aria-expanded="selected === <?php echo esc_attr($i); ?>" aria-controls="accordion-list-<?php echo esc_attr($i); ?>" type="button" class="w-full px-4 py-3 text-left" @click="selected !== <?php echo esc_attr($i); ?> ? selected = <?php echo esc_attr($i); ?> : selected = null">
                  <div class="flex items-center justify-between">
                    <span><?php echo esc_html($accordion_content[$i]->title); ?></span>
                    <span class="icon" :class="selected !== <?php echo esc_attr($i); ?> ? 'closed' : 'opened'" x-html="selected !== <?php echo esc_attr($i); ?> ? '+' : '-'"></span>
                  </div>
                </button>

                <div id="accordion-list-<?php echo esc_attr($i); ?>" class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container<?php echo esc_attr($i); ?>" x-bind:style="selected == <?php echo esc_attr($i); ?> ? 'max-height: ' + $refs.container<?php echo esc_attr($i); ?>.scrollHeight + 'px' : ''">
                  <div class="p-6">
                  <?php echo esc_html($accordion_content[$i]->content); ?>
                  </div>
                </div>
              </li>
              <?php
            }
            ?>
          </ul>
        </div>

      </div>
    </section>


    <section class="bg-white py-8">
      <div class="container">
      <h3 class="h4">Drop Downs</h3>

        <div
            x-data="{
                open: false,
                toggle() {
                    if (this.open) {
                        return this.close()
                    }

                    this.$refs.button.focus()

                    this.open = true
                },
                close(focusAfter) {
                    if (! this.open) return

                    this.open = false

                    focusAfter && focusAfter.focus()
                }
            }"
            x-on:keydown.escape.prevent.stop="close($refs.button)"
            x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
            x-id="['dropdown-button']"
            class="relative"
        >
            <!-- Button -->
            <button
                x-ref="button"
                x-on:click="toggle()"
                :aria-expanded="open"
                :aria-controls="$id('dropdown-button')"
                type="button"
                class="flex items-center gap-2 bg-white px-5 py-2.5 rounded-md shadow"
            >
                Options

                <!-- Heroicon: chevron-down -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>

            <!-- Panel -->
            <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top.left
                x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-button')"
                style="display: none;"
                class="absolute left-0 mt-2 w-40 bg-white shadow-md"
            >
                <a href="#" class="flex items-center gap-2 px-4 py-2.5 text-left text-sm hover:bg-light disabled:text-gray-500">
                    New Task
                </a>

                <a href="#" class="flex items-center gap-2 px-4 py-2.5 text-left text-sm hover:bg-light disabled:text-gray-500">
                    Edit Task
                </a>

                <div class="flex items-center gap-2 px-4 py-2.5 text-left text-sm hover:bg-light disabled:text-gray-500">
                  Not a link
                </div>

                <a href="#" class="flex items-center gap-2 px-4 py-2.5 text-left text-sm hover:bg-light disabled:text-gray-500">
                  <span class="text-red-600">Delete Task</span>
                </a>
            </div>
        </div>

      </div>
    </section>


    <section class="bg-light py-8">
      <div class="container">

        <h3 class="h4 my-3">Tooltips</h3>


        <?php
        if (wp_script_is( 'alpine-tooltip', 'enqueued' )) {
            ?>
                <p>Using alpine-tooltip to display tooltips on hover</p>
                <p><a href="https://github.com/ryangjchandler/alpine-tooltip" target="_blank">Click here for documentation</a></p>

                <div class="my-4">
                  <div x-data="{ tooltip: 'This is crazy!' }">
                    <button x-tooltip="tooltip" class="btn my-4">
                      Hover for tooltip!
                    </button>
                  </div>
                  <button x-data x-tooltip.raw="Hello, world!" class="btn my-4">
                      Another Example
                  </button>

                </div>
            <?php
        } else {
          ?>
              <p class="my-4">Hover tooltips are currently deactivated. To activate, uncomment the "alpine-tooltop" scripts in theme/library/functions/scripts-and-enqueing.php</p>
              <p><a href="https://github.com/ryangjchandler/alpine-tooltip" target="_blank">Click here for documentation</a></p>
          <?php
        }
        ?>

      </div>
    </section>

    </main>

<?php endwhile;
}; ?>

<?php get_footer(); ?>