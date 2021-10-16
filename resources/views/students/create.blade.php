@extends('layout.template')

@section('title','')

@section('container')

<div class="container">
    <div class="row">
        <div class="colo-6">
            <h1 class="mt-3">Silahkan Data Siswa</h1>
            <form method="POST" action="/student">
                @csrf

                <div class="form-group">
                    <label for="input1">Nama :</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Lengkap" name="nama" value="{{old('nama')}}">
                    @error('nama')<div class = "invalid-feedback">{{$message}}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="input2">NIS :</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Masukkan nis" name="nis" value="{{old('nis')}}">
                    @error('nis')<div class = "invalid-feedback">{{$message}}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="input3"> Pilih Kelas :</label>
                    <select name="kelas"  value="{{old('kelas') }}" class="form-control @error('kelas') is-invalid @enderror" id="kelas">
                        <option value="">Pilih</option>
                        <option>VII A</option>
                        <option>VII B</option>
                    </select>
                    @error('kelas')
                    <div class = "invalid-feedback">{{$message}}
                    </div>@enderror
                </div>

                <div class="form-group">
                    <label for="input4">Alamat :</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{old('alamat')}}">
                    @error('alamat')<div class = "invalid-feedback">{{$message}}</div>@enderror
                </div>


                <button type="submit" class="btn btn-primary">Tambah Data !</button>

                <a href="/student" class="btn btn-primary">

                    <i class="fas fa-undo-alt mr-1"></i>
                    kembali
                </a>

            </form>


        </div>
    </div>
</div>
@endsection
