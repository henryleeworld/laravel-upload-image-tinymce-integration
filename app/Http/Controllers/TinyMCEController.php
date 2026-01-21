<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinyMCEController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tinymce');
    }
  
    /**
     * Upload the image for the user.
     */
    public function upload(Request $request)
    {
        if($request->hasFile('file')) {
            $originName = $request->file('file')->getClientOriginalName();
            $fileName   = pathinfo($originName, PATHINFO_FILENAME);
            $extension  = $request->file('file')->getClientOriginalExtension();
            $fileName   = $fileName.'_'.time().'.'.$extension;
            $request->file('file')->move(public_path('images'), $fileName);
            $url = asset('images/'.$fileName);
            return json_encode(['location' => $url]);
        }
    }
}
