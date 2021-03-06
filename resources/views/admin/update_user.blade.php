@extends('aplikasi.layout')
@section('admin')
<li class="sub-menu active" >
<a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>FITUR Admin</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="/data-kategori">data kategori</a></li>
                          @yield('sidebar')
                          <li><a class="" href="/data-kelas">data kelas</a></li>
                          <li><a class="" href="/data-user">data user</a></li>
                          <li><a class="" href="/data-pencalon">data pencalonan</a></li>
                          <li><a class="" href="/data-calon">data kandidat</a></li>

                      </ul>
                  </li>
@endsection

@section('content')

                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            <div class="card-header">{{ __('Update') }}</div>
                          </header>
                          <div class="panel-body">
                              <div class="form">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2"></div>
        <div class="col-lg-8">
            <div class="card">

                <br>

                <div class="card-body">

                    <form class="" method="POST" >
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="nis" class="col-md-2 col-form-label text-md-right">{{ __('Nis') }}</label>

                            <div class="col-md-6">
                                <input id="nis" type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{$data->nis}}" required autocomplete="nis" autofocus>

                                @error('nis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                                    <label for="kelas" class="col-md-2 col-form-label text-md-right">{{ __('Kelas') }}</label>

                                                    <div class="col-md-6">
                                                       <select class="form-control" name="id_kelas"  id="">
                                                       @foreach($kelas as $Kelas)
                                                       <option value="{{$Kelas->id}}">{{$Kelas->angkatan}}-{{$Kelas->nama_kelas}}</option>
                                                       @endforeach

                                                       </select>
                                                        @error('kelas')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                        <div class="form-group row">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>





                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>

                                <a href="/data-user" class="btn btn-danger">back</a>
                            </div>
                        </div>

                    </form>
                </div>

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
