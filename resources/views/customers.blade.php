@extends('layouts.main')

@section('content')
<div class="container m-xl-auto mt-xl-5 mb-xl-5">
    <h3>Menampilkan secara keseluruhan</h3>
    <p>Dibawah ini akan menampilkan semua data dari Pelanggan</p>
    <hr>
    <table class="table table-success">
        <thead>
            <th>Id</th>
            <th>Foto</th>
            <th>Name Pelanggan</th>
            <th>Alamat Pelanggan</th>
            <th>Nomor Telepon</th>
            <th>Jenis Kelamin</th>
        </thead>
        <tbody>
            @foreach ($pelanggans as $pelanggan)
            <tr>
                <td>{{$pelanggan->id}}</td>
                <td>
                    @if ($pelanggan->jenis_kelamin =='Laki-laki')
                    <img src="{{ asset('img/young-man.png') }}" alt="" height="50px">
                    @else
                    <img src="{{ asset('img/girl.png') }}" alt="" height="50px">
                    @endif
                </td>
                <td>{{$pelanggan->nama_pelanggan}}</td>
                <td>{{$pelanggan->alamat}}</td>
                <td>{{$pelanggan->telepon}}</td>
                <td>{{$pelanggan->jenis_kelamin}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Menampilkan dengan cara where</h3>
    <p>Dibawah ini akan menampilkan data dari Pelanggan yang berjenis kelamin Perempuan</p>
    <hr>
    <table class="table table-success">
        <thead>
            <th>Id</th>
            <th>Foto</th>
            <th>Name Pelanggan</th>
            <th>Alamat Pelanggan</th>
            <th>Nomor Telepon</th>
            <th>Jenis Kelamin</th>
        </thead>
        <tbody>
            @foreach ($pelanggan2 as $pelanggan)
            <tr>
                <td>{{$pelanggan->id}}</td>
                <td>
                    @if ($pelanggan->jenis_kelamin =='Laki-laki')
                    <img src="{{ asset('img/young-man.png') }}" alt="" height="50px">
                    @else
                    <img src="{{ asset('img/girl.png') }}" alt="" height="50px">
                    @endif
                </td>
                <td>{{$pelanggan->nama_pelanggan}}</td>
                <td>{{$pelanggan->alamat}}</td>
                <td>{{$pelanggan->telepon}}</td>
                <td>{{$pelanggan->jenis_kelamin}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Menampilkan dengan cara find</h3>
    <p>Dibawah ini akan menampilkan data dari Pelanggan yang memiliki id 7</p>
    <hr>
    <table class="table table-success">
        <thead>
            <th>Id</th>
            <th>Foto</th>
            <th>Name Pelanggan</th>
            <th>Alamat Pelanggan</th>
            <th>Nomor Telepon</th>
            <th>Jenis Kelamin</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$pelanggan3->id}}</td>
                <td>
                    @if ($pelanggan3->jenis_kelamin =='Laki-laki')
                    <img src="{{ asset('img/young-man.png') }}" alt="" height="50px">
                    @else
                    <img src="{{ asset('img/girl.png') }}" alt="" height="50px">
                    @endif
                </td>
                <td>{{$pelanggan3->nama_pegawai}}</td>
                <td>{{$pelanggan3->alamat}}</td>
                <td>{{$pelanggan3->telepon}}</td>
                <td>{{$pelanggan3->jenis_kelamin}}</td>
            </tr>

        </tbody>
    </table>
</div>
@endsection
