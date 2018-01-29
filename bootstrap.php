<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Kernel;

try {
    $crawlerKernel = new Kernel();

    // New boxes, console commands and parsers must be registered here

    return $crawlerKernel;
} catch (\Exception $e) {
    (new \Ig0rbm\Webcrawler\ErrorHandler($e))
        ->handle();
}