<section id="bottomNavigation" class="mb-5 pb-5"></section>

<script>
  async function renderBottomNavContent() {
      let navigations = await getData('assets/data/bottom_nav.json');
      
      socialMediaElements = "";

      let icons = navigations.social_media.forEach(socmed => {
        socialMediaElements += `
            <a href="${socmed.url}" class="me-3 text-dark"><i class="${socmed.icon}"></i></a>
        `
      })

      menuElements = "";

      let menus = navigations.menus.forEach(menu => {
        subMenuElements = ""
        
        menu.sub_menus.forEach(sub_menu => {
            subMenuElements += `<a href="${sub_menu.url}" class="mb-3 text-dark text-underline-none">${sub_menu.title}</a>`
        })

        menuElements += `
            <div class="poppins mb-5 pe-0 pe-sm-3 col-6 col-sm-3">
                <h1 class="fs-4 text-dark-blue mb-4">${menu.title}</h1>
                <div class="d-flex flex-column">
                    ${subMenuElements}
                </div>
            </div>
        `
      })

      let html =
        `<div class="container my-5 py-5">
            <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="poppins mb-5 col-12 col-xl-6">
                        <h1 class="fs-4 text-dark-blue mb-4">${navigations.title}</h1>
                        <p class="fs-14px">
                        ${navigations.description}
                        </p>
                        <div class="d-flex flex-wrap">
                            ${socialMediaElements}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6 d-flex flex-wrap justify-content-sm-end">
                    ${menuElements}
                </div>
            </div>
        </div>`;
      let container = document.querySelector('#bottomNavigation');
      container.innerHTML = html;
  }

  renderBottomNavContent();
</script>