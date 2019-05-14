<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAdsController extends Controller
{
    public function myAds()
    {
        $id = Auth::user()->id;
        $user = Auth::user();
        $myAds = Annonce::where('id_user', $id)->paginate(3);
        $img = File::all();
        return view('myads', compact('myAds', 'user','img'));
    }
    public function editMyAds($id)
    {

        $adOnly = Annonce::where('id', $id)->firstOrFail();
        return view('edit', compact('adOnly'));
    }
    public function deleteAd($id)
    {
        $delete = Annonce::find($id);
        $delete->delete();
        return redirect('myAds');
    }
    public function updateAd($id)
    {
        $update = Annonce::where('id', $id)->update([
           'title' => request('title'),
           'description' => request('description'),
           'price' => request('price')
        ]);
        return redirect('myAds');
    }
}
