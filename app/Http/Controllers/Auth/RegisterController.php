<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    private UserRepositoryInterface $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function registerPage()
    {
        return view('auth.register');
    }


    public function register(RegisterRequest $request)
    {
        $this->userRepository->createUser($request->only('name', 'email', 'password'));
        return redirect()->route('login-page')->with('success', 'Registration successfully done.');
    }
}
