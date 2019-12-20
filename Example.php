<?php
require 'vendor/autoload.php';
use WeSender\WeSenderSDK;

$WSDK = new WeSenderSDK('apikey');

$res = $WSDK->sendMessage(["926000000"], "Olá");

var_dump($res);