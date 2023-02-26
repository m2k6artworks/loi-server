<section id="AboutUs" class="mb-5 pb-5"></section>

<script>
  async function renderAboutUsContent() {
      let abouts = await getData('assets/data/about_us.json');
      
      visionList = "";

      let visions = abouts.visions.forEach(vision => {
            visionList += `
                <div>
                    <p>${vision.description}</p>
                </div>
            `
      })

      missionList = "";

      let missions = abouts.missions.forEach(mission => {
            missionList += `
                <div>
                    <p>${mission.description}</p>
                </div>
            `
      })

      benefitList = "";

      let benefits = abouts.benefits.forEach(benefit => {
            benefitList += `
                <div class="benefit raleway col-12 col-md-6 text-center text-sm-start">
                    <img loading="lazy" src="${benefit.image}" alt="${benefit.title}" class="mb-3 obj-position-center obj-fit-cover" width="75" height="75">
                    <h4>${benefit.title}</h4>
                    <p>${benefit.description}</p>
                </div>
            `
      })

      let html =
        `<div class="container my-5">
            <div class="poppins mb-5">
                <h1 class="fs-3 text-dark-blue">${abouts.title}</h1>
                <p>
                    <span>${abouts.description}</span>
                </p>
            </div>
            <div class="row">
                <div class="vission-mission-about-purpose-wrapper col-12 col-lg-6">
                    <div id="vission-mission" class="raleway ">
                        <div>
                            <div class="contain-wrapper">
                                <h3>Visi</h3>
                                ${visionList}
                            </div>
                            <div class="contain-wrapper">
                                <h3>Misi</h3>
                                ${missionList}
                            </div>
                        </div>
                    </div>
                </div>
                <div id="benefit-section" class="col-12 col-lg-6">
                    <div class="row">
                        ${benefitList}
                    </div>
                </div>
            </div>
        </div>`
        ;

      let container = document.querySelector('#AboutUs');
      container.innerHTML = html;
  }

  renderAboutUsContent();
</script>