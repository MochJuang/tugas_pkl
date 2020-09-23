@extends('front.template')
@section('title','Register')
@section('content')
<script>
  $(document).ready(function() {
    function addClick(id) {
      $.ajax({
        url: '/addClick/'+id,
      })
    }
    $('input[name=cari]').keyup(function(event) {
      let data = $(this).val()
      $.ajax({
        url: '/cari',
        type: 'get',
        dataType: 'json',
        data: {cari: data},
        success:function(data) {
          let result = ''
          $.each(data, function(index, val) {
             result +=   `<div class="col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="card mb-3">
                              <div class="row no-gutters">
                                <div class="col-md-4">
                                  <img src="/storage/${val.foto}" class="card-img img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body">
                                    <h5 class="card-title">${val.nama_tempat}</h5>
                                    <p>${val.fasilitas} </p>
                                    <p>${val.alamat} </p>
                                    <a onclick="return addClick(${val.id})" href="/detail/${val.id}" class="card-link">Detail</a>
                                  </div>
                                </div>
                              </div>
                            </div>    
                          </div>`
          });
          $('#lists').html(result)
        }
      })
      
    });
  });
</script>
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
              @foreach($data as $item)
              <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="card mb-3">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="/storage/{{ $item->foto }}" class="card-img img-fluid" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_tempat }}</h5>
                        <p>{{ $item->fasilitas }} </p>
                        <p>{{ $item->alamat }} </p>
                        <a onclick="return addClick(<?php echo $item->id ?>)"  class="card-link">Detail</a>
                      </div>
                    </div>
                  </div>
                </div>    
              </div>
              @endforeach
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
                    <input type="text" name="cari" class="form-control mb-5" placeholder="Cari Tempat....">
                </form>
                </div>
            </div>

        <div class="row">
            <div class="col-lg-12 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
              <div class="row" id="lists"></div>
            </div>
        </div>

        </div>
    </section><!-- End Skills Section -->

  </main><!-- End #main -->

 @endsection
