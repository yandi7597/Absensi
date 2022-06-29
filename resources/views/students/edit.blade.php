
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
        <form action="{{ route('students.update',$student->id) }}" method="POST" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')
                <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                <div class="card-body card-block">
                <div class="mb-3">
        <div class="mb-3">
        <label class="form-label">NIS</label>
        <input type="text" name="nis" value="{{$student->nis}}" class="form-control  @error('nis') is-invalid @enderror" placeholder="Ketik Nis">
        @error('nis')
        <div class="invalid-feedback{{$message}}"></div>
        @enderror
        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" value="{{$student->nama}}" class="form-control  @error('nama') is-invalid @enderror" placeholder="Ketik Nama">
            @error('nama')
            <div class="invalid-feedback{{$message}}"></div>
            @enderror
            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
        </div>
        <div class="form-group">
        <div class="mb-3">
          <label class="form-label">Rombel</label>
          <select class="form-control" name="rombel">
              @foreach($rombel as $rombel)
              <option value="{{$rombel->nama_rombel}}" @if($student->rombel == $rombel->nama_rombel)selected @endif>{{$rombel->nama_rombel}}</option>
              @endforeach
          </select>      
            </div>
      </div>
      <div class="form-group">
        <div class="mb-3">
          <label class="form-label">Rayon</label>
          <select class="form-control" name="rayon">
              @foreach($rayon as $rayon)
              <option value="{{$rayon->nama_rayon}}" @if($student->rayon == $rayon->nama_rayon)selected @endif>{{$rayon->nama_rayon}}</option>
              @endforeach
          </select>      
            </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" value="{{$student->username}}" class="form-control  @error('username') is-invalid @enderror" placeholder="Ketik Username">
        @error('username')
        <div class="invalid-feedback{{$message}}"></div>
        @enderror
        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="text" name="password" value="{{$student->password}}" class="form-control  @error('password') is-invalid @enderror" placeholder="Ketik Password">
        @error('password')
        <div class="invalid-feedback{{$message}}"></div>
        @enderror
        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
      </div>

    <button type="submit" class="btn btn-primary">Update Data</button>
    <a href="/rayon" class="btn btn-danger">Kembali</a>
</form>
</div>
</div>
</div>
@endsection

