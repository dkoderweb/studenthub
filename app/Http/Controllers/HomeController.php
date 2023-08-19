<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.home');
    }
    public function about()
    {
        return view('front.about');
    }
    public function course()
    {
        return view('front.course');
    }
    public function instructor()
    {
        return view('front.instructor');
    }
    public function blog()
    {
        return view('front.blog');
    }
    public function contact()
    {
        return view('front.contact');
    }
}
