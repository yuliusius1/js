<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <title>Kantin FTI | Home Page</title>
</head>
<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light custom-navbar-background">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Kantin FTI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="continer-fluid banner-section">
    <div class="banner-container">
      <div class="background-image">
        <img src="{{ asset('assets/img/background1.jpeg') }}" class="image-banner">
      </div>
      <div class="layer-background">
        <div class="d-flex h-100 flex-column align-items-center justify-content-center">
          <div class="banner-title">
            <h1 class="banner-title-text">Kantin FTI UKSW</h1>
          </div>
          <div class="banner-description">
            <h2 class="banner-description-text">< Come hungry, leave happy /></h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5 mb-5 content-section">
    <div class="row">
      <div class="col-md-12">
        <h3>Menu</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h4>Makanan</h4>
      </div>
      <div class="product-list">
        <div class="row slick">
          <div class="col-md-3">
            <div class="card">
              <div class="product-image-container">
                <img src="{{ asset('assets/img/bakso.jpeg') }}" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakso</h5>
                <p class="card-text">
                  <div class="product-description">
                    Bakso kuah dengan mie, dan sayur
                  </div>
                  <div class="product-price mt-2">
                    <div class="old-price">
                      Harga lama: Rp10.000
                    </div>
                    <div class="new-price">
                      Harga: <span>Rp8.000</span>
                    </div>
                  </div>
                </p>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="product-image-container">
                <img src="{{ asset('assets/img/indomie_goreng.jpg') }}" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Indomie Goreng</h5>
                <p class="card-text">
                  <div class="product-description">
                    Makanan anak kos yang selalu nikmat
                  </div>
                  <div class="product-price mt-2">
                    <div class="old-price">
                      Harga lama: Rp4.000
                    </div>
                    <div class="new-price">
                      Harga: <span>Rp3.000</span>
                    </div>
                  </div>
                </p>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="product-image-container">
                <img src="{{ asset('assets/img/lays_seaweed.jpeg') }}" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Lays seaweed</h5>
                <p class="card-text">
                  <div class="product-description">
                    Camilan penunda lapar Lays rasa seaweed
                  </div>
                  <div class="product-price mt-2">
                    <div class="old-price">
                      Harga lama: Rp5.000
                    </div>
                    <div class="new-price">
                      Harga: <span>Rp3.000</span>
                    </div>
                  </div>
                </p>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="product-image-container">
                <img src="{{ asset('assets/img/nasi_goreng.jpg') }}" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Nasi Goreng</h5>
                <p class="card-text">
                  <div class="product-description">
                    Nasi goreng hangat dengan berbagai isian
                  </div>
                  <div class="product-price mt-2">
                    <div class="old-price">
                      Harga lama: Rp10.000
                    </div>
                    <div class="new-price">
                      Harga: <span>Rp8.000</span>
                    </div>
                  </div>
                </p>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="product-image-container">
                <img src="{{ asset('assets/img/bakso.jpeg') }}" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakso</h5>
                <p class="card-text">
                  <div class="product-description">
                    Bakso kuah dengan mie, dan sayur
                  </div>
                  <div class="product-price mt-2">
                    <div class="old-price">
                      Harga lama: Rp10.000
                    </div>
                    <div class="new-price">
                      Harga: <span>Rp8.000</span>
                    </div>
                  </div>
                </p>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="product-image-container">
                <img src="{{ asset('assets/img/bakso.jpeg') }}" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakso</h5>
                <p class="card-text">
                  <div class="product-description">
                    Bakso kuah dengan mie, dan sayur
                  </div>
                  <div class="product-price mt-2">
                    <div class="old-price">
                      Harga lama: Rp10.000
                    </div>
                    <div class="new-price">
                      Harga: <span>Rp8.000</span>
                    </div>
                  </div>
                </p>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="product-image-container">
                <img src="{{ asset('assets/img/bakso.jpeg') }}" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakso</h5>
                <p class="card-text">
                  <div class="product-description">
                    Bakso kuah dengan mie, dan sayur
                  </div>
                  <div class="product-price mt-2">
                    <div class="old-price">
                      Harga lama: Rp10.000
                    </div>
                    <div class="new-price">
                      Harga: <span>Rp8.000</span>
                    </div>
                  </div>
                </p>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="product-image-container">
                <img src="{{ asset('assets/img/bakso.jpeg') }}" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakso</h5>
                <p class="card-text">
                  <div class="product-description">
                    Bakso kuah dengan mie, dan sayur
                  </div>
                  <div class="product-price mt-2">
                    <div class="old-price">
                      Harga lama: Rp10.000
                    </div>
                    <div class="new-price">
                      Harga: <span>Rp8.000</span>
                    </div>
                  </div>
                </p>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="product-image-container">
                <img src="{{ asset('assets/img/bakso.jpeg') }}" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakso</h5>
                <p class="card-text">
                  <div class="product-description">
                    Bakso kuah dengan mie, dan sayur
                  </div>
                  <div class="product-price mt-2">
                    <div class="old-price">
                      Harga lama: Rp10.000
                    </div>
                    <div class="new-price">
                      Harga: <span>Rp8.000</span>
                    </div>
                  </div>
                </p>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="product-image-container">
                <img src="{{ asset('assets/img/bakso.jpeg') }}" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakso</h5>
                <p class="card-text">
                  <div class="product-description">
                    Bakso kuah dengan mie, dan sayur
                  </div>
                  <div class="product-price mt-2">
                    <div class="old-price">
                      Harga lama: Rp10.000
                    </div>
                    <div class="new-price">
                      Harga: <span>Rp8.000</span>
                    </div>
                  </div>
                </p>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="product-image-container">
                <img src="{{ asset('assets/img/bakso.jpeg') }}" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakso</h5>
                <p class="card-text">
                  <div class="product-description">
                    Bakso kuah dengan mie, dan sayur
                  </div>
                  <div class="product-price mt-2">
                    <div class="old-price">
                      Harga lama: Rp10.000
                    </div>
                    <div class="new-price">
                      Harga: <span>Rp8.000</span>
                    </div>
                  </div>
                </p>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="product-image-container">
                <img src="{{ asset('assets/img/bakso.jpeg') }}" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Bakso</h5>
                <p class="card-text">
                  <div class="product-description">
                    Bakso kuah dengan mie, dan sayur
                  </div>
                  <div class="product-price mt-2">
                    <div class="old-price">
                      Harga lama: Rp10.000
                    </div>
                    <div class="new-price">
                      Harga: <span>Rp8.000</span>
                    </div>
                  </div>
                </p>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h4>Minuman</h4>
      </div>
      <div class="product-list">
        <div class="row">
        </div>
      </div>
    </div>

  </div>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>

  <script src="assets/slick/slick.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>