@extends('back.layoutAuth')
@section('title','Confirm')
@section('content')
<div class="account-pages"></div>
		<div class="clearfix"></div>
		<div class="wrapper-page">
			<div class=" card-box">
				<div class="panel-heading">
					<h3 class="text-center"> <strong class="text-custom">Register</strong> </h3>
				</div>

				<div class="panel-body">
					<form class="form-horizontal m-t-20" action="/auth/actRegister" method="POST">
                        {{ csrf_field() }}
						<div class="form-group ">
                            <label for="">Username</label>
							<div class="col-xs-12">
								<input class="form-control mb-3" name="username" value="{{ old('username') }}" type="text" required="" >
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
                            <label for="">Password</label>
							<div class="col-xs-12">
								<input class="form-control mb-3" name="password" value="{{ old('password') }}" type="password" required="" >
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
						<div class="form-group">
                            <label for="">Confirm Password</label>
							<div class="col-xs-12">
								<input class="form-control mb-3" name="confirm_password" value="{{ old('confirm_password') }}" type="password" required="" >
                                @error('confirm_password')
                                    <div class="alert alert-danger alert-dismissible" role="alert">
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
								<div class="checkbox checkbox-primary">
									<input id="checkbox-signup" name="check" type="checkbox">
									<label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
                                </div>
                                @error('check')
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
					<p>
						Already have account?<a href="/auth" class="text-primary m-l-5"><b>Sign In</b></a>
					</p>
				</div>
			</div>

		</div>
@endsection
