<?php
class AboutModel extends MainModel
{
    protected static $primaryKey = 'id';
    protected static $tableName = 'about';
    protected static $tableSchema = array(
        'content_ar' => self::DATA_TYPE_STR,
        'content_en' => self::DATA_TYPE_STR,
    );
}