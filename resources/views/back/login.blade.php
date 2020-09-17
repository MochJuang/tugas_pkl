@extends('back.layoutAuth')
@section('title','Login')

        @section('content')
        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading">
                <h3 class="text-center"> LOGIN </h3>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-danger alert-dismissible" style="margin-top: 10px !important" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    {{ session()->get('message') }}
                </div>
            @endif

            <div class="panel-body">
            <form class="form-horizontal m-t-20" action="/auth/actLogin" method="post">
                {{ csrf_field() }}
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" value="{{ old('username') }}" name="username" type="text" required="" placeholder="Username">
                        @error('username')
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

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" value="{{ old('password') }}" name="password" type="password" required="" placeholder="Password">
                        @error('password')
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
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
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
