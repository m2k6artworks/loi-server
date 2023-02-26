<section id="services" class="mb-5 pb-5"></section>

<script>
  async function renderServiceContent() {
      let services = await getData('assets/data/services.json');
      
      serviceElements = "";

      let cards = services.services.forEach(service => {
          serviceElements += `
            <div class="col-12 col-md-6 col-xl-3 mb-3 mb-xl-0">
                <div class="card card-services h-100">
                    <div class="card-body ${( (service.status == 0) ? 'bg-grey' : 'bg-dark-blue')} text-white p-4 d-flex flex-column">
                        <h2 class="card-title fs-4 mb-3">${service.title}</h2>
                        <p class="card-text fs-6">${service.description}</p>
                        <div class="mt-auto"><a href="${service.slug}" class="btn ps-0 btn-transparent text-white">${service.button_text} <i class="fas fa-arrow-right rotate-180 ms-3"></i></a></div>
                    </div>
                </div>
            </div>
            `
      })

      let html =
        `<div class="container my-5">
            <div class="poppins mb-5">
                <h1 class="fs-3 text-dark-blue">${services.title}</h1>
                <p>
                    <span>${services.description}</span>
                </p>
            </div>
            <div class="row px-3 px-xl-5">${serviceElements}</div>
        </div>`;
      let container = document.querySelector('#services');
      container.innerHTML = html;
  }

  renderServiceContent();
</script>