@extends('front.template')
@section('title','Register')
@section('content')


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>{{ $data->nama_tempat }}</li>
        </ol>
        <h2>{{ $data->nama_tempat }}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="/storage/{{ $data->foto }}" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Detail</h3>
            <ul>
              <li><strong>Fasilitas</strong>  {{ $data->fasilitas }}</li>
              <li><strong>Email</strong>  {{ $data->email }}</li>
              <li><strong>No Hp</strong>  {{ $data->no_telp }}, 2020</li>
              <li><strong>No Rekening</strong>  {{ $data->no_rek }}</li>
              <li><strong>Alamat</strong>  {{ $data->alamat }}</li>
              <li><strong>Jadwal Buka</strong>  {{ $data->jadwal_buka }}</li>
              <li><strong>Jumlah Negatif</strong>  <span class="badge badge-danger">{{ $data->jum_negatif }}</span> Kasus</li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <div class="row my-3">
            <div class="col-12 col-md-6 offset-md-2">
              <div class="card text-center">
                <div class="card-body">
                  <h4 class="card-title">Jenis Test</h4>
                  <table class="table">
                    <tr>
                      <th>Jenis Test</th>
                      <th>Harga</th>
                      <th>Limit Perhari</th>
                      <th>Tersedia</th>
                    </tr>
                    <?php foreach ($jenis as $key => $jenis): ?>
                      <tr>
                        <td>{{ $jenis->jenis }}</td>
                        <td>{{ number_format($jenis->harga,0,',','.') }}</td>
                        <td>{{ $jenis->limit }}/hari</td>
                        <td>{{ ($jenis->is_sedia) ? "Tersedia" : "Tidak Tersedia" }}</td>
                      </tr>
                    <?php endforeach ?>
                      <tr>
                        <td colspan="4">
                          <a href="/daftar/{{ $data->id }}" class="btn btn-success btn-block">Booking Online</a>
                        </td>
                      </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <h2>Deskripsi</h2>
          {!! $data->deskripsi !!}
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection
