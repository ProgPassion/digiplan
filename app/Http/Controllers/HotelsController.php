<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Hotel;

class HotelsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$hotels = Hotel::all();
    	$userOwnHotel = DB::table('hotels')->where('user_id', Auth::user()->id)->first();
    	$data = [
    		'hotels' => $hotels, 
    		'userOwnHotel' => $userOwnHotel,
    	];

        return view('hotels')->with('data', $data);
    }

    public function editHotelData($id) 
    {
    	$hotelData = DB::table('hotels')->where('id', $id)->first();
    	if(Auth::user()->id !== $hotelData->user_id) {
    		return redirect('/hotels');
    	}
    	return view('editHotelData')->with('data', $hotelData);
    }

    public function editDetail(Request $request) 
    {
        
        $img_filename = DB::table('hotels')->select('img_path')->where('user_id', Auth::user()->id)->first();
        Storage::delete('public/' . $img_filename->img_path);

        $name = $request->name;
        $location = $request->location;

        $imagePath = $request->file('image')->store('img', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1000);
        $image->save();
        $img_path = $imagePath;

        DB::table('hotels')->where('user_id', Auth::user()->id)->update(['name' => $name,'location' => $location, 'img_path' => $img_path]);
        return redirect('/hotels');
    }

    public function detail($id) 
    {
        $hotelData = DB::table('hotels')->where('id', $id)->first();
        return view('detail')->with('data', $hotelData);
    }
}
