@extends('layouts/main')

@section('container')
<div class="col-lg-6">
    <div class="card">
        <form method="post" action="/notabsen/{{$notabsen->id}}" enctype="multipart/form-data">
            @method('patch')
                @csrf
                <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                    <div class="card-body card-block">
                        <div class="mb-3">
                          <label class="form-label">NIS</label>
                          <input type="text" name="nis" value="{{$notabsen->nis}}" class="form-control @error('nis') is-invalid @enderror" placeholder="Ketik NIS">
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
                        @if($notabsen->foto)
                          <img src="/post-images/{{$notabsen->foto}}" width="100px" height="100px">
                        @else
                          <p>Tidak Ada Foto</p>
                        @endif
                        <br>
                        <br>
                        <div class="mb-3">
                          <label class="form-label">Foto</label>
                          <input type="file" name="foto" value="{{$notabsen->foto}}" class="form-control  @error('foto') is-invalid @enderror" placeholder="Masukkan foto">
                          @error('foto')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                        
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        <a href="/notabsen" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
                </div>

@endsection