<?php
class App
{
    public $router;
    public $db;
    public static $app;
    public $setting;
    public function __construct()
    {
        self::$app = $this;
        $this->db = new Database();
        $this->router = new Router();
        $this->setting = SettingModel::getAll();      
    }
    public function run()
    {
        return $this->router->resolve();
    }
}