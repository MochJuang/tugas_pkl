@extends('back.layoutAuth')
@section('title','Login')

@section('content')
<div class="account-pages"></div>
    <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
                <div class="panel-heading">
                    <h3 class="text-center"> Successs !!!!! </h3>
                </div>
                <div class="panel-body text-center">
                    <h1>Terima Kasih</h1>
                    <h2>Prosess Pendaftaran Kamu Sedang Kami Proses !</h2>
                    <div class="row">
                      <div class="col text-center">
                        <a href="/auth" class="btn btn-success">Kembali Login !!</a>
                      </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
