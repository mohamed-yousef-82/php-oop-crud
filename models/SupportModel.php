<?php
class SupportModel extends MainModel
{
    protected static $primaryKey = 'id';
    protected static $tableName = 'support';
    protected static $tableSchema = array(
        'content_ar' => self::DATA_TYPE_STR,
        'content_en' => self::DATA_TYPE_STR,
    );
}