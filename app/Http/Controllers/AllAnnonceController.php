<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use App\Annonce;

class AllAnnonceController extends Controller
{
    public function show()
    {
        $annonceView = Annonce::paginate(5);
        $img = File::all();
        return view('allAnnonce', compact('annonceView', 'img'));
    }
}
