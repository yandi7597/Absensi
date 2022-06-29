
@extends('layouts/main')
     
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
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
                    <a href="/rayon/create" class="btn btn-success my-3">Tambah Data</a>
                </div>
            </div>
        </div>
    <br>
    <table id="example" class="ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Rayon</th>
                <th>Pembimbing</th>
                <th style="width: 20%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rayon as $ryn)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $ryn->nama_rayon }}</td>
                <td>{{ $ryn->pembimbing}}</td>
                <td>
                    <a href="/rayon/{{$ryn->id}}/edit" class="btn btn-secondary">Edit</a>
                    <form action="/rayon/{{$ryn->id}}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        
@endsection

