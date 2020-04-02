<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\model\admin\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Auth;

use Illuminate\Auth\Events\Registered;
use App\Classes\ActivationService;
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
    */    use RegistersUsers;

    use RegistersUsers;
    protected $redirectTo = '/login';

    protected $activationService;
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
    public function __construct(ActivationService $activationService)
    {
        $this->middleware('guest');
        $this->middleware('guest');   $this->activationService = $activationService;
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
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\model\admin\User
     */
    public function getRegister()
    {
        return view('admin.user.register');
    }
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            // return User::create([
            //     'name' => $data['name'],
            //     'email' => $data['email'],
            //     'username' => $data['username'],
            //     'level'=>0,
            //     'password' => bcrypt($data['password']),
            // ]);

        ]);
    }
    public function store(Request $request)
    {

        $this->validate($request,
                [
                    'name' => 'required|min:5|max:255',
                    'password' => 'required',
                    'email' => 'required|email|unique:users',
                ],
                [
                    'required' => ':attribute Không được để trống',
                    'min' => ':attribute Khôngđược nhỏ hơn :min',
                    'max' => ':attribute Không được lớn hơn :max',
                ],
                [
                    'name' => 'Tên',
                    'password' => 'mật khẩu',
                    'email' => 'email',
                ]
        );
        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);
        return redirect()->route('admin/products')
            ->with('success', 'duc created successfully.');
        }

}
