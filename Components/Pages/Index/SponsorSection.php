<section id="sponsor" class="p-5">
    <div class="container d-flex flex-wrap align-items-center">
        <div class="col-12">
            <div class="position-relative">
                <div class="swiper swiperSponsor">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/digital-ocean.png" alt"digital ocean"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/azure.png" alt"azure"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/kubernetes.png" alt"kubernetes"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/docker.png" alt"docker"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/images/logo/aws.png" alt"aws"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #sponsor {
        background: rgba(42, 87, 154, 0.25);
    }

    .swiperSponsor .swiper-slide img {
        width: 100%;
        height: 50px;
        object-position: center;
        object-fit: contain;
    }
</style>

<script>
    const swiperSponsor = new Swiper(".swiperSponsor", {
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