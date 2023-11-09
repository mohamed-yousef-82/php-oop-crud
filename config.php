<?php
define('DS', DIRECTORY_SEPARATOR);
define('APP_PATH', realpath(dirname(__FILE__)) . DS);
define('CORE_PATH', APP_PATH . 'core' . DS);
define('LIB_PATH', APP_PATH . 'lib' . DS);
define('CONTROLLERS_PATH', APP_PATH . 'controllers' . DS);
define('MODELS_PATH', APP_PATH . 'models' . DS);
define('VIEWS_PATH', APP_PATH . 'views' . DS);
define('PAGEPATH', $_SERVER['REQUEST_URI']);
define('JS', APP_PATH . '/public' . DS . 'js');
define('ADMINCSS','/public' . DS .  'admin' . DS . 'css');
define('ADMINJS','/public' . DS .  'admin' . DS . 'js');
define('ADMINIMG','/public' . DS .  'admin' . DS . 'img');
define('SITECSS','/public' . DS .  'site' . DS . 'css');
define('SITEJS','/public' . DS .  'site' . DS . 'js');
define('SITEIMG','/public' . DS .  'site' . DS . 'img');
define('SITEVIDEO','/public' . DS .  'site' . DS . 'video');
define('VIDEO', APP_PATH . '/public' . DS . 'video');
?>