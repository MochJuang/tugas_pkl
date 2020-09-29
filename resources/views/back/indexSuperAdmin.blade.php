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
                    </div>
                    <h4 class="page-title">Dashboard 2</h4>
                    <p class="text-muted page-title-alt">SuperAdmin</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 bg-white">
                        <i class="md md-account-child text-custom"></i>
                        <h2 class="m-0 text-dark counter font-600"></h2>
                        <div class="text-muted m-t-5">Lembaga Terdaftar</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
