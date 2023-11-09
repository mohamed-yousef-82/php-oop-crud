<?php
class BlogModel extends MainModel
{
    protected static $primaryKey = 'id';
    protected static $tableName = 'blog';
    protected static $tableSchema = array(
        'title_ar' => self::DATA_TYPE_STR,
        'title_en' => self::DATA_TYPE_INT,
        'content_ar' => self::DATA_TYPE_DECIMAL,
        'content_en' => self::DATA_TYPE_DECIMAL,
        'image' => self::DATA_TYPE_DECIMAL
    );
}