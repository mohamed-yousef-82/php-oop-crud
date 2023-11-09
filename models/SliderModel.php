<?php
class SliderModel extends MainModel
{
    protected static $primaryKey = 'id';
    protected static $tableName = 'slider';
    protected static $tableSchema = array(
        'title_ar' => self::DATA_TYPE_STR,
        'title_en' => self::DATA_TYPE_INT,
        'content_ar' => self::DATA_TYPE_DECIMAL,
        'content_en' => self::DATA_TYPE_DECIMAL
    );
}