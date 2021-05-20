<?php

namespace App\Http\Controllers;

use App\Album;
use App\Photo;
use Illuminate\Http\Request;

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
        return view('intro');
    }

    /**
     * Show the application welcome.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        return view('home');
    }

    public function getLargeImage($id, $type = 'photo', $seq = 1)
    {
        $current_product;
        if ($type == "album") {
            $current_product = Album::where('id', $id)->firstOrFail();
            switch($seq) {
                case 2:
                    $current_product->largeImage = $current_product->large_image2;
                    break;
                case 3:
                    $current_product->largeImage = $current_product->large_image3;
                    break;
                default:
                    $current_product->largeImage = $current_product->large_image1;
                    break;
            }
            
        }
        else {
            $current_product = Photo::where('id', $id)->firstOrFail();
            $current_product->largeImage = $current_product->large_image;
        }

        return view('view_large_image', compact('type', 'current_product'));
    }
}
