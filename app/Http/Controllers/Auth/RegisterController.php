<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'introduce' => ['required', 'string', 'max:500'],
            'portfolio' => ['nullable','string'],
            'sns' => ['nullable','string'],
            'image_path' => ['nullable'],
            'credit' => ['nullable','string', 'max:255', 'unique:users'],
        ]);
    }
    
    public function image($data)
    {
        if (array_key_exists('image_path', $data)) {
        	$image = $data['image_path'];
            $image_path = Storage::disk('s3')->put('profile/images', $image, '$image', 'public');
            return Storage::disk('s3')->url($image_path);
        }  
         
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        $image_path = $this->image($data);
        // dd($data);
        
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'introduce' => $data['introduce'],
            'portfolio' => $data['portfolio'],
            'image_path' =>$image_path,
            'sns' => $data['sns'],
            'credit' => $data['credit'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
