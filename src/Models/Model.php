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

    public function save() {
        $db = new DB();
        $vars = get_object_vars($this);
        unset($vars['id']);
        $fields = array_keys($vars);
        $values = array_values($vars);
        //dump($fields, $values);
        $db->insert(static::$table, $fields, $values);
    }
}