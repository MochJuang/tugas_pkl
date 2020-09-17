@extends('front.template')
@section('title','Pendaftaran Covid')
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <form>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="nama" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea name="alamat" class="form-control" id="alamat"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                      <input type="number" name="umur" class="form-control" id="umur" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Untuk Berapa Orang</label>
                    <div class="col-sm-10">
                      <input type="number" name="qty" class="form-control" id="umur" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Jenis Test</label>
                    <div class="col-sm-10">
                        <select name="test" id="test" class="form-control">
                            <option value="">SWAB --Rp.150.000</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Metode Pembayaran</label>
                    <div class="col-sm-10">
                        <select name="metode" id="test" class="form-control">
                            <option value="">Transfer</option>
                            <option value="">Langsung</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @endsection
