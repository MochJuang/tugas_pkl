@extends('back.layoutAdmin')
@section('title','Dashboard')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">List Member Yang Telah Terdaftar</h4>
                    <p class="text-muted page-title-alt">Admin</p>
                </div>
            </div>
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
                        <div class="card-header"><h3>Daftar Antrian Pengetesan Online</h3></div>
                        <div class="card-body">
                            <table id="demo-foo-filtering" class="table table-striped toggle-circle m-b-0" data-page-size="7">
                                <thead>
                                    <tr>
                                        <th data-toggle="Nama">Nama</th>
                                        <th data-hide="No Antrian">No Antrian</th>
                                        <th data-hide="tgl_daftar">Tanggal Daftar</th>
                                        <th data-hide="Alamat">Alamat</th>
                                        <th data-hide="phone, tablet">Status</th>
                                        <th data-hide="phone, tablet">Sudah</th>
                                        <th data-hide="phone, tablet">Detail</th>
                                    </tr>
                                </thead>
                                <div class="form-inline m-b-20">
                                    <div class="row">
                                        <div class="col-sm-6 text-xs-center">
                                            <div class="form-group">
                                                <label class="control-label m-r-5">Filter Jenis Test</label>
                                                <select id="demo-foo-filter-status" class="form-control input-sm">
                                                    <option value="">Show all</option>
                                                    <option value="SWAB">SWAB</option>
                                                    <option value="RAPID">RAPID</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-xs-center text-right">
                                            <div class="form-group">
                                                <input id="demo-foo-search" type="text" placeholder="Search" class="form-control input-sm" autocomplete="on">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <tbody>
                                    @foreach($data as $data)
                                    <tr>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->no_antrian }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td><span class="label label-table label-{{ ($data->jenis == 'SWAB') ? 'success' : 'primary' }}">{{$data->jenis}}</span></td>
                                        <td><span class="label label-table label-{{ ($data->is_test == 1) ? 'success' : 'danger' }}">{{($data->is_test) ? 'Sudah' : 'Belum'}}</span></td>
                                        <td><a href="/admin/registerTempat/{{ $data->id }}" class="btn btn-sm btn-success">Detail</a></td>

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

