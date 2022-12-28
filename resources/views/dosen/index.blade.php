@extends('master')
@section('title','Dosen')
@section('menu1','active')

@section('content')
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12 my-3">
                <div class="d-flex justify-content-between">
                    <h2>Dosen</h2>
                    <form class="form-inline">
                        <a href="{{route('dosens.create')}}" class="btn btn-primary">Tambah</a>
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
                                <th>NIDN</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Photo</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dosens as $dosen)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dosen->nidn}}</td>
                                <td>{{$dosen->nama}}</td>
                                <td>{{$dosen->jenis_kelamin}}</td>
                                <td>{{$dosen->alamat}}</td>
                                <td>{{$dosen->tempat_lahir}}, {{$dosen->tanggal_lahir}}</td>
                                <td><img src="{{asset('storage/' . $dosen->photo)}}" width="100" height="100" class="img img-responsive"></td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                    <a href="{{route('dosens.edit', ['dosen'=>$dosen->id])}}" class="btn btn-warning mr-1">Edit</a>
                                    <form action="{{route('dosens.destroy', ['dosen'=>$dosen->id])}}" method="POST">
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