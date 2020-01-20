<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class UsersController extends Controller
{

    public function editUser($id){

        if($user = User::find($id)) { return view('edit-user', ['user'=>$user]); }
        return redirect('/admin/users');

    }

    public function deleteUser($id){

        $user = User::find($id);
        if($user && !$user->hasPermissionTo('admin')) { $user->delete(); }
        return redirect('/admin/users');
    }

    public function updateUser(Request $request){

        $attributes = $request->only(['name', 'email', 'password', 'deactivated']);

        if($attributes['password']) { $attributes['password'] = Hash::make($attributes['password']); }
        else { unset($attributes['password']); }

        User::find($request->id)->update($attributes);

        return redirect('/admin/users');
    }

}
