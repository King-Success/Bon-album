<?php

namespace App\Http\Controllers\Auth;

use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       return $response = Validator::make($data, [
            'fullname' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'DOB' => 'required|string|max:255',
            'hobbies' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'quote' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'confirm_password' => 'required|same:password',
            'biography' => 'required|string|max:255',
            'active' => 'integer'
        ]);
        // dd($response);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Profile
     */
    protected function create(array $data)
    {
        return Profile::create([
            'fullname' => $data['fullname'],
            'nickname' => $data['nickname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'status' => $data['status'],
            'gender' => $data['gender'],
            'biography' => $data['biography'],
            'country' => $data['country'],
            'DOB' => $data['DOB'],
            'hobbies' => $data['hobbies'],
            'address' => $data['address'],
            'quote' => $data['quote'],
            'password' => Hash::make($data['password']),
            'active' => 1,
        ]);

    }
}
