<?php
ob_start();
session_start();
require_once "core/db.php";
require_once "config.php";
require_once "lib/autoload.php";
$app = new App();
$app->run();
ob_end_flush();