
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
            <form method="post" action="/rayon">
                @csrf
                <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
                <div class="card-body card-block">
                <div class="mb-3">
            <div class="mb-3">
                <label class="form-label">Rayon</label>
                <input type="text" name="nama_rayon" value="{{old('nama_rayon')}}" class="form-control  @error('nama_rayon') is-invalid @enderror" placeholder="Masukkan Rayon">
                @error('nama_rayon')
                <div class="invalid-feedback{{$message}}"></div>
                @enderror
                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Pembimbing</label>
                <input type="text" name="pembimbing" value="{{old('pembimbing')}}" class="form-control  @error('pembimbing') is-invalid @enderror" placeholder="Masukkan Nama Pembimbing">
                @error('pembimbing')
                <div class="invalid-feedback{{$message}}"></div>
                @enderror
                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
       
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/rayon" class="btn btn-danger">Kembali</a>
        </div>
    </form>
</div>
</div>
</div>
@endsection





