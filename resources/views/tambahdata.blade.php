@extends('mainlayout')
@section('button')
    <div class="mt-3" style="margin-left: 40px">
        <a href="/murid" type="text" class="text-decoration-none link-dark" style="margin-top: 1900px; font-size: 18px;">
            <p>Back</p>
        </a>
    </div>
@endsection
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mb-5">
                    <div class="card-body ">
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="judul" class="form-control" id="judul" name="judul">
                            </div>
                            <div class="mb-3">
                                <label for="pengarang" class="form-label">Pengarang</label>
                                <input type="pengarang" class="form-control" id="pengarang" name="pengarang">
                            </div>
                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="penerbit" class="form-control" id="penerbit" name="penerbit">
                            </div>
                            <div class="mb-3">
                                <label for="genre" class="form-label">Genre</label>
                                <select class="form-select" aria-label="Default select example" id="genre" name="genre">
                                    <option value="Romantis">Romantis</option>
                                    <option value="Horror">Horror</option>
                                    <option value="Action">Action</option>
                                    <option value="Sejarah">Sejarah</option>
                                    <option value="Komedi" selected>Komedi</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Musikal">Musikal</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="harga" class="form-control" id="harga" name="harga">
                            </div>
                            <div class="mb-3">
                                <label for="des" class="form-label">Deskripsi</label>
                                <input type="des" class="form-control" id="des" name="des">
                            </div>
                            <div class="mb-3">
                                <label for="cover" class="form-label">Cover</label>
                                <input type="file" class="form-control" id="cover" name="cover">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection