<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir() {
        return view('program.karir');
    }

    public function magang() {
        return view('program.magang');
    }

    public function kunjunganIndustri() {
        return view('program.kunjungan-industri');
    }
}
