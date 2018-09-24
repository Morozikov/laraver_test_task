<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\User;
use App\CompanyUser;

class UsersController extends Controller
{
    //

    public function index()
    {
        return User::with('companies')->get();
    }

    public function show(User $user)
    {
        return User::with('companies')->find($user->id);
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json($user, 200);
    }

    public function delete(User $user)
    {
        CompanyUser::delConnect('user_id',$user->id);
        $user->delete();

        return response()->json(null, 204);
    }

    
}
