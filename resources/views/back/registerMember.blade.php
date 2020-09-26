@extends('back.layoutAdmin')
@section('title','Dashboard')
@section('content')
<script>
        $(document).ready(function(){
            console.log($('input#all').prop('checked'))
        $('input#all').click(function(){

            console.log($('input#all'));
            if($(this).prop("checked") == true){
                $('input.child').prop('checked',true)
            }

            else if($(this).prop("checked") == false){
                $('input.child').prop('checked',false)
            }

        });

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
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Checkbox Select</b></h4>
                                <p class="text-muted m-b-30 font-13">
                                    Example of checkbox select (Your text goes here).
                                </p>
                                <form action="/admin/veritedMember" method="post">
                                {{ csrf_field() }}
                                @method('put')
                                <table data-toggle="table"
                                       data-page-size="10"
                                       data-pagination="true" class="table-bordered ">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="all"></th>
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
