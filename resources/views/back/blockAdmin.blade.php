@extends('back.layoutSuperAdmin')
@section('title','Dashboard')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Block Lembaga Yang Terdaftar</h4>
                    <p class="text-muted page-title-alt">SuperAdmin</p>
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
                    <div class="card-box">
                        <div class="card-header"><h3>Block Lembaga</h3></div>
                        <div class="card-body">
                            <table data-toggle="table"
                                    data-show-columns="false"
                                    data-page-list="[5, 10, 20]"
                                    data-page-size="5"
                                    data-pagination="true" data-show-pagination-switch="true" class="table-bordered ">
                                <thead>
                                    <tr>
                                        <th data-field="No" data-switchable="false">No</th>
                                        <th data-field="Nama Lembaga">Nama Lembaga</th>
                                        <th data-field="Jenis">Jenis</th>
                                        <th data-field="Email">Email</th>
                                        <th data-field="Action" class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php $no = 1 @endphp
                                    @foreach (\App\Http\Controllers\Fun\SuperAdmin::getTempats(1) as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->nama_tempat }}</td>
                                        <td>{{ $item->fasilitas }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            @php $act = ($item->is_block) ? 'active' : 'block' @endphp
                                            <form action="/admin/{{ $act }}Act" method="post">
                                            @method('put')
                                            {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                <input type="submit" class="btn btn-sm btn-{{ ($act === 'block') ? 'danger' : 'primary' }}" name="submit" value="{{ $act }}">
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
