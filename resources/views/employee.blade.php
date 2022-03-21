@extends('layouts.main')

@section('content')
<div class="container m-xl-auto mt-xl-5 mb-xl-5">
    <h3>Menampilkan secara keseluruhan</h3>
    <p>Dibawah ini akan menampilkan semua data dari pegawai</p>
    <hr>
    <table class="table table-success">
        <thead>
            <th>Id</th>
            <th>Foto</th>
            <th>Name Pegawai</th>
            <th>Alamat Pegawai</th>
            <th>Nomor Telepon</th>
            <th>Jenis Kelamin</th>
        </thead>
        <tbody>
            @foreach ($pegawais as $pegawai)
            <tr>
                <td>{{$pegawai->id}}</td>
                <td>
                    @if ($pegawai->jenis_kelamin =='Laki-laki')
                    <img src="{{ asset('img/young-man.png') }}" alt="" height="50px">
                    @else
                    <img src="{{ asset('img/girl.png') }}" alt="" height="50px">
                    @endif
                </td>
                <td>{{$pegawai->nama_pegawai}}</td>
                <td>{{$pegawai->alamat}}</td>
                <td>{{$pegawai->telepon}}</td>
                <td>{{$pegawai->jenis_kelamin}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Menampilkan dengan cara where</h3>
    <p>Dibawah ini akan menampilkan data dari pegawai yang berjenis kelamin laki-laki</p>
    <hr>
    <table class="table table-success">
        <thead>
            <th>Id</th>
            <th>Foto</th>
            <th>Name Pegawai</th>
            <th>Alamat Supplier</th>
            <th>Nomor Telepon</th>
            <th>Jenis Kelamin</th>
        </thead>
        <tbody>
            @foreach ($pegawais2 as $pegawai)
            <tr>
                <td>{{$pegawai->id}}</td>
                <td>
                    @if ($pegawai->jenis_kelamin =='Laki-laki')
                    <img src="{{ asset('img/young-man.png') }}" alt="" height="50px">
                    @else
                    <img src="{{ asset('img/girl.png') }}" alt="" height="50px">
                    @endif
                </td>
                <td>{{$pegawai->nama_pegawai}}</td>
                <td>{{$pegawai->alamat}}</td>
                <td>{{$pegawai->telepon}}</td>
                <td>{{$pegawai->jenis_kelamin}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Menampilkan dengan cara find</h3>
    <p>Dibawah ini akan menampilkan data dari pegawai yang memiliki id 9</p>
    <hr>
    <table class="table table-success">
        <thead>
            <th>Id</th>
            <th>Foto</th>
            <th>Name Pegawai</th>
            <th>Alamat Supplier</th>
            <th>Nomor Telepon</th>
            <th>Jenis Kelamin</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$pegawai3->id}}</td>
                <td>
                    @if ($pegawai3->jenis_kelamin =='Laki-laki')
                    <img src="{{ asset('img/young-man.png') }}" alt="" height="50px">
                    @else
                    <img src="{{ asset('img/girl.png') }}" alt="" height="50px">
                    @endif
                </td>
                <td>{{$pegawai3->nama_pegawai}}</td>
                <td>{{$pegawai3->alamat}}</td>
                <td>{{$pegawai3->telepon}}</td>
                <td>{{$pegawai3->jenis_kelamin}}</td>
            </tr>

        </tbody>
    </table>
</div>
@endsection
