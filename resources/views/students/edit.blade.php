@extends('layout.template')

@section('title','')

@section('container')

<div class="container">
    <div class="row">
        <div class="colo-6">
            <h1 class="mt-3">Form Edit Data Siswa</h1>
            <form method="POST" action="/edit/{{ $student->id }}">


                @method('PUT')
                @csrf


                <div class="form-group">
                    <label for="Nama">Nama :</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{$student->nama}}">
                    @error('nama')<div class = "invalid-feedback">{{$message}}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="nis">NIS :</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Masukkan nis" name="nis" value="{{$student->nis}}">
                    @error('nis')<div class = "invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="kelas">Pilih Kelas :</label>
                    <select name="kelas"  value="{{ $student->kelas }}" class="form-control @error('kelas') is-invalid @enderror" id="kelas">
                        <option value="">Pilih</option>
                        <option>VII A</option>
                        <option>VII B</option>
                    </select>
                     @error('kelas')<div class = "invalid-feedback">{{$message}}</div>@enderror

                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan alamat" name="alamat" value="{{$student->alamat}}">
                    @error('alamat')<div class = "invalid-feedback">{{$message}}</div>@enderror
                </div>

                <button type="submit" class="btn btn-success">Edit Data Siswa!</button>

                <a href="/student" class="btn btn-primary">

                    <i class="fas fa-undo-alt mr-1"></i>
                    kembali
                </a>
            </form>


        </div>
    </div>
</div>
@endsection
