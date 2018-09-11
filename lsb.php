<?php
class Model {
  public static $table = 'table';
  public static function getTable() {
    return self::$table;
  }
}

echo 'Model::getTable()='.Model::getTable(); // 'table'
echo '<br>';


class User extends Model {
  public static $table = 'users';
}

echo 'User::getTable()='.User::getTable(); // 'table' gets Model static method. Early static binding self


class ModelTwo {
  public static $table = 'table';
  public static function getTable() {
    return static::$table;
  }
}

class UserTwo extends ModelTwo {
  public static $table = 'users';
}

echo '<br>';
echo 'UserTwo::getTable()='.UserTwo::getTable(); // 'users' gets UserTwo static method. Late static binding