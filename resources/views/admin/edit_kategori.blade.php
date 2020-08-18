@extends('aplikasi.layout')
@section('content')







                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            <div class="card-header">{{ __('Edit') }}</div>
                          </header>
                          <div class="panel-body">
                              <div class="form">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2"></div>
        <div class="col-lg-8">
            <div class="card">

                <br>
                    <center>
                <div class="card-body">

                    <form class="" method="POST" >
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="nis" class="col-md-2 col-form-label text-md-right">{{ __('Nama kategori') }}</label>

                            <div class="col-md-6">
                                <input id="nis" value="{{$data->nama_kategori}}" type="text" class="form-control @error('kelas') is-invalid @enderror" name="nama_kategori" placeholder="masukan nama kelas" required autocomplete="kelas" autofocus>

                                @error('kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>

                                <a href="{{URL::previous()}}" class="btn btn-danger">back</a>
                            </div>
                        </div>

                    </form>
                </div>
            </center>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
</div>
</div>






@endsection