<?php

namespace App\Http\Controllers;

use App\Phone;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('phone')->orderBy('id', 'DESC')->get();
        // $bs = "http: //localhost/aptech-php-15-phuoc/php/2018-11-14/phone-user/public/css/bs4.css";
        // return response($bs);

        return view('index', ['users' => $users]);

        // dd($users);
        // return $users[1]['phone']['phone_number'];
        // return $users[0]->phone->phone_number;
        // return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->name);
        // $user = User::create([
        //     'name' => $request->name,
        // ]);
        // $insertedId = $user->id;
        // // $user = User::find($insertedId);
        // // dd($user->name);
        // // $user->phone()->save('$insertedId');
        // Phone::create([
        //     'phone_number' => $request->phone_number,
        //     'user_id' => $insertedId,
        // ]);
        // dd($request);
        // $phone = new Phone();
        // $phone->phone_number = $request->phone_number;
        // $phone->user_id = $user->id;
        // $phone->save();

        $user = User::create(['name' => $request->name])->phone()->create(['phone_number' => $request->phone_number]);
        $users = User::with('phone')->find($user->user_id);

        return $users;
        // return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $id)
    {
        $user = User::with('phone')->find($id->id);
        // // dd($user);;
        // return response()->json(['item_image ' => $user, 'item_something' => $abc]);

        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        Phone::where('user_id', $id->id)->delete();
        User::destroy($id->id);
        return Redirect(route('user.index'));
    }
}
