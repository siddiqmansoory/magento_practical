<?php

ini_set('display_errors', 1);

//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

use Magento\Framework\App\Bootstrap;
require __DIR__ . '/app/bootstrap.php';

$bootstrap = Bootstrap::create(BP, $_SERVER);
$obj = $bootstrap->getObjectManager();
$state = $obj->get('Magento\Framework\App\State');
$state->setAreaCode('frontend');
$product = $obj->get('Deval\Recurring\Cron\RecurringOrder')->execute();
?>