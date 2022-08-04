<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;   // 追加

class UsersController extends Controller
{
    public function index()
    {
        // ユーザ一覧をid降順で取得
        $users = User::orderBy('id', 'desc')->paginate(10);
        
        // ユーザ一覧ビューを表示
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        // idでユーザ検索して取得
        $user = User::findOrFail($id);
        
        // ユーザ詳細ビューを表示
        return view('users.show', [
            'user' => $user,
        ]);
    }
}
