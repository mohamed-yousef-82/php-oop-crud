<?php

class LoginModel extends MainModel
{
 protected static $tableName = 'users';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'username',
           'password'
 );
}