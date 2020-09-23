@extends('back.layoutAdmin')
@section('title','Dashboard')
@section('content')
<meta name="csrf-token" content="{!! csrf_token() !!}">
<link href="/back/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
<script src="/assets/js/plupload.full.min.js"></script>
<script>
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
                url: '/admin/changeFoto/'+id,
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
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                        <ul class="dropdown-menu drop-menu-right" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <h4 class="page-title">Dashboard 2</h4>
                    <p class="text-muted page-title-alt">Welcome to Ubold admin panel !</p>
                </div>
            </div>
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
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="card-body">
                                <img src="/storage/{{ $data->foto }}" id="foto_" alt="" class="img-fluid img-thumbnail">
                                <form id="form-data" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="file" class="filestyle d-inline" style="float: right !importatant" name="foto" id="foto" data-input="false" style="margin-top: -20px !important">
                                </form>
                                <p></p>



                                <div class="accordion" id="profile" role="tablist" aria-multiselectable="true">
                                    <div class="card">  
                                        <div class="card-header" role="tab" id="utama">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#profile" href="#section1ContentId" aria-expanded="false" aria-controls="section1ContentId">
                                                  <button type="button" name="" id="" class="btn btn-success btn-block">Pribadi</button>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="utama">
                                            <div class="card-body">
                                                <div class="row mt-5">
                                                    <div class="col-12 col-md-6">   
                                                        <table class="table">
                                                            <tr>
                                                                <th>Nama Lembaga</th>
                                                                <td>
                                                                    {{ $data->nama_tempat }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email</th>
                                                                <td>
                                                                    {{ $data->email }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Alamat</th>
                                                                <td>
                                                                    {{ $data->alamat }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>No Rekening</th>
                                                                <td>
                                                                    {{ $data->no_rek }}
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <table class="table">
                                                            <tr>
                                                                <th>No HP</th>
                                                                <td>
                                                                        {{ $data->no_telp }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Fasilitas</th>
                                                                <td>
                                                                    {{ $data->fasilitas }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Jadwal Buka</th>
                                                                <td>
                                                                    {{ $data->jadwal_buka }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Jumlah Negatif</th>
                                                                <td>
                                                                    <i class="badge badge-danger">{{ $data->jum_negatif }} </i> Kasus
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-right">
                                                        <a href="/admin/changeUtama" title="Edit" class="btn btn-warning my-3"><i class="fa fa-edit"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="Auth">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#profile" href="#auth" aria-expanded="true" aria-controls="auth">
                                          <button class="btn btn-success btn-block">
                                              Reset Auth
                                          </button>
                                        </a>
                                            </h5>
                                        </div>
                                        <div id="auth" class="collapse in" role="tabpanel" aria-labelledby="Auth">
                                            <div class="card-body">
                                                <form action="/admin/changeUser" method="post">
                                                {{ csrf_field() }}
                                                @method('put')
                                                  <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                                                    <div class="col-sm-10">
                                                      <input type="text" name="username" value="{{old('username')}}" class="form-control" id="staticEmail" >
                                                       @error('username')
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
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                                    <div class="col-sm-10">
                                                      <input type="password" name="password" value="{{old('password')}}" class="form-control" id="inputPassword">
                                                        @error('password')
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
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Ketik Ulang Password</label>
                                                    <div class="col-sm-10">
                                                      <input type="password" name="confirm_password" value="{{old('confirm_password')}}"  class="form-control" id="staticEmail" >
                                                        @error('confirm_password')
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
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Masukkan Password Awal</label>
                                                    <div class="col-sm-10">
                                                      <input type="password" name="password_awal" value="{{old('password_awal')}}" class="form-control" id="staticEmail" >
                                                        @error('password_awal')
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
                                                  <div class="form-group">
                                                      <button type="submit" name="submit" class="btn btn-success ">Edit</button>
                                                  </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                        <div class="card-header" role="tab" id="Auth">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#profile" href="#jenis" aria-expanded="true" aria-controls="auth">
                                          <button class="btn btn-success btn-block">
                                              Jenis Test
                                          </button>
                                        </a>
                                            </h5>
                                        </div>
                                        <div id="jenis" class="collapse in" role="tabpanel" aria-labelledby="Auth">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        
                                                        <form class="form-horizontal m-t-20" action="/admin/editJenis" method="post">
                                                            @method('put')
                                                            {{ csrf_field() }}
                                                            <label for="">SWAB</label>
                                                            <div class="form-group ">
                                                                <div class="col-xs-3">
                                                                    <div class="checkbox checkbox-primary">
                                                                        <input id="checkbox-swab" {{ ($jenis[0]->is_sedia) ? "checked" : null }} name="swab" type="checkbox" >
                                                                        <label for="checkbox-swab"> Sedia
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <input class="form-control" value="{{ (old('swab_harga')) ? old('swab_harga') : $jenis[0]->harga }}" name="swab_harga" type="text" placeholder="Harga">
                                                                    @error('swab_harga')
                                                                        <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                <span class="sr-only">Close</span>
                                                                            </button>
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <input class="form-control" value="{{ (old('swab_limit')) ? old('swab_limit') : $jenis[0]->limit }}" name="swab_limit" type="text" placeholder="Limit">
                                                                    @error('swab_limit')
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
                                                            <label for="">RAPID</label>
                                                            <div class="form-group ">
                                                                <div class="col-xs-3">
                                                                    <div class="checkbox checkbox-primary">
                                                                        <input id="checkbox-rapid" {{ ($jenis[1]->is_sedia) ? "checked" : null }} name="rapid" type="checkbox" >
                                                                        <label for="checkbox-rapid"> Sedia
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <input class="form-control" value="{{ (old('rapid_harga')) ? old('rapid_harga') : $jenis[1]->harga }}" name="rapid_harga" type="text" placeholder="Harga">
                                                                    @error('rapid_harga')
                                                                        <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                <span class="sr-only">Close</span>
                                                                            </button>
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <input class="form-control" value="{{ (old('rapid_limit')) ? old('rapid_limit') : $jenis[1]->limit }}" name="rapid_limit" type="text" placeholder="Limit">
                                                                    @error('rapid_limit')
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
                                                            <div class="form-group text-center m-t-40">
                                                                <div class="col-xs-12">
                                                                    <button class="btn btn-warning waves-effect waves-light" type="submit">
                                                                        Edit
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                        <div class="card-header" role="tab" id="Auth">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#profile" href="#deskripsi" aria-expanded="true" aria-controls="auth">
                                          <button class="btn btn-success btn-block">
                                              Deskripsi
                                          </button>
                                        </a>
                                            </h5>
                                        </div>
                                        <div id="deskripsi" class="collapse in" role="tabpanel" aria-labelledby="Auth">
                                            <div class="card-body">
                                                <p>
                                                    <a href="/admin/changeDeskripsi" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                </p>
                                                {!! $data->deskripsi !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                        <div class="card-header" role="tab" id="Auth">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#profile" href="#peta" aria-expanded="true" aria-controls="auth">
                                          <button class="btn btn-success btn-block">
                                              Peta
                                          </button>
                                        </a>
                                            </h5>
                                        </div>
                                        <div id="peta" class="collapse in" role="tabpanel" aria-labelledby="Auth">
                                            <div class="card-body">
                                                <div class="card-box">
                                                    <div id="gmaps-markers" class="gmaps"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="/back/assets/plugins/moment/moment.js"></script>
<script type="text/javascript" src="/back/assets/plugins/x-editable/js/bootstrap-editable.min.js"></script>
<script type="text/javascript" src="/back/assets/pages/jquery.xeditable.js"></script>
<script src="/back/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="/back/assets/plugins/gmaps/gmaps.min.js"></script>
<!-- demo codes -->
<script src="/back/assets/pages/jquery.gmaps.js"></script>
<script>
    $(document).ready(function(){
        $('input[name=lembaga]').keyUp(e => {
            console.log(e.val())
        })
    }
</script>

@endsection
