<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    private UserRepositoryInterface $userRepository;

    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    /**
     * @return View
     */
    public function loginPage()
    {
        return view('auth.login');
    }


    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function login(LoginRequest $request)
    {
        $loginAttempt = $this->userRepository->loginAttempt($request->email, $request->password);
        if ($loginAttempt) {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->withErrors(['You have entered an invalid email or password!']);
    }
}
