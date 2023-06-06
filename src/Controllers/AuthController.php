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

        if(password_verify($_POST['password'], $user->password)) {
            $_SESSION['userId'] = $user->id;
            header('Location: /login');
        }
        else {
            header('Location: /register');
        }
    }
    public function register() {
        if($_POST['password'] === $_POST['password_confirm']){
            $user = new User();
            $user->email = $_POST['email'];
            $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user->save();
            header('Location: /login');
        }
        else {
            header('Location: /register');
        }
        
    }

}