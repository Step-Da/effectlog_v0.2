<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitRequest;
use App\Models\Unit;

class UnitController extends Controller
{
    /**
     * Рендер страницы с выводом графиков для поставщика
     * 
     * @param int $id идентификатор поставщика
     * 
     * @return mixed $data Данные выбранного поставщика в системе
     * @return array $statistics Массив с данными статистики
     * @return mixed $list Данные компонентов обновления остатков
     */
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

    /**
     * Рендер страницы с таблицей компонентов остатков обновления выбранного поставщика
     * 
     * @param int $id Идентификатор поставщика
     * 
     * @return view
     */
    public function table($id)
    {
        $unit = new Unit();
        $data = $unit->find($id);
        $list = $unit->readURL($data->url);

        $_SESSION['list'] = $list;
        return view('table');
    }

    /**
     * Рендер страницы с выводом поставщиков
     */
    public function watch()
    {
        return view('unit', ['data' => Unit::all()]);
    }

    /**
     * Обработка данных формы. Создание новго поставщика
     * 
     * @param request $request Правила валидации для новойо записи
     * 
     * @return redirect CURL Unit
     */
    public function submit(UnitRequest $request)
    {
        $unit = new Unit();

        $unit->name = $request->input('name');
        $unit->url = $request->input('url');
        $unit->description = $request->input('description');
        $unit->save();

        return redirect()->route('watch-unit')->with('success', 'Новый поставщик (компания) был сформирован и добавлен в библиотеку');
    }

    /**
     * Удаление записи о поставщике в системе
     * 
     * @param int $id Идентификатор поставщика
     * 
     * @return redirect CURL Unit
     */
    public function delete($id)
    {
        Unit::find($id)->delete();
        return redirect()->route('watch-unit')->with('success', 'Поставщик (компания) был удален');
    }

    /**
     * Поиск опредленного поставщика в системе
     * 
     * @param int $id Идентификатор поставщика
     * 
     * @return view Update
     */
    public function findOneUnit($id)
    {
        return view('/includes/unit/formUpdate', ['data' => Unit::find($id)]);
    }

    /**
     * Изменение данных о пользователе в системе. Обработка данных формы
     * 
     * @param int $id Идентификатор поставщика
     * @param request $request Правила валидации для новойо записи
     * 
     * @return view CURL Unit
     */
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