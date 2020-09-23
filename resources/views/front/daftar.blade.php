@extends('front.template')
@section('title','Pendaftaran Covid')
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>{{ $nama }}</li>
          <li>Daftar Test</a></li>
        </ol>
        <h2>{{ $nama }}</h2>

      </div>
    </section><!-- End Breadcrumbs -->
    @php print_r($errors) @endphp
    <div class="row">
        <div class="col">
             @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible" style="margin-top: 10px !important" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>
    </div>
    <section class="inner-page">
        <div class="container">
            <form method="post" action="/daftarAct/{{$id}}">
                {{csrf_field() }}
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input value="{{ old('nama') }}" type="text" name="nama" class="form-control" id="nama" required>
                        @error('nama')
                            <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input value="{{ old('email') }}" type="email" name="email" class="form-control" id="email" required>
                        @error('email')
                            <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea name="alamat" class="form-control" id="alamat">{{ old('alamat') }}</textarea>
                      @error('alamat')
                            <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                      <input value="{{ old('umur') }}" type="number" name="umur" class="form-control" id="umur" required>
                        @error('umur')
                            <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input value="{{ old('tgl_lahir') }}" type="date" name="tgl_lahir" class="form-control" id="umur" required>
                        @error('tgl_lahir')
                            <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Untuk Berapa Orang</label>
                    <div class="col-sm-10">
                      <input value="{{ old('qty') }}" type="number" name="qty" class="form-control" id="umur" required>
                        @error('qty')
                            <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Jenis Test</label>
                    <div class="col-sm-10">
                        <select name="test" id="test" class="form-control">
                            @foreach($jenis as $item)
                            <option value="{{ $item->id }}">{{ $item->jenis }} --Rp.{{ number_format($item->harga,0,',','') }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Metode Pembayaran</label>
                    <div class="col-sm-10">
                        <select name="metode" id="test" class="form-control">
                            @foreach($metode as $item)
                            <option value="{{ $item->id }}">{{ $item->metode }}</option>
                            @endforeach
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
