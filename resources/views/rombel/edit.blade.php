
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
        <form method="post" action="/rombel/{{$rombel->id}}">
            @method('patch')
                @csrf
                <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                <div class="card-body card-block">
                <div class="mb-3">
                    <label class="form-label">Rombel</label>
                    <input type="text" name="nama_rombel" value="{{$rombel->nama_rombel}}" class="form-control  @error('nama_rombel') is-invalid @enderror" placeholder="Ketik nama_Rombel">
                    @error('nama_rombel')
                      <div class="invalid-feedback{{$message}}"></div>
                    @enderror
                    <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
                <a href="/rombel" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection

