<?php

class AuthController extends BaseController {

    public function create(){
        return View::make('auth.signup');
    }

    public function store(){
        $data = Input::all();
        $rules = User::$rules;
        $rules['password'] .= '|confirmed';
        $rules['password_confirmation'] = 'required|min:6|same:password';
        $validator = Validator::make($data,$rules);
        if($validator->fails()){
            return Redirect::route('signup')->withErrors($validator)->withInput();
        }

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);

        if($user->save()){
            Auth::login($user);
            return Redirect::route('user.dashboard');
        }
    }

    public function login(){
        return View::make('auth.login');
    }

    public function signin(){
        $data = Input::only('name','password');
        $rules = User::$rules;
        $rules['email'] = '';
        $validator = Validator::make($data, $rules);
        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

        if(Auth::attempt($data)){
            return Redirect::route('signup')->withMsg('You have signed in!');
        }

        return Redirect::back()->withMsg('Invalid login!');
    }
}
