<?php
$paths = [LIB_PATH, CONTROLLERS_PATH, MODELS_PATH, CORE_PATH];
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $paths));
spl_autoload_register('spl_autoload');