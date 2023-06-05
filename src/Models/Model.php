<?php

namespace App\Models;

use App\DB;

abstract class Model {
    static $table;

    static function all() {
        $db = new DB;
        return $db->all(static::$table, static::class);
    }

    static function find($id) {
        $db = new DB;
        return $db->all(static::$table, static::class, $id);
    }
}