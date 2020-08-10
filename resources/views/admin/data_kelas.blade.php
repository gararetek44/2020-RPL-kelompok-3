@extends('aplikasi.layout')

@section('content')

<div class="row">
                <div class="col-md-12">
                    <section class="panel">
                          <header class="panel-heading">
                              <h3>Data Kelas</h3>

                          </header>
                    <div class="panel-body">
                    <div class=" pull-right "><a class="btn btn-primary btn-lg" href="tambah-kelas  " title="TAMBAH   KELAS">Tambah Kelas</a></div><br/><br/><br/>
                    <header>

                    <div class="col-sm-12">
                       <table class="table table-striped table-advance table-hover">
                                                   <tbody>
                                                      <tr>
                                                         <th><i class="icon_profile"></i> Kelas</th>
                                                         <th>aksi</th>

                                                      </tr>
                                                      @foreach($kelas as $kelas)
                                                      <tr>
                                                        <td>{{$kelas->nama_kelas}}</td>
                                                        <td><a href="edit-kelas" class="btn btn-primary"><i class="icon_pencil-edit"></i></a></td>
                                                      </tr>



                                                      @endforeach



                                                   </tbody>
                                                </table>
                                                </div>
                                                </header>
                    </div>
                    </section>
                </div>
              </div>





@endsection