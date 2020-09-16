@extends('back.layoutSuperAdmin')
@section('title','Dashboard')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
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
                                    <tr>
                                        <td>dfgsdf</td>
                                        <td>dfgsdf</td>
                                        <td>dfgsdf</td>
                                        <td>dfgsdf</td>
                                        <td>dfgsdf</td>
                                    </tr>
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
