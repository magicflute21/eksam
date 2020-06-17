<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Testimonial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $testimonials = Testimonial::all();
        $items = Product::all();

        return view('pages.frontpage', [
            'testimonials' => $testimonials,
            'items' => $items,
        ]);
    }
}
