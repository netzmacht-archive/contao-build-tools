<?php

define('TL_ROOT', dirname(dirname(__DIR__)) . '/contao/core');

// only load fake autoloader if we are in the contao context.
if (file_exists(TL_ROOT . '/system/initialize.php')) {
    require_once __DIR__ . '/src/Netzmacht/Contao/BuildTools/ClassLoader.php';

    \Netzmacht\Contao\BuildTools\ClassLoader::scanAndRegister();
}
