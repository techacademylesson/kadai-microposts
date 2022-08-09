<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    // 投稿をお気に入り登録するアクション
    public function store ($id)
    {
        \Auth::user()->favorite($id);
        return back();
    }
    
    // 投稿のお気に入り登録を削除するアクション
    public function destroy ($id)
    {
        \Auth::user()->unfavorite($id);
        return back();
    }
}
