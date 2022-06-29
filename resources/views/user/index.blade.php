
@extends('layouts/app')
  
@section('content')   
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

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="Gedung 2.jpg" class="d-block mx-lg-auto img-fluid" alt=".." width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">SMK Wikrama Bogor</h1>
      <p class="lead">Silahkan isi Absensi dibawah ini !</p>
      <br>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="{{ route('absen.create') }}" class="btn btn-primary btn-lg px-4 me-md-2">Hadir</a>
        <a href="{{ route('notabsen.create') }}" class="btn btn-danger btn-lg px-4">Tidak Hadir</a>
      </div>
    </div>
  </div>
</div>
@endsection