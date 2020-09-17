@extends('back.layoutAuth')
@section('title','Register')

        @section('content')
        <script>
            $(document).ready(function(){
            })
        </script>
		<div class="account-pages"></div>
		<div class="clearfix"></div>
		<div class="wrapper-page">
			<div class="w-50 card-box">
				<div class="panel-heading">
					<h3 class="text-center"> <strong class="text-custom">Deskripsi Lembaga</strong> </h3>
				</div>

				<div class="panel-body">
					<form class="form-horizontal m-t-20" action="/auth/actRegisterTempat" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
						<div class="form-group ">
                            <label for="">Nama Lembaga</label>
							<div class="col-xs-12">
								<input class="form-control" type="text" required="" value="{{ old('nama_lembaga') }}" name="nama_lembaga">
                                @error('nama_lembaga')
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
						<div class="form-group ">
                            <label for="">Deskripsi</label>
							<div class="col-xs-12">
                                <textarea name="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
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
						<div class="form-group ">
                            <label for="">Pilih Jenis Lembaga</label>
							<div class="col-xs-12">
                                <select class="form-control" value="{{ old('id_fasilitas') }}" name="id_fasilitas" id="">
                                    @foreach (\App\Fasitilas_master::all() as $item)
                                        @if($item->id == old('id_fasilitas'))
                                            <option value="{{ $item->id }}" selected>{{ $item->fasilitas }} </option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->fasilitas }} </option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('id_fasilitas')
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
						<div class="form-group ">
                            <label for="">No Telepon</label>
							<div class="col-xs-12">
								<input class="form-control" type="number" value="{{ old('no_telp') }}" name="no_telp" required="">
                                @error('no_telp')
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
                        <label for="">Jadwal Buka</label>
						<div class="form-group ">
							<div class="col-xs-6">
                                @php $hari = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'] @endphp
								<select name="jadwal_buka1" class="form-control" id="">
                                    @foreach ($hari as $item)
                                        @if($item == old('jadwal_buka1'))
                                            <option value="{{$item}}" selected>{{$item}}</option>
                                        @else
                                            <option value="{{$item}}">{{$item}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('jadwal_buka1')
                                    <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                @enderror
							</div>
                            <div class="col-xs-6">
                                <select name="jadwal_buka2" class="form-control" id="">
                                    @foreach ($hari as $item)
                                        @if($item == old('jadwal_buka2'))
                                            <option value="{{$item}}" selected>{{$item}}</option>
                                        @else
                                            <option value="{{$item}}">{{$item}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('jadwal_buka2')
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
						<div class="form-group ">
                            <label for="">Email</label>
							<div class="col-xs-12">
                                <input class="form-control" type="email" value="{{ old('email') }}" name="email" required="">
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
                        <div class="form-group ">
                            <label for="">Jumlah Negatif</label>
                            <div class="col-xs-12">
                                <input class="form-control" type="number" value="{{ old('jum_negatif') }}" name="jum_negatif" required="">
                                @error('jum_negatif')
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
                        <div class="form-group ">
                            <label for="">Alamat</label>
							<div class="col-xs-12">
                                <textarea name="alamat" class="form-control">{{ old('alamat') }}</textarea>
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
                        <div class="form-group ">
                            <label for="">No Rekening</label>
							<div class="col-xs-12">
								<input type="text" value="{{ old('no_rek') }}" name="no_rek" class="form-control" id="">
                                @error('no_rek')
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
                            <label class="control-label">Foto</label>
                            <div class="col-xs-12">
                                <input type="file" class="filestyle" value="{{ old('foto') }}" name="foto" data-buttonbefore="true">
                                @error('foto')
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
							<div class="col-xs-12">
								<div class="checkbox checkbox-primary">
									<input id="checkbox-signup" name="check" type="checkbox" checked="checked">
									<label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
								</div>
							</div>
						</div>

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
									Register
								</button>
							</div>
						</div>

                    </form>

                </div>
			</div>

        </div>

        <script src="/back/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>


		@endsection
