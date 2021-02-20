<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Рендер страницы c выводом пользователей ресурса
     * 
     * @return view
     */
    public function index()
    {
        $user = new User();

        return view('user',[
            'data' => $user->all(),
        ]);
    }

    /**
     * Удвление пользоватя в системе
     * 
     * @param int $id Идентификатор поставщика
     * 
     * @return view Home page ? CRUD User
     */
    public function delete($id)
    {
        $user = User::find($id);
        $login = Auth::user()->name;
        
        $user->delete();
        return $user->name != $login ? ( redirect()->route('user-watch')):(redirect()->route('logout'));
    }
}
