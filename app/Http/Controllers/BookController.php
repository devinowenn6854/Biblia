<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = Book::all();
        return view('databuku', [
            'title' => 'Form Buku',
        ], compact('data'));
    }

    public function tambahbuku()
    {
        return view('tambahdata', [
            'title' => 'Tambah Data Buku',
        ]);
    }

    public function insertdata(Request $request)
    {
        $data = Book::create($request->all());
        if ($request->hasFile('cover')) {
            $request->file('cover')->move('coverbuku/', $request->file('cover')->getClientOriginalName());
            $data->cover = $request->file('cover')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('buku')->with('success', 'Data berhasil ditambahkan');
    }

    public function tampilkandata($id)
    {
        $data = Book::find($id);
        // dd($data);

        return view('tampildata', [
            'title' => 'Edit Data Buku',
        ],  compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Book::find($id);
        $data->update($request->all());
        if ($request->hasFile('cover')) {
            $request->file('cover')->move('coverbuku/', $request->file('cover')->getClientOriginalName());
            $data->cover = $request->file('cover')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('buku')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $data = Book::find($id);
        $data->delete();
        return redirect()->route('buku')->with('success', 'Data berhasil dihapus');
    }
}
