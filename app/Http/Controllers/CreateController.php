<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class CreateController extends Controller
{
	//protected $redirectTo = '/hotels';


    public function index()
    {
    	return view('create');
    }

    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function create(Request $request) 
    {       
        $hotel = new Hotel;
        
        $hotel->name = $request->name;
        $hotel->location = $request->location;
        $hotel->user_id = Auth::user()->id;
        
        //img manipulation size
        $imagePath = $request->file('image')->store('img', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1000);
        $image->save();


        $hotel->img_path = $imagePath;
        $hotel->save();

        return redirect('/hotels');
    }

}
