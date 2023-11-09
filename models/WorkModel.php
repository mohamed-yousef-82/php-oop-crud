<?php
class WorkModel extends MainModel
{
    protected static $primaryKey = 'id';
    protected static $tableName = 'works';
    protected static $tableJoinName = 'categories';
    protected static $join_id = 'category_id';
    protected static $tableSchema = array(
        'title_ar' => self::DATA_TYPE_STR,
        'title_en' => self::DATA_TYPE_INT,
        'content_ar' => self::DATA_TYPE_DECIMAL,
        'content_en' => self::DATA_TYPE_DECIMAL,
        'category_id' => self::DATA_TYPE_DECIMAL,
        'user' => self::DATA_TYPE_DECIMAL,
        'date' => self::DATA_TYPE_DECIMAL,
        'image' => self::DATA_TYPE_DECIMAL
    );
}