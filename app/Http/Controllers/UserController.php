<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = new User();

        return view('user',[
            'data' => $user->all(),
        ]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $login = Auth::user()->name;
        
        $user->delete();
        return $user->name != $login ? ( redirect()->route('user-watch')):(redirect()->route('logout'));
    }
}
