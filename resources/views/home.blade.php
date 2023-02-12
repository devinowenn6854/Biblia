@extends('mainlayout')
@section('navbar')
    @include('navbar')
@endsection
@section('container')
    <div class="row justify-content-center mw-100">
        @foreach ($data as $row)
            <div class="card" style="width: 13rem; margin-left: 16px; margin-bottom: 12px">
                <img src="{{ asset('coverbuku/' . $row->cover) }}" class=""
                    alt="{{ asset('coverbuku/' . $row->cover) }}" style="margin-top: 12px">
                <div class="card-body">
                    <h5 class="card-title">{{ $row->judul }}</h5>
                    <p class="card-text">{{ $row->harga }}</p>
                    <p class="card-text">{{ $row->pengarang }}</p>
                    <a href="/home/{{ $row->id }}" class="card-link">Lihat lebih detail</a>
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection
