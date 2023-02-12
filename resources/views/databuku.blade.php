@extends('mainlayout')
@section('navbar')
    @include('navbar')
@endsection
@section('container')
    <div class="container">
        <a href="/tambahbuku" type="button" class="btn btn-success mb-3">+ Tambah Data</a>
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success mb-3 row" role="alert">
                    {{ $message }}
                </div>
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Des</th>
                    <th scope="col">Cover</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->judul }}</td>
                        <td>{{ $row->pengarang }}</td>
                        <td>{{ $row->penerbit }}</td>
                        <td>{{ $row->genre }}</td>
                        <td>Rp. {{ $row->harga }}</td>
                        <td>{{ $row->des }}</td>
                        <td>
                            <img src="{{ asset('coverbuku/' . $row->cover) }}" style="width: 55px;" alt="">
                        </td>
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" type="button" class="btn btn-warning">Edit</a>
                            <a href="/delete/{{ $row->id }}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    </div>
@endsection
