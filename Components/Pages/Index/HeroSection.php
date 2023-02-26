<section id="hero" class="poppins bg-white">
  <div class="d-flex flex-wrap h-100 align-items-center w-100">
    <div class="col-12 col-lg-6 mt-5 mt-lg-0 p-3 p-sm-5">
      <h1 class="text-dark-blue fw-semibold poppins fs-2 pe-0 pe-lg-5 mb-4">Server Cepat dan Aman Yang Berkinerja Lebih dari apa yang Anda Butuhkan! </h1>
      <div class="d-flex flex-column mb-4"> 
        <div class="d-flex flex-wrap align-items-center mb-3">
          <img src="./assets/icons/cservice-icon.svg" class="me-3 bg-dark-blue p-2 rounded-circle" height="35" width="35">
          <span>Fulltime Support</span>
        </div>
        <div class="d-flex flex-wrap align-items-center mb-3">
          <img src="./assets/icons/clouddb-icon.svg" class="me-3 bg-dark-blue p-2 rounded-circle" height="35" width="35">
          <span>Free Backups, Migrations &amp; SSL</span>
        </div>
      </div>
      <div class="d-flex flex-wrap">
        <a href="#" class="btn btn-primary btn-lg me-3 fs-6 rounded-0 col-12 col-sm-3 mb-3 mb-sm-0">Domain</a>
        <a href="#" class="btn btn-primary btn-lg me-3 fs-6 rounded-0 col-12 col-sm-3">Server</a>
      </div>
    </div>
    <div class="col-12 col-lg-6 h-100 d-none d-lg-block">
      <img src="./assets/images/background/hero/server-room.png" class="w-100 h-100 obj-position-center obj-fit-cover" alt="server room">
    </div>
  </div>
</section>

<!-- <script>
  async function renderHeroContent() {
      let heros = await getData('assets/data/hero.json');
      
      buttonElements = "";

      let buttons = heros.buttons.forEach(button => {
          buttonElements += `<a href="${button.url}" class="btn btn-outline-primary me-2">${button.title}</a>`
      })

      let html =
        `<div class="row h-100 align-items-center">
          <div class="col-12 col-lg-6 pe-5 mt-5 mt-lg-0 order-2">
            <h1 class="text-grey fw-bolder inter">${heros.title}</span>
            </h1>
            <p class="text-dark">${heros.description}</p>
            <div>
              ${buttonElements}
            </div>
          </div>
          <div class="col-12 col-lg-6 order-lg-2">
            <div class="ratio ratio-16x9">
              <iframe src="${heros.youtube_url}"></iframe>
            </div>
          </div>
        </div>
        <div class="position-absolute d-none d-lg-block" style="right: 0;bottom: -145px;">
          <img src="./assets/images/decoration/hero-decoration.png">
        </div>`;
      let container = document.querySelector('#hero');
      container.innerHTML = html;
  }

  renderHeroContent();
</script> -->