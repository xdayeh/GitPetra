<?php

namespace GitPetra;

use GitPetra\Core\Application;
use GitPetra\Controller\SiteController;

require_once 'init.php';

$app = new Application(APP_PATH);
$app->router->get(DS,[SiteController::class, 'Home']);
$app->router->get(DS.'about', [SiteController::class, 'About']);
$app->router->get(DS.'pay', [SiteController::class, 'Pay']);
$app->router->get(DS.'language', [SiteController::class, 'Language']);
$app->run();