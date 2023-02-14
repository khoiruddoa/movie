<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index($id)
    {
        $categories = Category::all();
        $kategori = Category::where('id', $id)->first();
        return view(
            'movie',
            [
                'categories' => $categories,
                'kategori' => $kategori
            ]
        );
    }

    public function detail($id)
    {
        $idnya = $id;
        $categories = Category::all();
        return view(
            'detail',
            [
                'categories' => $categories,
                'id' => $idnya
            ]
        );
    }
}
