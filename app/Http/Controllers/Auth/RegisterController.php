<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @param Request $request
     * @return mixed
     */
    protected function validator(Request $request)
    {
        return $request->validate(['mobile' => ['required', 'min:11', 'unique:users']]);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    protected function create(Request $request)
    {
        $this->validator($request);
        $random = random_int(1000, 5000);
        User::create(['mobile' => $request->mobile, 'code' => $random]);
        session()->push('verify_registration', $random);

        return redirect('/register');
    }

    public function verify(Request $request)
    {
        $request->validate(['verify' => ['required']], ['verify.required' => 'ورود کد تایید الزامی است.']);
        $user = User::where('code', $request->verify)->first();
        if (!empty($user)) {
            Auth::loginUsingId($user->id);
            return redirect('/user-dashboard');
            session()->forget('verify_registration');
        }

    }
}
