<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.list', ['users' => User::orderBy('name')->get()]);
    }

    public function myprofile()
    {
        return view('user.profile', ['user' => Auth::user()]);
    }

    public function create()
    {
        $this->middleware('auth');
        return view('user.create');
    }

    public function store(StoreUserRequest $request)
    {
        $data = $request->all();
        $data["password"] = Hash::make($data['password']);
        $user = User::create($data);
        return redirect('portal/users');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('portal/users');
    }
}
