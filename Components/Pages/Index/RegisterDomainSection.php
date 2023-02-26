<section id="registerDomain" class="mb-5 pt-5 pb-4 px-3 px-sm-4 px-md-5 bg-dark-blue position-relative">
    <div class="container text-white poppins">
        <div class="poppins mb-5">
            <h1 class="fs-3 fw-semibold mb-2">Domain Terlengkap</h1>
            <p class="fs-5">
                Kami menyediakan berbagai domain mulai dari TLD, ccTLD, gTLD, dan Blockchain Domain
            </p>
        </div>
        <div class="row">
            <ul class="nav mb-4 d-flex flex-wrap" id="register-domain-tab" role="tablist">
                <li class="nav-item col-6 col-md-3 col-xl-2 mb-3 mb-md-0" role="presentation">
                    <button class="nav-link fs-5 rounded-1 btn btn-outline-light w-100 active" id="register-tab" data-bs-toggle="pill" data-bs-target="#pills-register" type="button" role="tab" aria-controls="pills-register" aria-selected="true">Register</button>
                </li>
                <li class="nav-item col-6 col-md-3 col-xl-2 mb-3 mb-md-0" role="presentation">
                    <button class="nav-link fs-5 rounded-1 btn btn-outline-light w-100 w-100" id="transfer-tab" data-bs-toggle="pill" data-bs-target="#pills-transfer" type="button" role="tab" aria-controls="pills-transfer" aria-selected="false">Transfer</button>
                </li>
            </ul>
            <div class="tab-content ps-0" id="pills-tabRegister">
                <div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
                    <div class="col-12 col-lg-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control input-lg" placeholder="yourdomain.com" aria-label="domain" aria-describedby="domain">
                            <button class="input-group-text btn btn-lg btn-primary" id="searchdomain"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-transfer" role="tabpanel" aria-labelledby="transfer-tab" tabindex="0">
                    <div class="col-12 col-lg-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control input-lg" placeholder="yourdomain.com" aria-label="domain" aria-describedby="domain">
                            <button class="input-group-text btn btn-lg btn-primary" id="searchdomain"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-auto">
                <span class="domainLevel fs-4 fw-bold">.co</span>
                <span class="domainPrice fs-5">Rp 100.000</span>
            </div>
            <div class="col-auto">
                <span class="domainLevel fs-4 fw-bold">.io</span>
                <span class="domainPrice fs-5">Rp 100.000</span>
            </div>
            <div class="col-auto">
                <span class="domainLevel fs-4 fw-bold">.id</span>
                <span class="domainPrice fs-5">Rp 100.000</span>
            </div>
            <div class="col-auto">
                <span class="domainLevel fs-4 fw-bold">.crypto</span>
                <span class="domainPrice fs-5">Rp 100.000</span>
            </div>
        </div>
    </div>
    <img src="./assets/images/logo/icann.png" class="position-absolute bottom-0 right-0 mb-1 d-none d-md-block">
</section>

<style>
    #registerDomain {

    }
    
    #registerDomain .nav-link.active, #registerDomain .nav-link:focus, #registerDomain .nav-link:hover {
        color: var(--bs-nav-link-hover-color);
    }

    #registerDomain .nav-link {
        color: white;
    }
</style>

<!-- <script>
  async function renderServiceContent() {
      let services = await getData('assets/data/services.json');
      
      serviceElements = "";

      let cards = services.services.forEach(service => {
          serviceElements += `
            
            `
      })

      let html =
        ``;
      let container = document.querySelector('#services');
      container.innerHTML = html;
  }

  renderServiceContent();
</script> -->