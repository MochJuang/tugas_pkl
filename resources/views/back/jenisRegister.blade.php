@extends('back.layoutAuth')
@section('title','Pilih Jenis Test')

        @section('content')
        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading">
                <h3 class="text-center"> DAFTAR TEST YANG TERSEDIA </h3>
            </div>
            <div class="panel-body">
                @if(session()->has('message'))
                <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <form class="form-horizontal m-t-20" action="/auth/actJenis" method="post">
                {{ csrf_field() }}
                <label for="">SWAB</label>
                <div class="form-group ">
                    <div class="col-xs-3">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-swab" name="swab" type="checkbox" >
                            <label for="checkbox-swab"> Sedia
                        </div>
                    </div>
                    <div class="col-xs-5">
                        <input class="form-control" value="{{ old('swab_harga') }}" name="swab_harga" type="text" placeholder="Harga">
                        @error('swab_harga')
                            <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-xs-4">
                        <input class="form-control" value="{{ old('swab_limit') }}" name="swab_limit" type="text" placeholder="Limit">
                        @error('swab_limit')
                            <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <label for="">RAPID</label>
                <div class="form-group ">
                    <div class="col-xs-3">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-rapid" name="rapid" type="checkbox" >
                            <label for="checkbox-rapid"> Sedia
                        </div>
                    </div>
                    <div class="col-xs-5">
                        <input class="form-control" value="{{ old('rapid_harga') }}" name="rapid_harga" type="text" placeholder="Harga">
                        @error('rapid_harga')
                            <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-xs-4">
                        <input class="form-control" value="{{ old('rapid_limit') }}" name="rapid_limit" type="text" placeholder="Limit">
                        @error('rapid_limit')
                            <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
                            Register
                        </button>
                    </div>
                </div>

            </form>
            </div>
            </div>
                <div class="row">
            	<div class="col-sm-12 text-center">
            		<p>Don't have an account? <a href="/auth/register" class="text-primary m-l-5"><b>Sign Up</b></a></p>

                    </div>
            </div>

        </div>


@endsection
