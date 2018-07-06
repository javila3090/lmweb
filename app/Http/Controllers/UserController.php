<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
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

	public function index(){

		$users = User::all();
		return view('admin.users.index',compact('users'));
	}

	public function create(){

		return view('admin.users.add');
	}

    protected function store()
    {
        $rules = array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            $messages = $validator->messages();
            return redirect('admin/user/add')->withErrors($messages);

        }else{

            $user = new User();
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));

            $user->save();
        }

        return redirect('admin/user')->with('message', '¡Registro guardado con éxito!');

    }
}
