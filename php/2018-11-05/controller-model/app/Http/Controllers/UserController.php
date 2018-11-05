<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
// use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::table('users')->paginate(10);
        $users = User::paginate(10);
        return view('list-user-extends', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-user-extends');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $password = $request->input('password');

        // DB::table('users')->insert(['name' => $name, 'email' => $email, 'password' => $password]);
        $User = new User;

        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = $request->password;
        $User->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $users = User::find($id);
        //  dd($users);
        // $users = DB::table('users')->where('id', $id)->get();
        return view('show-user-extends', ['users' => $users]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        // $users = DB::table('users')->where('id', $id)->get();
        return view('edit-user-extends', ['users' => $users]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $id = $request->id;
        // $name = $request->input('name');
        // $email = $request->input('email');

        // DB::table('users')->where('id', $id)->update(['name' => $name, 'email' => $email]);
        $User = User::find($id);

        $User->name = $request->name;
        $User->email = $request->email;
        $User->save();
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::destroy($id);
        // DB::table('users')->where('id', $id)->delete();
        return redirect('/');

    }
}
