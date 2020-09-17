@extends('back.layoutAdmin')
@section('title','Dashboard')
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
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Checkbox Select</b></h4>
                                <p class="text-muted m-b-30 font-13">
                                    Example of checkbox select (Your text goes here).
                                </p>

                                <table data-toggle="table"
                                       data-page-size="10"
                                       data-pagination="true" class="table-bordered ">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="nama" data-switchable="false">Nama</th>
                                            <th data-field="jenis">Jenis Test</th>
                                            <th data-field="qty">QTY</th>
                                            <th data-field="total">Total</th>
                                            <th data-field="Metode">Motode Pembayaran</th>
                                            <th data-field="Detail">Detail</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                            <td>22 Jun 1972</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                            <td>22 Jun 1972</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                            <td>22 Jun 1972</td>
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
</div>
@endsection
