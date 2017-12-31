<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Kernel;
use Ig0rbm\HandyBox\HandyBoxContainer;

$crawlerKernel = new Kernel(new HandyBoxContainer());

return $crawlerKernel;