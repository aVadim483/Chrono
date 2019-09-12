<?php

if (file_exists($file = __DIR__ . '/../vendor/autoload.php')) {
    require_once $file;
} else {
    throw new \RuntimeException('Not found composer autoload');
}
