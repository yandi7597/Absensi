
@extends('layouts/main')
     
@section('container')

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session ('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card-body">
                <div class="card w-60">
                  <div class="card-body">
                    <h5 class="card-title">Tambah Data</h5>
                    <p class="card-text">Klik Tambah Data untuk menambahkan data.</p>
                    <a href="/rombel/create" class="btn btn-success my-3">Tambah Data</a>
                </div>
            </div>
        </div>
        <form class="row" method="GET" action="{{url('/rombel')}}">
            <div class="col-md-4 offset-md-6 col-sm-4">
              <input type="text" class="form-control" name="keyword" placeholder="Pencarian">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-dark">Cari</button>
            </div>
        </form>
    <br>
    <center>
    <ul class="list-group" style="width: 50rem">
        @foreach ($rombel as $rmb)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            
            {{$rmb->nama_rombel}}   
            
              <form action="/rombel/{{$rmb->id}}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href="/rombel/{{$rmb->id}}/edit" class="btn btn-secondary">Edit</a>
              </form> 
        </li>
        @endforeach
        </ul>
    </center>
        
@endsection

