<?php

namespace APP\Controllers;

use App\Models\User;

class AuthController {
    public function loginForm() {
        view('auth/login');
    }
    public function registerForm() {     
        view('auth/register');
    }
    public function login() {
        $user = User::where('email', $_POST['email'])[0];
        if($user->password === md5($_POST['password'])) {
            $_SESSION['userId'] = $user->id;
        }
        else {
            header('Location: /register');
        }
    }
    public function register() {
        if($_POST['password'] === $_POST['password_confirm']){
            $user = new User();
            $user->email = $_POST['email'];
            $user->password = md5($_POST['password']);
            $user->save();
            header('Location: /login');
        }
        else {
            header('Location: /register');
        }
        

    }

}