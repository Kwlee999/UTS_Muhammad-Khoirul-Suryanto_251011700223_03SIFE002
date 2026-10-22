<?php

namespace App\Http\Controllers;

use App\Models\DigitalArt;
use Illuminate\Http\Request;

class DigitalArtController extends Controller
{
    public function index()
    {
        $arts = DigitalArt::paginate(3);
        return view('arts.index', compact('arts'));
    }

    public function show($id)
    {
        $art = DigitalArt::findOrFail($id);
        return view('arts.show', compact('art'));
    }
}