<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function tableUsers()
    {
        $users = DB::table('users')->get();
        return view('list-user-extends', ['users' => $users]);
    }
    public function showUser($id) /*truyen tham so $id lay tu route qua*/
    {
        $users = DB::table('users')->where('id', $id)->get();
        return view('show-user-extends', ['users' => $users]);
    }
    public function editUser($id) /*truyen tham so $id lay tu route qua*/
    {
        $users = DB::table('users')->where('id', $id)->get();
        return view('edit-user-extends', ['users' => $users]);
    }
}
