@extends('back.layoutSuperAdmin')
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
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 bg-white">
                        <i class="md md-attach-money text-primary"></i>
                        <h2 class="m-0 text-dark counter font-600">50568</h2>
                        <div class="text-muted m-t-5">Total Revenue</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 bg-white">
                        <i class="md md-add-shopping-cart text-pink"></i>
                        <h2 class="m-0 text-dark counter font-600">1256</h2>
                        <div class="text-muted m-t-5">Sales</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 bg-white">
                        <i class="md md-store-mall-directory text-info"></i>
                        <h2 class="m-0 text-dark counter font-600">18</h2>
                        <div class="text-muted m-t-5">Stores</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 bg-white">
                        <i class="md md-account-child text-custom"></i>
                        <h2 class="m-0 text-dark counter font-600">8564</h2>
                        <div class="text-muted m-t-5">Users</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
