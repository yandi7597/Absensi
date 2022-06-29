@extends('layouts/app')

@section('content')
<div class="row justify-content-center">
<div class="col-lg-6">
    <div class="card">
            <form method="POST" action="/absen" enctype="multipart/form-data">
                @csrf
                <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
                <div class="card-body card-block">
                    <div class="mb-3">
                        <label class="form-label">NIS</label>
                        <input type="text" name="nis" id="nis" value="{{old('nis')}}" class="form-control @error('nis') is-invalid @enderror" placeholder="Ketik NIS">
                        @error('nis')
                            <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Jam Kedatangan</label>
                          <input type="time" name="jam_kedatangan" id="jam_kedatangan" value="{{old('jam_kedatangan')}}" class="form-control  @error('jam_kedatangan') is-invalid @enderror">
                          @error('jam_kedatangan')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Jam Kepulangan</label>
                        <input type="time" name="jam_kepulangan" id="jam_kepulangan" value="{{old('jam_kepulangan')}}" class="form-control  @error('jam_kepulangan') is-invalid @enderror">
                        @error('jam_kepulangan')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" id="foto" value="{{old('foto')}}" class="form-control @error('foto') is-invalid @enderror" placeholder="Masukkan Foto">
                        @error('foto')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
        
            <button type="submit" class="btn btn-primary" onclick="">Tambah Data</button>
            <a href="/user" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
</div>   
@endsection