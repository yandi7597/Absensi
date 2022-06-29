@extends('layouts/main')

@section('container')
<div class="col-lg-6">
    <div class="card">
        <form method="post" action="/absen/{{$absen->id}}" enctype="multipart/form-data">
            @method('patch')
                @csrf
                <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                    <div class="card-body card-block">
                        <div class="mb-3">
                          <label class="form-label">NIS</label>
                          <input type="text" name="nis" value="{{$absen->nis}}" class="form-control @error('nis') is-invalid @enderror" placeholder="Ketik NIS">
                          @error('nis')
                              <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jam Kedatangan</label>
                            <input type="time" name="jam_kedatangan" value="{{$absen->jam_kedatangan}}" class="form-control  @error('jam_kedatangan') is-invalid @enderror">
                            @error('jam_kedatangan')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jam Kepulangan</label>
                            <input type="time" name="jam_kepulangan" value="{{$absen->jam_kepulangan}}" class="form-control  @error('jam_kepulangan') is-invalid @enderror">
                            @error('jam_kepulangan')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        @if($absen->foto)
                          <img src="/post-images/{{$absen->foto}}" width="100px" height="100px">
                        @else
                          <p>Tidak Ada Foto</p>
                        @endif
                        <br>
                        <div class="mb-3">
                          <label class="form-label">Foto</label>
                          <input type="file" name="foto" value="{{$absen->foto}}" class="form-control  @error('foto') is-invalid @enderror" placeholder="Masukkan foto">
                          @error('foto')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                        
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        <a href="/absen" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
                </div>

@endsection