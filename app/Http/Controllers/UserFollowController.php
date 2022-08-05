<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    /**
     * ユーザをフォローするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）がidのユーザをフォローする
        \Auth::user()->follow($id);
        // 前のURLへリダイレクト
        return back();
    }
    
    /**
     * ユーザをアンフォローするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）がidのユーザをアンフォローする
        \Auth::user()->unfollow($id);
        // 前のURLへリダイレクト
        return back();
    }
}
