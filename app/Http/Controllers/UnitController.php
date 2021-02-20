<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitRequest;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index($id)
    {
        $unit = new Unit();
        $data = $unit->find($id);
        $list = $unit->readURL($data->url);
        $statistics = $unit->watchStatistics($list);
    
        return view('view', [
            'data' => $data,
            'statistics' => $statistics,
            'list' => $list,
        ]);
    }


    public function table($id)
    {
        $unit = new Unit();
        $data = $unit->find($id);
        $list = $unit->readURL($data->url);

        $_SESSION['list'] = $list;
        return view('table');
    }

    public function watch()
    {
        return view('unit', ['data' => Unit::all()]);
    }

    public function submit(UnitRequest $request)
    {
        $unit = new Unit();

        $unit->name = $request->input('name');
        $unit->url = $request->input('url');
        $unit->description = $request->input('description');
        $unit->save();

        return redirect()->route('watch-unit')->with('success', 'Новый поставщик (компания) был сформирован и добавлен в библиотеку');
    }

    public function delete($id)
    {
        Unit::find($id)->delete();
        return redirect()->route('watch-unit')->with('success', 'Поставщик (компания) был удален');
    }

    public function findOneUnit($id)
    {
        return view('/includes/unit/formUpdate', ['data' => Unit::find($id)]);
    }

    public function updateSubmit($id, UnitRequest $request)
    {
        $unit = Unit::find($id);
        $unit->name = $request->input('name');
        $unit->url = $request->input('url');
        $unit->description = $request->input('description');
        $unit->save();

        return redirect()->route('watch-unit')->with('success', 'Обновления информации о поставщике (компании) были зафиксированы');
    }
}