/** SwiperJS is a lightweight carousel library that does not rely on jQuery.
 *
 * It is enqueued in theme/library/functins/scripts-and-enqueing.php (both the minified JS and CSS files).
 */

if (typeof Swiper !== "undefined") {
  // eslint-disable-next-line no-undef
  new Swiper('.swiper-example', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
}


