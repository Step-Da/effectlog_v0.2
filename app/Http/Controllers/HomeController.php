<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Конструкт для создания нового экземпляра контроллера
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Рендер начальной (домашней) страницы сайта
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     * @return mixed $data Данные всех поставщиков в системе 
     */
    public function index()
    {
        $unit = new Unit;
    
        return view('home', [
            'data' => $unit->all()
        ]);
    }

    /**
     * Рендер страницы "О программе"
     *
     * @return view
     */
    public function about()
    {
        return view('about');
    }
}
