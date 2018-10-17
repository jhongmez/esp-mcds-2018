<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Llamamos el requests
use App\Http\Requests\PhotoRequest;
// Llamamos el modelo
use App\Photo;

class PhotoController extends Controller
{

    public function create() {
    	// photos es el nombre de la carpera y create es la vista
    	return view('photos.create');
    }

    public function save(PhotoRequest $request) {
    	// para realizar pruebas 
    	// dd($request);
    	$photo = new Photo;
    	if ($request->hasFile('photo')) {
    		$photo = time().'.'.$request->photo->extension();
    		$directory = '/imgs/';
    		$url = $directory.$photo;
    		Image::make($request->file('photo'))->resize(500, 500)->save($url);
    	}
    	$photo->url = $url;
    	$photo->user_id = Auth::user()->id;
    	$photo->description = $request->get('description');

    	if ( $photo->save() ) {
    		return redirect('home')->with("Se compartió satisfactoriamente", $message);
    	}
    }
}
