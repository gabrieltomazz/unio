<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   
        if ($data['tipo_user_id'] == 1) {
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'universidade_id'=>$data['universidade_id'],
                'cursos_id'=>$data['cursos_id'],
                'departamento_id'=>$data['departamento_id'],
                'tipo_user_id'=>$data['tipo_user_id'],
                'biografia'=>$data['biografia']
            ]);
        }
        else{
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'universidade_id'=>$data['universidade_id'],
                'departamento_id'=>$data['departamento_id'],
                'tipo_user_id'=>$data['tipo_user_id'],
                'biografia'=>$data['biografia']
            ]);
        }
    }

  
    public function store(Request $request)
    {
        $user = new User;
        $user->fill($request->all());
        $user->universidade_id = $request->universidade_id;
        $user->departamento_id = $request->departamento_id;
        $user->curso_id = $request->curso_id; 
        $user->tipo_user_id = $request->tipo_user_id;

        $request->thefile->move(
        base_path() . '/curriculos/', "testepdf");

        $user->save();
        return redirect()->route('projetos.index')->with('message', 'projeto created successfully!');
    }





}
