<?php

define('TL_ROOT', dirname(dirname(__DIR__)) . '/contao/core');

require_once __DIR__ . '/src/Netzmacht/Contao/BuildTools/ClassLoader.php';

\Netzmacht\Contao\BuildTools\ClassLoader::scanAndRegister();