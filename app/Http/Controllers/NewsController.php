<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        echo "seluruh berita.";
    }

    public function show($title) {
        echo "berita dengan judul $title";
    }
}
