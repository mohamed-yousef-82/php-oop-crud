<?php
class CategoryModel extends MainModel
{
    protected static $primaryKey = 'id';
    protected static $tableName = 'categories';
    protected static $tableSchema = array(
        'name_ar' => self::DATA_TYPE_STR,
        'name_en' => self::DATA_TYPE_INT,
        'parent' => self::DATA_TYPE_INT,
    );
}