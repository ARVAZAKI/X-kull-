@extends('layouts.app')
@section('title','pelatih')
@section('content')

<a class= "btn btn-success" href="{{ route('buat.pelatih') }}">Tambah Pelatih</a>
<link rel="stylesheet" href="css/style.css">
<div class="row mt-3">
    <div class = "col-lg 12">
        <div class = "card shadow mb-4">
            <div class = "card-header py-3 bg-cstm">
                <h6 class="m-0 font-weight-bold text-light">Daftar Pelatih</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Opsi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pelatih as $item)
                        <tr>

                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $item->nama}}</td>
                            <td><a href="" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
