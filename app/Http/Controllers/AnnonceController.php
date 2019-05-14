<?php
/**
 * Created by PhpStorm.
 * User: yamsubunto
 * Date: 26/03/19
 * Time: 12:44
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;
use App\File;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
    public function adView()
    {
        return view('ad');
    }
    public function postAd(Request $request)
    {
        $id = Auth::user()->id;
        $postAd = Annonce::create(array(
            'title' => $request['title'],
            'description' => $request['description'],
            'price' => $request['price'],
            'id_user' => $id
        ));

            $this->pictureUpload($postAd, $request);

        return redirect()->back()->with('success', 'Votre annonce a bien etait publiee');
    }
    private function pictureUpload($postAd, Request $request)
    {
        if($request->hasFile('picture')) {

            foreach ($request->file('picture') as $file) {

                $filename = $file->getClientOriginalName();

                $filesize = $file->getClientSize();

                $file->storeAs('public/upload', $filename);

                $fileModel = new File;

                $fileModel->name = $filename;

                $fileModel->size = $filesize;

                $fileModel->id_ad = $postAd->id;

                $fileModel->save();
            }
        }
        return $request->all();

    }
}
