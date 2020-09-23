@extends('front.template')
@section('title','Register')
@section('content')
<meta name="csrf-token" content="{!! csrf_token() !!}">
<script type="text/javascript">
    $(document).ready( function () {

        $('#foto').change(function(e){
            var file_data = $(this).prop("files")[0];
            var form_data = new FormData();
            form_data.append("foto", file_data);
            let crsf = $('meta[name="csrf-token"]').attr('content')
            let id = '{{ $id }}'
            $.ajaxSetup({
                headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/changeRegister/'+id,
                dataType: 'script',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(data){
                    // alert('succes')
                    let path = '/storage/'+ JSON.parse(data)
                    $('#foto_').attr('src',path)
                }
            });
        })

    });
</script>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Verfifikasi Pembayaran</li>
        </ol>
        <h2>Vertifikasi Pembayaran</h2>

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
                            <td>{{ $data->nama }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $data->alamat }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>{{ $data->tgl_lahir }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $data->email }}</td>
                        </tr>
                        <tr>
                            <th>Umur</th>
                            <td>{{ $data->umur }}</td>
                        </tr>
                        <tr>
                            <th>QTY</th>
                            <td>{{ $data->qty }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Test</th>
                            <td>{{ $data->jenis }}</td>
                        </tr>
                        <tr>
                            <th>Harga Pertest</th>
                            <td>Rp. {{ number_format($data->harga,0,',','.') }}</td>
                        </tr>
                        <tr>
                            <th>Metode Pembayaran</th>
                            <td>{{ $data->metode }}</td>
                        </tr>
                        <tr>
                            <th>Total Harga</th>
                            <td>Rp. {{ number_format($data->total_bayar,0,',','.') }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <form action="/success/{{ $id }}" method="post">
                        <div class="form-group">
                          <label for="">Upload Bukti Pembayaran</label>
                          <input type="file" required="" class="form-control-file" id="foto" name="foto" id="bukti" placeholder="" aria-describedby="fileHelpId">
                        </div>
                        <img src="/storage/{{ $data->foto }}" id="foto_" class="img-fluid" alt="">
                        <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
