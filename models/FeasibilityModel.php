<?php
class FeasibilityModel extends MainModel
{
    protected static $primaryKey = 'id';
    protected static $tableName = 'feasibility';
    protected static $tableSchema = array(
        'content_ar' => self::DATA_TYPE_STR,
        'content_en' => self::DATA_TYPE_STR,
    );
}