<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;


class FrontpageController extends Controller
{
        public function index() {

            $testimonials = Testimonial::get()->take(3);

            return view('pages.frontpage', ['testimonials' => $testimonials]);
    }
}
