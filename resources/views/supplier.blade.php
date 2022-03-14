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
            <th>Name Supplier</th>
            <th>Asal</th>
            <th>Alamat Supplier</th>
            <th>Nomor Telepon</th>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
            <tr>
                <td>{{$supplier->id}}</td>
                <td>
                    <img src="{{ asset('img/supplier.png') }}" alt="" height="50px">
                </td>
                <td>{{$supplier->nama_supplier}}</td>
                <td>{{$supplier->alamat}}</td>
                <td>{{$supplier->telepon}}</td>
                <td>{{$supplier->jenis_kelamin}}</td>
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
            <th>Name Supplier</th>
            <th>Alamat Supplier</th>
            <th>Nomor Telepon</th>
            <th>Jenis Kelamin</th>
        </thead>
        <tbody>
            @foreach ($suppliers2 as $supplier)
            <tr>
                <td>{{$supplier->id}}</td>
                <td>
                    <img src="{{ asset('img/supplier.png') }}" alt="" height="50px">
                </td>
                <td>{{$supplier->nama_supplier}}</td>
                <td>{{$supplier->alamat}}</td>
                <td>{{$supplier->telepon}}</td>
                <td>{{$supplier->jenis_kelamin}}</td>
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
            <th>Name Supplier</th>
            <th>Alamat Supplier</th>
            <th>Nomor Telepon</th>
            <th>Jenis Kelamin</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$suppliers3->id}}</td>
                <td>
                    <img src="{{ asset('img/supplier.png') }}" alt="" height="50px">
                </td>
                <td>{{$suppliers3->nama_supplier}}</td>
                <td>{{$suppliers3->alamat}}</td>
                <td>{{$suppliers3->telepon}}</td>
                <td>{{$suppliers3->jenis_kelamin}}</td>
            </tr>

        </tbody>
    </table>
</div>
@endsection