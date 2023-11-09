<?php
class UserModel extends MainModel
{
    protected static $primaryKey = 'id';
    protected static $tableName = 'users';
    protected static $tableSchema = array(
        'username' => self::DATA_TYPE_STR,
        'email' => self::DATA_TYPE_INT,
        'password' => self::DATA_TYPE_DECIMAL,
        'image' => self::DATA_TYPE_DECIMAL
    );
}