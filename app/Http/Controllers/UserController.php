<?php

use PhpParser\Node\Expr\AssignOp\Div;

namespace App\Http\Controllers;

use App\Models\User; // App\User クラスをインポートする

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\UpdateRequest;

class UserController extends Controller
{
    /*
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }

    public function edit()
    {
        $user = Auth::user();
        return view('users.edit', ['user' => $user]);
    }

    public function update(UpdateRequest $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with(['message' => '更新しました！']);
    }
    */

    public function create(){

    }

    public function confirm(){

    }

    public function profile(){

    }

    public function show(){

    }

    public function edit(){

    }
}
