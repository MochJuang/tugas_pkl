@extends('back.layoutAdmin')
@section('title','Register')
@section('content')

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
				<div class="col-12">
					<div class="card-box">
						<div class="card-body">
							<img src="/storage/{{ $data->foto }}" id="foto_" alt="" class="img-fluid img-thumbnail">
							<p></p>
							<div class="row mt-5">
			                        <div class="col-12 col-md-6">   
			                            <table class="table">
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
			                            </table>
			                        </div>
			                        <div class="col-12 col-md-6">
			                            <table class="table">
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
			                    </div>
			                    <div class="row">
			                    	<div class="col-3">
			                    		<a href="/admin/reg" class="btn btn-primary">Kembali</a>
			                    	</div>
			                    	<div class="col-3">
			                    		<form action="/admin/veritedMember" method="post">
			                    			@method('put')
			                    			{{ csrf_field() }}
			                    			<input type="hidden" name="data[]" value="{{ $data->id }}">
			                    			<button type="submit" class="btn btn-success d-inline">Konfirmasi</button>
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