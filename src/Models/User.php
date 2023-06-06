<?php

namespace App\Models;

use App\DB;

class User extends Model{
    static $table = 'posts';
    public $id;
    public $email;
    public $password;

    static function auth() {
        if($_SESSION['userID']) {
            return self::find($_SESSION['userID']);
        }
        return false;
    }
}