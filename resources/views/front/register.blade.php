@extends('front.template')
@section('title','Register')
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
            <div class="row">
                <div class="col-12 col-md-6">
                    <h2>Detail Pembayaran</h2>
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <td>Moch Juang</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>Moch Juang</td>
                        </tr>
                        <tr>
                            <th>Umur</th>
                            <td>Moch Juang</td>
                        </tr>
                        <tr>
                            <th>QTY</th>
                            <td>Moch Juang</td>
                        </tr>
                        <tr>
                            <th>Jenis Test</th>
                            <td>Moch Juang</td>
                        </tr>
                        <tr>
                            <th>Harga Pertest</th>
                            <td>Moch Juang</td>
                        </tr>
                        <tr>
                            <th>Total Harga</th>
                            <td>Rp.300.000</td>
                        </tr>
                    </table>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <form action="" method="post">
                        <div class="form-group">
                          <label for="">Upload Bukti Pembayaran</label>
                          <input type="file" class="form-control-file" name="bukti" id="bukti" placeholder="" aria-describedby="fileHelpId">
                        </div>
                        <img src="/assets/img/virus.png " id="pembayaran" class="img-fluid" alt="">
                        <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
