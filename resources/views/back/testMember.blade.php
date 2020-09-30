@extends('back.layoutAdmin')
@section('title','Pengetesan Test')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Hasil Pentesan Test</h4>
                    <p class="text-muted page-title-alt">Admin</p>
                </div>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible" style="margin-top: 10px !important" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="" method="get">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-control-label col-md-3">Set Tanggal</label>
                                        <div class="col-md-7">
                                            <input type="date" value="{{ $date }}" class="form-control form-control-sm" name="date">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-success">Set</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="card-header"><h3>Pegetesan</h3></div>
                            <div class="card-body">
                            <table data-toggle="table"
                                    data-show-columns="false"
                                    data-page-list="[5, 10, 20]"
                                    data-page-size="5"
                                    data-pagination="true" data-show-pagination-switch="true" class="table-bordered ">
                                <thead>
                                    <tr>
                                        <th data-field="No" data-switchable="false">No</th>
                                        <th data-field="Nama Lembaga">Nama</th>
                                        <th data-field="Jenis">Alamat</th>
                                        <th data-field="Email">Test</th>
                                        <th data-field="Action" class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php $no = 1 @endphp
                                    @foreach($data as $data)
                                    <tr>
                                        <td><?php echo $no;$no++ ?></td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->jenis }}</td>
                                        <td>
                                            <form action="/admin/actTest" method="post">
                                                @method('put')
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                                <select name="input" class="" id="">
                                                    <option value="positif">Reactif</option>
                                                    <option value="negatif">Non Reactif</option>
                                                </select>
                                                <button type="submit" name="submit">Set</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
