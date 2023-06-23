<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $data['users'] = User::orderBy('id', 'desc')->get();
        return view('backend2.pages.users.show-users', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend2.pages.users.create-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = $request->user_id;


        $user = User::updateOrCreate(['id' => $user_id],
            [
                'name' => $request->name,
                'email' => $request->email,
                'level' => $request->level,
                'password' => bcrypt($request->password),

            ]);

        if ($request->photo_path) {
            $fileName = time() . '_img.' . $request->photo_path->extension();
            $request->photo_path->move(public_path('storage/users/' . $user->id . '/'), $fileName);
            $user->profile_photo_path = 'storage/users/' . $user->id . '/' . $fileName;
            $user->save();
        }

        return redirect()->route('users.index', app()->getLocale())->with('success', 'user has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show($lang, User $user)
    {
        $data['user'] = $user;
        return view('backend2.pages.users.show-user', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, User $user)
    {
        $data['user'] = $user;
        return view('backend2.pages.users.edit-user', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lang, User $user)
    {
        $user_id = $user->id;


        $user = User::updateOrCreate(['id' => $user_id],
            [
                'name' => $request->name,
                'email' => $request->email,
                'level' => $request->level,
                'password' => bcrypt($request->password),

            ]);

        if ($request->photo_path) {
            $fileName = time() . '_img.' . $request->photo_path->extension();
            $request->photo_path->move(public_path('storage/users/' . $user->id . '/'), $fileName);
            $user->profile_photo_path = 'storage/users/' . $user->id . '/' . $fileName;
            $user->save();
        }

        return redirect()->route('users.index', app()->getLocale())->with('success', 'user has been added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
