<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data = Book::inRandomOrder()->take(5)->get();
        $data = Book::all();
        return view('home', [
            'title' => 'Data Buku',
        ], compact('data'));
    }

    public function detail($id)
    {
        $data = Book::find($id);

        return view('detail', [
            'title' => 'Detail Buku',
        ], compact('data'));
    }

    public function getDetails($id = 0)
    { {
            $data = Book::where('id', $id)->first();
            return view('details', [
                'title' => 'Detail Murid',
            ], compact('data'))->json($data);
        }
    }
}
