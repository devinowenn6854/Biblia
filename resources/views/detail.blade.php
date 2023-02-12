@extends('mainlayout')
@section('button')
    <div class="mt-3" style="margin-left: 40px">
        <a href="/home" type="text" class="text-decoration-none link-dark" style="margin-top: 1900px; font-size: 18px;">
            <p>Back</p>
        </a>
    </div>
@endsection
@section('container')
    <div class="card" style="max-width: 750px; margin-left: 100px; margin-top: 50px">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('coverbuku/' . $data->cover) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body" style="margin-left: 50px; margin-top: -20px;">
                    <h3 class="card-text" style="margin-top: 30px;">{{ $data->judul}}</h3>
                    <p class="card-text mt-3" style="font-size: 18px;">Pengarang : {{ $data->pengarang }}</p>
                    <p class="card-text mt-3" style="font-size: 18px;">Penerbit : {{ $data->penerbit }}</p>
                    <p class="card-text mt-3" style="font-size: 18px;">Genre : {{ $data->genre }}</p>
                    <p class="card-text mt-3" style="font-size: 18px;">Harga : Rp.{{ $data->harga }}</p>
                    <p class="card-text mt-3" style="font-size: 18px;">Deskripsi : {{ $data->des }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
