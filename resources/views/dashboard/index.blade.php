@extends('master')
@section('title','Dashboard')
@section('menu','active')

@section('content')
    <div class="container pt-4 bg-white">
            <div class="col-md-12 text-center my-3">
                    <h2>Dashboard</h2>
                <div class="container text-center py-5">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                            <h6 class="card-header text-muted">Dosen</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Dosen</h5>
                                    <p class="text-muted">{{@count($dosens)}} Dosen</p>
                                    <a href="/dosens" class="btn btn-primary">Lihat Data</a>
                                </div>
                        </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <h6 class="card-header text-muted">Mahasiswa </h5>
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Mahasiswa</h5>
                                    <p class="text-muted">{{@count($mahasiswas)}} Mahasiswa</p>
                                    <a href="/mahasiswas" class="btn btn-primary">Lihat Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <h6 class="card-header text-muted">Mata Kuliah</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Mata Kuliah</h5>
                                    <p class="text-muted">{{@count($matakuliahs)}} Mata Kuliah</p>
                                    <a href="/matakuliahs" class="btn btn-primary">Lihat Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection