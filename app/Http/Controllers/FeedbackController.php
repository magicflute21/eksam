<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index() {

        return view('feedback.index');

    }

    public function store() {

        $data = request()->validate([
            'name' => 'required|min:3',
            'title' => 'required',
            'feedback' => 'required'
        ]);

        \App\Testimonial::create($data);

            dd($data);
            // return redirect()->back();

            // valideerib ja salvestab db-sse
    }
}
