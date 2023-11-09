<?php
class SettingModel extends MainModel
{
    protected static $primaryKey = 'id';
    protected static $tableName = 'setting';
    protected static $tableSchema = array(
        'whatsapp' => self::DATA_TYPE_STR,
        'email' => self::DATA_TYPE_STR,
        'facebook' => self::DATA_TYPE_STR,
        'twitter' => self::DATA_TYPE_STR,
        'instagram' => self::DATA_TYPE_STR,
        'linkedin' => self::DATA_TYPE_STR,
        'youtube' => self::DATA_TYPE_STR,
    );
}