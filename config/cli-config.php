<?php

$crawler = require_once __DIR__ . '/../bootstrap.php';

return $crawler->container()->fabricate('console_runner');