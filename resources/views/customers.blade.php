@extends('layouts.main')

@section('content')
<div class="container m-xl-auto mt-xl-5 mb-xl-5">
    <h1 class="text-center">Menampilkan seluruh data customer</h1>
    <hr>
    <div class="row mb-5">
        @foreach ($pelanggans as $pelanggan)
        <div class="col-md-3">
            <div class="card mb-3" style="max-height: 3500px">
                @if ($pelanggan->jenis_kelamin =='Laki-laki')
                <img src="{{ asset('img/young-man.png') }}" alt="" class="card-img-top" width="200px" height="200px">
                @else
                <img src="{{ asset('img/girl.png') }}" class="card-img-top" alt="" width="200px" height="200px">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $pelanggan -> nama_pelanggan }}</h5>
                    <p class="card-text">{{ $pelanggan -> alamat }}</p>
                    <p class="card-text">{{ $pelanggan -> telepon }}</p>
                    <p class="card-text">{{ $pelanggan -> jenis_kelamin }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div div="row">
        <ul class="pagination pagination justify-content-end">
            {{ $pelanggans->links() }}
        </ul>
    </div>
</div>
@endsection