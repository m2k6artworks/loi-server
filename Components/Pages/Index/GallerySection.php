<section id="gallery" class="mb-5 pb-5"></section>

<script>
  async function renderGalleriesContent() {
      let galleries = await getData('assets/data/galleries.json');
      
      galleryElements = "";

      let images = galleries.images.forEach(image => {
            galleryElements += `
            <div class="swiper-slide">
                <img src="${image.url}" alt"${image.caption}"/>
            </div>
            `
      })

      let html =
        `<div class="container my-5">
            <div class="poppins mb-5">
                <h1 class="fs-3 text-dark-blue">${galleries.title}</h1>
                <p>
                    <span>${galleries.description}</span>
                </p>
            </div>
            <div class="position-relative">
                <div class="swiper swiperGallery" style="width: 75%;padding: 0px 20vw;">
                    <div class="swiper-wrapper">
                        ${galleryElements}
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>`;
      let container = document.querySelector('#gallery');
      container.innerHTML = html;
      
      return true;
  }

  renderGalleriesContent().then(res => {
        const swiperGallery = new Swiper(".swiperGallery", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            initialSlide: 1,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
  }).catch(err => console.log(err));

    

</script>