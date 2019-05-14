<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Support\Facades\DB;

class AdListingController extends Controller
{
    public function showlisting()
    {
        return view('adShow');
    }
    public function callListing()
    {
        $title = $_POST['title'];
        $annonce = DB::table('ad')->where('title', 'like', $title.'%')->get();
        $img = File::all();
        return (view('adShow', ['annonce' => $annonce], ['img' => $img]));
    }
}
