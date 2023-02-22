<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function marbelEduGames() {
        return view('product.list', ['category' => 'marbel-edu-games']);
    }

    public function marbelAndFriends()
    {
        return view('product.list', ['category' => 'Marbel and Friends Kids Games']);
    }

    public function ririStoryBooks()
    {
        return view('product.list', ['category' => 'Riri Story Books']);
    }

    public function kolakKidsSongs()
    {
        return view('product.list', ['category' => 'Kolak Kids Songs']);
    }

}
