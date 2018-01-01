<?php

namespace App;

use Ig0rbm\Webcrawler\CrawlerKernel;
use Symfony\Component\Dotenv\Dotenv;

class Kernel extends CrawlerKernel
{
    public function __construct()
    {
        $this->loadDotenv(new Dotenv);
        $this->loadParsers();

        parent::__construct();
    }
}