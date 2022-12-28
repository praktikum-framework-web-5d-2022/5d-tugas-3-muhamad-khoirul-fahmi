@extends('master')
@section('title','Mahasiswa')
@section('menu2','active')

@section('content')
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12 my-3">
                <div class="d-flex justify-content-between">
                    <h2>Mahasiswa</h2>
                    <form class="form-inline">
                        <a href="{{route('mahasiswas.create')}}" class="btn btn-primary">Tambah</a>
                    </form>
                </div>
                @if (session()->has('message'))
                    <div class="my-3">
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    </div>
                @endif
                <div class="table-responsive my-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NPM</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Photo</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mahasiswas as $mahasiswa)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$mahasiswa->npm}}</td>
                                <td>{{$mahasiswa->nama}}</td>
                                <td>{{$mahasiswa->jenis_kelamin}}</td>
                                <td>{{$mahasiswa->alamat}}</td>
                                <td>{{$mahasiswa->tempat_lahir}}, {{$mahasiswa->tanggal_lahir}}</td>
                                <td><img src="{{asset('storage/' . $mahasiswa->photo)}}" width="100" height="100" class="img-fluid"></td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                    <a href="{{route('mahasiswas.edit', ['mahasiswa'=>$mahasiswa->id])}}" class="btn btn-warning mr-1">Edit</a>
                                    <form action="{{route('mahasiswas.destroy', ['mahasiswa'=>$mahasiswa->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <td colspan="8">Tidak ada data . . .</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection