@extends('master')
@section('title','Dosen')
@section('menu1','active')

@section('content')
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center my-3">
                    <h2>Tambah Data Dosen</h2>
                </div>
                @if (session()->has('message'))
                    <div class="my-3">
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    </div>
                @endif
                <div class="py-5">
                <form action="{{route('dosens.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="form-row">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label for="nidn" class="form-label">NIDN</label>
                                    <input type="text" name="nidn" id="nidn" placeholder="Masukkan NIDN" class="form-control" value="{{old('nidn')}}">
                                    @error('nidn')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                    <div class="col">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" class="form-control" value="{{old('nama')}}">
                                    @error('nama')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                        <option value="laki-laki" {{old('jenis_kelamin') == "laki-laki" ? "selected" : ""}}>Laki-laki</option>
                                        <option value="perempuan" {{old('jenis_kelamin') == "perempuan" ? "selected" : ""}}>Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col my-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" class="form-control" value="{{old('tempat_lahir')}}">
                                    @error('tempat_lahir')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="photo" class="form-label">Foto</label>
                                    <input type="file" name="photo" id="photo" placeholder="Masukkan Foto" class="form-control">
                                    @error('photo')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" class="form-control" value="{{old('tanggal_lahir')}}">
                                    @error('tanggal_lahir')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4 my-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat">{{old('alamat')}}</textarea>
                                @error('alamat')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="d-flex flex-row-reverse py-3">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
@endsection