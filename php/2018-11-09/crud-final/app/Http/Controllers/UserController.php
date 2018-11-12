<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.s
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('list-user-extends', ['users' => $users]);
        // return $users->toArray();
        // return response()->json($users);

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
        $request->validate([
            'name' => 'bail|required|max:255|unique:users',
            'email' => 'bail|required|max:255|unique:users',
            'password' => 'required',
        ]);
        // if ($validatedData->fails()) {
        //     // return route('users.index');
        //     return ('a');
        // }

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect(route('users.index'));

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
        // return response()->json($users);
        // return $users->toJson();

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
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect(route('users.show', $user->id));
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
        return redirect(route('users.index'));
    }
}
