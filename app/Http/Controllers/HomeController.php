<?php

namespace App\Http\Controllers;

use App\Models\Unit;
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
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $unit = new Unit;
    
        return view('home', [
            'data' => $unit->all()
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
