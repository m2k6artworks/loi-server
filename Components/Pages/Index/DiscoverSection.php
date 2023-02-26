<section id="discover" class="bg-dark-blue d-flex flex-wrap align-items-center justify-content-between py-5 px-2 px-md-5 fs-6 justify-content-center w-100"></section>

<script>
  async function renderDiscoverContent() {
      let discovers = await getData('assets/data/discover.json');

      let html =
        `<div class="text-light poppins col-12 col-lg-auto d-flex justify-content-center mb-4 mb-lg-0 text-center text-lg-left">
            <h1 class="fs-4">${discovers.title}</h1>
        </div>
        <div class="button-wrap col-12 col-lg-auto d-flex justify-content-center">
            <a href="${discovers.button_url}" class="btn btn-lg btn-outline-light">${discovers.button_text}</a>
        </div>
        `;
      let container = document.querySelector('#discover');
      container.innerHTML = html;
  }

  renderDiscoverContent();
</script>