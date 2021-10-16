@extends('layout.template')

@section('title','')

@section('container')

<div class="container">

    <div class="row">
        <div class="colo-10">
            <h1 class="mt-3">Data Siswa </h1>
            <div>
                <a href="/createstudents" class="btn btn-primary mt-2 mb-2">
                    Tambah Data Siswa
                </a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <thead class="thead-light">
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </thead>

                </tr>

                <tbody>


                    @foreach ( $students as $student)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>

                        <td>{{ $student->nama }}</td>
                        <td>{{ $student->nis }}</td>
                        <td>{{ $student->kelas }}</td>
                        <td>{{ $student->alamat }}</td>
                        <td>
                            <form name="delete" action="/delete/{{ $student->id }}" method="POST">
                                @method('delete')
                                @csrf     {{-- setelah klik hapus, form akan mengarah ke route delete--}}
                                <a href='/edit/{{ $student->id }}' class="btn btn-outline-success">Edit</a> {{-- setelah klik edit, maka akan di href ke route edit/{id} (edit.blade)--}}

                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                            </form>
                        <td>



                    <tr>
                    @endforeach



                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
