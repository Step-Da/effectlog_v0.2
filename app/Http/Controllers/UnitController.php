<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UnitController extends Controller
{
    public function index($id)
    {
        $unit = new Unit();
        $data = $unit->find($id);
        //$unit->testfile('https://effect-gifts.ru/api/?action=getHappyLogs');
    
        $list = $unit->testfile($data->url);
        $_SESSION['list'] = $list;
        $statistics = $unit->watchStatistics($list);

        return view('view', [
            'data' => $data,
            'statistics' => $statistics,
            //'list' => $unit->testfile($data->url),
        ]);
    }
}