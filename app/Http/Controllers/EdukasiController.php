<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edukasi;

class EdukasiController extends Controller
{
    public function index()
    {
        // Menyediakan data edukasi dari model
        $dataEdukasi = Edukasi::all();

        return view('edukasi', compact('dataEdukasi'));
    }
}
