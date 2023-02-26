<section id="partner" class="mb-5 pb-5">
    <div class="container my-5 d-flex flex-wrap">
        <div class="poppins mb-5 col-12 col-lg-5 pe-lg-5">
            <h1 class="fs-3 text-dark-blue pe-lg-5">Telah dioptimasi untuk berbagai CMS dan framework</h1>
        </div>
        <div class="col-12 col-lg-7">
            <div class="position-relative">
                <div class="swiper swiperPartner">
                    <div class="swiper-wrapper mb-4">
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/php.png" alt"php"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/python.png" alt"phyton"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/joomla.png" alt"joomla"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/prestashop.png" alt"prestashop"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/laravel.png" alt"laravel"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <div class="swiper swiperPartner" autoplay-delay="2500">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/node.png" alt"node"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/wordpress.png" alt"wordpress"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/drupal.png" alt"drupal"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/noodle.png" alt"moodle"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/logo-ci.png" alt"ci"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .swiperPartner .swiper-slide img {
        width: 100%;
        height: 40px;
        object-position: center;
        object-fit: contain;
    }
</style>

<script>
    const swiperPartner = new Swiper(".swiperPartner", {
        autoplay: true,
        grabCursor: true,
        loop: true,
        centeredSlides: false,
        slidesPerView: 2,
        spaceBetween: 10,
        breakpoints: {
                // when window width is >= 320px
                576: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                // when window width is >= 480px
                768: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                // when window width is >= 640px
                992: {
                    slidesPerView: 5,
                    spaceBetween: 30
            },
        },
    });
</script>

<!-- <script>
  async function renderPartnersContent() {
      let partners = await getData('assets/data/partners.json');
      
      partnerElements = "";

      let images = partners.images.forEach(image => {
            partnerElements += `
            
            `
      })

      let html =
        ``;
      let container = document.querySelector('#partner');
      container.innerHTML = html;
      
      return true;
  }

  renderPartnersContent().then(res => {
    const swiperPartner = new Swiper(".swiperPartner", {
        grabCursor: true,
        loop: true,
        centeredSlides: false,
        slidesPerView: 2,
        spaceBetween: 10,
        breakpoints: {
                // when window width is >= 320px
                576: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                // when window width is >= 480px
                768: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                // when window width is >= 640px
                992: {
                    slidesPerView: 5,
                    spaceBetween: 30
            },
        },
    });
  }).catch(err => console.log(err));
</script> -->