@extends('front.template')
@section('title','Register')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Ingin Mencari Tempat SWAB/Rapid Test</h1>
          <h2>Disinilah Tempatnya</h2>
          <div class="d-lg-flex">
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/virus.png" class="img-fluid animated" alt="">

        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
            </div>

            <div class="row">

              <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="assets/img/virus.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                          Nam
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div>    
              </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                <h4>Pencarian Tempat</h4>
                <form action="" method="post">
                    <input type="text" name="email" class="form-control mb-5" placeholder="Cari Tempat....">
                </form>
                </div>
            </div>

        <div class="row">
            <div class="col-lg-12 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                <ul class="list-unstyled">
                    <li class="media">
                      <img class="mr-3" src="/assets/img/virus.png" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      </div>
                    </li>
                    <li class="media my-4">
                      <img class="mr-3" src="/assets/img/virus.png" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3" src="/assets/img/virus.png" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      </div>
                    </li>
                  </ul>
            </div>
        </div>

        </div>
    </section><!-- End Skills Section -->

  </main><!-- End #main -->

 @endsection
