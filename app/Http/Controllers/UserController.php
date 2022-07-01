<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator, Hash;

class UserController extends Controller
{
    


    public function getUser(Request $request)
    {



       $user = User::select('*')->OrderBy('id', 'desc')->paginate(10);

       return view('user.index', compact('user'));




    }


    public function editUser(Request $request, $id){


        $users = User::findOrFail($id);
        $user = User::select('*')->OrderBy('id', 'desc')->paginate(10);


        return view('user.edit', compact('users', 'user'));


    }


    public function updateUser(Request $request, $id){


        $rules = [

             'name' => 'required',
             'email' => 'required|email',
             'password'=> '',
             'confirmacion' => 'same:password'


        ];

        $validator = validator::make($request->all(), $rules);

        if($validator->fails()):

            return back()->withErrors($validator)->withInput()->with('message','Se ha producido un error')->with('typealert', 'danger');


        else:

            $user_update = user::findOrFail($id);
            $user_update->name = $request->get('name');
            $user_update->email = $request->get('email');
            $user_update->password = Hash::make($request->get('password'));
            $user_update->update();

            return redirect('/users')->with('message', 'Usuario actualizado correctamente')->with('typealert', 'success');

        endif;


    }

    public function deleteUser($id){

        $user = user::findOrFail($id);
        $user->delete();
        return redirect('/users')->with('message', 'Usuario actualizado correctamente')->with('typealert', 'success');

    }
}
