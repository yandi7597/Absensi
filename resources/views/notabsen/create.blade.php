@extends('layouts/app')

@section('content')
<div class="row justify-content-center">
<div class="col-lg-6">
    <div class="card">
            <form method="POST" action="/notabsen" enctype="multipart/form-data">
                @csrf
                <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
                <div class="card-body card-block">
                    <div class="mb-3">
                        <label class="form-label">NIS</label>
                        <input type="text" name="nis" value="{{old('nis')}}" class="form-control @error('nis') is-invalid @enderror" placeholder="Ketik NIS">
                        @error('nis')
                            <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                      <label class="form-label">Keterangan</label>
                      <select name="keterangan" class="form-control">
                          <option value="">Pilih</option>
                          <option value="Sakit">Sakit</option>
                          <option value="Izin">Izin</option>
                          <option value="Alfa">Alfa</option>
                      </select>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" value="{{old('foto')}}" class="form-control @error('foto') is-invalid @enderror" placeholder="Masukkan Foto">
                        @error('foto')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
        
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/absen" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
</div>
    
    @endsection