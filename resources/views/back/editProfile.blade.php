@extends('back.layoutAdmin')
@section('title','Edit Profile Utama')
@section('content')
<?php  ?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Edit Porofile</h4>
                    <p class="text-muted page-title-alt">Admin</p>
                </div>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="card-body">
                                	<div class="row mt-5">
                                        <form action="/admin/actChangeUtama" method="post">
                                        {{ csrf_field() }}
                                        @method('put')
	                                        <div class="col-12 col-md-6">
	                                            <table class="table">
	                                                <tr>
	                                                    <th>Nama Lembaga</th>
	                                                    <td>
	                                                        <input type="text" name="nama_tempat" class="form-control" value="{{(old('nama_tempat')) ? old('nama_tempat') : $data->nama_tempat }}" required="">
	                                                    	@error('nama_tempat')
							                                    <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
							                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							                                            <span aria-hidden="true">&times;</span>
							                                            <span class="sr-only">Close</span>
							                                        </button>
							                                        {{ $message }}
							                                    </div>
							                                @enderror
	                                                    </td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Email</th>
	                                                    <td>
	                                                        <input type="email" name="email" class="form-control" value="{{ (old('email')) ? old('email') : $data->email }}" required="">
	                                                    	@error('email')
							                                    <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
							                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							                                            <span aria-hidden="true">&times;</span>
							                                            <span class="sr-only">Close</span>
							                                        </button>
							                                        {{ $message }}
							                                    </div>
							                                @enderror
	                                                    </td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Alamat</th>
	                                                    <td>
	                                                        <textarea name="alamat" class="form-control" id="" cols="30" rows="3">{{ (old('alamat')) ? old('alamat') : $data->alamat }}</textarea>
	                                                    	@error('alamat')
							                                    <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
							                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							                                            <span aria-hidden="true">&times;</span>
							                                            <span class="sr-only">Close</span>
							                                        </button>
							                                        {{ $message }}
							                                    </div>
							                                @enderror
	                                                    </td>
	                                                </tr>
	                                                <tr>
	                                                    <th>No Rekening</th>
	                                                    <td>
	                                                        <input type="number" name="no_rek" class="form-control" value="{{ (old('no_rek')) ? old('no_rek') : $data->no_rek }}" required="">
	                                                    	@error('no_rek')
							                                    <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
							                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							                                            <span aria-hidden="true">&times;</span>
							                                            <span class="sr-only">Close</span>
							                                        </button>
							                                        {{ $message }}
							                                    </div>
							                                @enderror
	                                                    </td>
	                                                </tr>
	                                            </table>
	                                        </div>
	                                        <div class="col-12 col-md-6">
	                                            <table class="table">
	                                                <tr>
	                                                    <th>No HP</th>
	                                                    <td>
	                                                        <input type="number" name="no_telp" class="form-control" value="{{( old('no_telp')) ? old('no_telp') : $data->no_telp }}" required="">
	                                                    	@error('no_telp')
							                                    <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
							                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							                                            <span aria-hidden="true">&times;</span>
							                                            <span class="sr-only">Close</span>
							                                        </button>
							                                        {{ $message }}
							                                    </div>
							                                @enderror
	                                                    </td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Fasilitas</th>
	                                                    <td>
	                                                        <select class="form-control" value="{{ old('id_fasilitas') }}" name="id_fasilitas" id="">
							                                    @foreach (\App\Fasitilas_master::all() as $item)
							                                        @if($item->id == old('id_fasilitas'))
							                                            <option value="{{ $item->id }}" selected>{{ $item->fasilitas }} </option>
							                                        @else
							                                            <option value="{{ $item->id }}">{{ $item->fasilitas }} </option>
							                                        @endif
							                                    @endforeach
							                                </select>
	                                                    	@error('fasilitas')
							                                    <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
							                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							                                            <span aria-hidden="true">&times;</span>
							                                            <span class="sr-only">Close</span>
							                                        </button>
							                                        {{ $message }}
							                                    </div>
							                                @enderror
	                                                    </td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Jadwal Buka</th>
	                                                    <td>
	                                                        <div class="form-group ">
																<div class="col-xs-6">
									                                @php 
									                                	$jadwal_buka1 = substr($data->jadwal_buka,0,5);
									                                	$jadwal_buka2 = substr($data->jadwal_buka,6,10);
									                                @endphp
									                                <input type="time" name="jadwal_buka1" value="{{ (old('jadwal_buka1')) ? old('jadwal_buka1') : $jadwal_buka1 }}" class="form-control" id="">
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
									                                <input type="time" name="jadwal_buka2" value="{{ (old('jadwal_buka2')) ? old('jadwal_buka2') : $jadwal_buka2 }}" class="form-control" id="">
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
	                                                    </td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Jumlah Negatif</th>
	                                                    <td>
	                                                    	<input type="number" name="jum_negatif" class="form-control" value="{{( old('jum_negatif')) ? old('jum_negatif') : $data->jum_negatif }}" required="">
	                                                    	@error('jum_negatif')
							                                    <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
							                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							                                            <span aria-hidden="true">&times;</span>
							                                            <span class="sr-only">Close</span>
							                                        </button>
							                                        {{ $message }}
							                                    </div>
							                                @enderror
	                                                    </td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Konfirmasi Password</th>
	                                                    <td>
	                                                    	<input type="password" name="confirm" class="form-control" value="{{ old('confirm') }}" required="">
	                                                    	@error('confirm')
							                                    <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
							                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							                                            <span aria-hidden="true">&times;</span>
							                                            <span class="sr-only">Close</span>
							                                        </button>
							                                        {{ $message }}
							                                    </div>
							                                @enderror
	                                                    </td>
	                                                </tr>
	                                            </table>

	                                        </div>
	                                        <div class="row">
	                                        	<div class="col">
	                                        		<button type="submit" class="btn btn-primary btn-block">Edit</button>
	                                        	</div>
	                                        </div>
	                                        <div class="row">
	                                        	<div class="col">
	                                        		<ul>
	                                        			@foreach($errors as $item)
	                                        				<li>$item</li>
	                                        			@endforeach
	                                        		</ul>
	                                        	</div>
	                                        </div>
                                        </form>   
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

@endsection
