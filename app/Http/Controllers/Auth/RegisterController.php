<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

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
   // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'role' => ['required', 'integer']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'role' => $data['role']
    //     ]);
    // }


    function addingClient(Request $request)
    {
        
        $request->validate([
            // 'name' => ['required', 'string', 'max:255'],
            // 'gender' => ['required', 'string', 'in:M,F'],
            // 'dob' => ['required', 'string', 'date','before:-18 years'],
            // 'email' => ['string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'address' => ['string'],
            // 'mobile' =>['string','unique:users'],
            // 'nic'=>['integer'],
    

            // 'income' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            // 'expenses' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            // 'assets' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            // 'liabilities' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            // 'employment' => 'required|string',
            // 'accountNumber' => 'required',
            // 'accountBalance' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            // 'loanPurpose' => 'required|string',
            
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        
        $user->password = \Hash::make($request->password);

        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->nic = $request->nic;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->role = $request->role;

        $user->income = $request->income;
        $user->expenses = $request->expenses; 
        $user->assets = $request->assets;
        $user->liabilities = $request->liabilities;
        $user->employment = $request->employment;
        $user->accountNumber = $request->accountNumber;
        $user->accountBalance = $request->accountBalance;
        $user->loanPurpose = $request->loanPurpose;

        if( $user->save() ){
            return redirect()->back()->with('message','successful');
        }else{
            return redirect()->back()->with('message','Failed');
        }

    }


}
