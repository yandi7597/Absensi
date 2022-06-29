
@extends('layouts/main')
  
@section('container')   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="card">
<form action="{{route('students.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
    <div class="card-body card-block">
    <div class="mb-3">
        <label class="form-label">NIS</label>
        <input type="text" name="nis" value="{{old('nis')}}" class="form-control  @error('nis') is-invalid @enderror" placeholder="Masukkan Nis">
        @error('nis')
        <div class="invalid-feedback{{$message}}"></div>
        @enderror
        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
    </div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" value="{{old('nama')}}" class="form-control  @error('nama') is-invalid @enderror" placeholder="Masukkan Nama">
        @error('nama')
        <div class="invalid-feedback{{$message}}"></div>
        @enderror
        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
    </div>
    <div class="form-group">
        <div class="mb-3">
            <label class="form-label">Rombel</label>
                <select class="form-control" name="rombel">
                    <option value="">Pilih Rombel</option>
                    @foreach($rombel as $rombel)
                    <option value="{{$rombel->nama_rombel}}">{{$rombel->nama_rombel}}</option>
                    @endforeach
                </select>
            </div>
      </div>
      <div class="form-group">
        <div class="mb-3">
            <label class="form-label">Rayon</label>
                <select class="form-control" name="rayon">
                    <option value="">Pilih Rayon</option>
                    @foreach($rayon as $rayon)
                    <option value="{{$rayon->nama_rayon}}">{{$rayon->nama_rayon}}</option>
                    @endforeach
                </select>
            </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" value="{{old('username')}}" class="form-control  @error('username') is-invalid @enderror" placeholder="Masukkan Username">
        @error('username')
        <div class="invalid-feedback{{$message}}"></div>
        @enderror
        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" value="{{old('password')}}" class="form-control  @error('password') is-invalid @enderror" placeholder="Masukkan Password">
        @error('password')
        <div class="invalid-feedback{{$message}}"></div>
        @enderror
        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
      </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        <a href="/students" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>
@endsection