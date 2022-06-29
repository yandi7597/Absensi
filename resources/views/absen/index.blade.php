
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
        <h2 class="title-1">Data Hadir</h2>
    <br>
    <table id="example" class="ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Jam Kedatangan</th>
                <th>Jam Kepulangan</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absen as $absens)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $absens->nis }}</td>
                <td>{{ $absens->jam_kedatangan}}</td>
                <td>{{ $absens->jam_kepulangan}}</td>
                <td><img src="/post-images/{{$absens->foto}}" height="100px" width="100px"></td>
                <td>
                    <a href="/absen/{{$absens->id}}/edit" class="btn btn-secondary">Edit</a>
                    <form action="/absen/{{$absens->id}}" method="POST" class="d-inline">
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

