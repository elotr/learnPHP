<?php

namespace App\Models;

use App\DB;

abstract class Model {
    static $table;
    public $id;

    static function all() {
        $db = new DB;
        return $db->all(static::$table, static::class);
    }

    static function find($id) {
        $db = new DB;
        return $db->find(static::$table, static::class, $id);
    }

    static function where($field, $value) {
        $db = new DB;
        return $db->find(static::$table, static::class, $field, $value);
    }

    public function save() {
        $db = new DB();
        $vars = get_object_vars($this);
        unset($vars['id']);
        $fields = array_keys($vars);
        $values = array_values($vars);
        //dump($fields, $values);
        if($this->id == null) {
            $db->insert(static::$table, $fields, $values);
        }
        else {
            $db->update(static::$table, $fields, $values, $this->id);
        }
    }

    public function delete() {
        $db = new DB();
        $db -> delete(static::$table, $this->id);
    }
}