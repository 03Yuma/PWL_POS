<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;

class userController extends Controller
{
    public function index()
    {
        return UserModel::all();
    }
    public function store(Request $request)
    {
        $level = userModel::create($request->all());
        return response()->json($level,201);
    }

    public function show(userModel $user)
    {
        return userModel::find($user);
    }
    public function update(Request $request, UserModel $user)
    {
        $user->update($request->all());
        return UserModel::find($user);
    }
    public function destroy(UserModel $user)
    {
        $user->delete();

        return response()->json([
            'success'=> true,
            'message'=>'Data terhapus'
        ]);
    }
}
