@extends('layouts/app')
    
@section('content')

                  <div class="col-md-12">
                    @if (session('status'))
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <span class="badge badge-pill badge-success">Success</span>
                              {{session('status')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                      </div>
                    @endif
                    <center>
                    <div class="content mt-3">
                        <div class="card mb-3" style="width: 50%">
                            <img src="Gedung 2.jpg" class="card-img-top" alt="..." style="height: 10rem;">
                            <div class="card-body">
                              <h5 class="card-title">SMK Wikrama Bogor </h5>
                              <p class="card-text">Terima kasih telah absen, klik dibawah untuk menambahkan absen kembali !</p>
                              <a href="/notabsen/create" class="btn btn-primary">Submit Another Responses</a>
                              <a href="/user" class="btn btn-danger">Kembali</a>
                            </div>
                          </div>
                        </div>
                    </center>
                                </div>
                            </div><!-- .animated -->
                        </div><!-- .content -->
                
      @endsection