<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lop_id = Auth::user()->profile->lop_id;
        $data = [];
        $album = Album::where('lop_id', $lop_id)->get();
        foreach($album as $item){
             $array_images = [];
             foreach(json_decode($item->item_images) as $image){
                     array_push($array_images, $image);
             }
             $param = (object) [
                 'id' => $item->id,
                 'item_images' => $array_images,
                 'auth_id' => $item->auth_id,
                 'lop_id' => $item->lop_id,
                 'title' => $item->title,
                 'created_at' => Carbon::parse($item->created_at)->format('d/m/Y')
             ];
             array_push($data, $param);
        }
        return view('index', compact('data'));
    }
}
