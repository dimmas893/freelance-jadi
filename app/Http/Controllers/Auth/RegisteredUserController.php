<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $user = User::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'city_name' => $request->city_name,
            'country_name' => $request->country_name,
            'gender' => $request->gender,
            'b_year' => $request->b_year,
            'b_month' => $request->b_month,
            'b_day' => $request->b_day,
            "created" => $request->created,
            "hybridauth_provider_name" => $request->hybridauth_provider_name,
            "hybridauth_provider_uid" => $request->hybridauth_provider_uid,
            "ip_addr" => $request->ip_addr,
            "status" => $request->status,
            "profile_pic_status" => $request->profile_pic_status
        ]);
        return response()->json([
            'data' => $user,
            'status' => 200
        ]);
    }
}
