
@extends('layouts/main')
     
@section('container')
    <div class="row">
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
                    <a href="{{ route('students.create') }}" class="btn btn-success my-3">Tambah Data</a>
                </div>
            </div>
        </div>
        <br>
        <table id="example" class="ui celled table" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Rombel</th>
                    <th>Rayon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->rombel }}</td>
                    <td>{{ $student->rayon }}</td>
                    <td>
                    <form action="{{ route('students.destroy',$student->id) }}" method="POST">
               
                        <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
         
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    
    {!! $students->links() !!}
        
@endsection