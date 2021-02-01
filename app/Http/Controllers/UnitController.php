<?php

namespace App\Http\Controllers;

use App\Models\Unit;

class UnitController extends Controller
{
    public function index($id)
    {
        $unit = new Unit();

        $data = $unit->find($id);
  

        return view('view', [
            'data' => $data,
            //'list' => $unit->read($data->url),
        ]);
    }
}