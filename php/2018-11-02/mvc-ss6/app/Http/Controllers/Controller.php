<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request; /*import kái nay neu muon su dung request*/
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function listUsers()
    {
        $users = DB::table('users')->paginate(10);
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

    public function deleteUser($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/');
    }

    public function saveButtonEditUser(Request $request)
    {
        $id = $request->id;
        $name = $request->input('name');
        $email = $request->input('email');

        DB::table('users')->where('id', $id)->update(['name' => $name, 'email' => $email]);
        return redirect('/');
    }

    public function createUserForm()
    {
        return view('create-user-extends');
    }

    public function createUserButton(Request $request)
    {
        // $id = $request->id;
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        DB::table('users')->insert(['name' => $name, 'email' => $email, 'password' => $password]);
        return redirect('/');
    }
}
