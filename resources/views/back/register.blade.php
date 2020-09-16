@extends('back.layoutAuth')
@section('title','Register')

        @section('content')
        <script>
            $(document).ready(function(){
            })
        </script>
		<div class="account-pages"></div>
		<div class="clearfix"></div>
		<div class="wrapper-page">
			<div class="w-50 card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Sign Up to <strong class="text-custom">UBold</strong> </h3>
				</div>

				<div class="panel-body">
					<form class="form-horizontal m-t-20" action="index.html">

						<div class="form-group ">
                            <label for="">Nama Lembaga</label>
							<div class="col-xs-12">
								<input class="form-control" type="text" required="" >
							</div>
						</div>
						<div class="form-group ">
                            <label for="">Deskripsi</label>
							<div class="col-xs-12">
								<textarea name="deskripsi" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group ">
                            <label for="">Pilih Jenis Lembaga</label>
							<div class="col-xs-12">
                                <select class="form-control" name="Fasilitis" id="">
                                    <option>Rumah Sakit</option>
                                    <option>Poskesmas</option>
                                </select>
							</div>
						</div>
						<div class="form-group ">
                            <label for="">No Telepon</label>
							<div class="col-xs-12">
								<input class="form-control" type="number" required="">
							</div>
						</div>
						<div class="form-group ">
                            <label for="">Email</label>
							<div class="col-xs-12">
                                <input class="form-control" type="email" required="">
							</div>
						</div>
                        <div class="form-group ">
                            <label for="">Jumlah Negatif</label>
                            <div class="col-xs-12">
                                <input class="form-control" type="number" required="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="">Alamat</label>
							<div class="col-xs-12">
								<textarea name="alamat" class="form-control"></textarea>
							</div>
						</div>
                        <div class="form-group ">
                            <label for="">No Rekening</label>
							<div class="col-xs-12">
								<input type="text" name="" class="form-control" id="">
							</div>
						</div>
                        <div class="form-group">
                            <label class="control-label">Foto</label>
                            <div class="col-xs-12">
                                <input type="file" class="filestyle" data-buttonbefore="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <div class="checkbox checkbox-primary">
									<input id="checkbox-swab" type="checkbox" name="swab" value="true">
									<label for="checkbox-swab">SWAB</a></label>
								</div>
                            </label>
                            <div class="col-sm-6">
                                <p class="form-control-static"><input name="harga_swab" placeholder="Harga" class="form-control" type="text"></p>
                            </div>
                            <div class="col-sm-3">
                                <p class="form-control-static"><input name="limit_swab" placeholder="Limit" class="form-control" type="text"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <div class="checkbox checkbox-primary">
									<input id="checkbox-rapid" type="checkbox" name="rapid" value="true">
									<label for="checkbox-rapid">RAPID</a></label>
								</div>
                            </label>
                            <div class="col-sm-6">
                                <p class="form-control-static"><input name="harga_rapid" placeholder="Harga" class="form-control" type="text"></p>
                            </div>
                            <div class="col-sm-3">
                                <p class="form-control-static"><input name="limit_rapid" placeholder="Limit" class="form-control" type="text"></p>
                            </div>
                        </div>



						<div class="form-group">
							<div class="col-xs-12">
								<div class="checkbox checkbox-primary">
									<input id="checkbox-signup" type="checkbox" checked="checked">
									<label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
								</div>
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
						Already have account?<a href="page-login.html" class="text-primary m-l-5"><b>Sign In</b></a>
					</p>
				</div>
            </div>

        </div>

        <script src="/back/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>


		@endsection
