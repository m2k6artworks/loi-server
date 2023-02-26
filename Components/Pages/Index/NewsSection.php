<section id="news" class="mb-5 pb-5"></section>

<script>
  async function renderNewContent() {
      let news = await getData('assets/data/news.json');
      
      newElements = "";

      let cards = news.articles.forEach(article => {
          newElements += `
            <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                <div class="card mb-4 border-none">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="${article.image_url}" class="img-fluid h-100 obj-fit-cover obj-position-center w-100" alt="${article.image_caption}">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h2 class="card-title fs-5">${article.title}</h2>
                                <p class="card-text fs-12px mb-1">${article.description}</p>
                                <a href="${article.slug}" class="card-text text-light-blue text-underline-none fs-14px">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `
      })

      let html =
        `<div class="container my-5">
            <div class="poppins mb-5">
                <h1 class="fs-3 text-dark-blue">${news.title}</h1>
                <p>
                    <span>${news.description}</span>
                </p>
            </div>
            <div class="row">${newElements}</div>
        </div>`;
      let container = document.querySelector('#news');
      container.innerHTML = html;
  }

  renderNewContent();
</script>