@extends('back.layoutAdmin')
@section('title','Konfirmasi Pembayaran')
@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Konfirmasi Pembayaran</h4>
                    <p class="text-muted page-title-alt">Admin</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Silahkan Pilih Yang Ingin Di Konfirmasi</b></h4>
                                <form action="/admin/veritedMember" method="post">
                                {{ csrf_field() }}
                                @method('put')
                                <table data-toggle="table"
                                       data-page-size="10"
                                       data-pagination="true" class="table-bordered ">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th data-field="nama" data-switchable="false">Nama</th>
                                            <th data-field="jenis">Jenis Test</th>
                                            <th data-field="qty">QTY</th>
                                            <th data-field="total">Total</th>
                                            <th data-field="Metode">Motode Pembayaran</th>
                                            <th data-field="Detail">Detail</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach($data as $item)
                                        <tr>
                                            <td><input type="checkbox" class="child" name="data[]" value="{{ $item->id }}"></td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->jenis }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>Rp. {{ number_format($item->total_bayar,0,',','.') }}</td>
                                            <td><span class="label label-table label-success">{{ $item->metode }}</span></td>
                                            <td><a href="/admin/registerTempat/{{ $item->id }}" class="btn btn-sm btn-success">Detail</a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                                <button type="submit" class="btn btn-success"> Konfirmasi </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
