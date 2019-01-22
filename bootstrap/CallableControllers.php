<?php

$container["ChatController"] = function($container) {
return new \App\Controller\ ChatController($container);
 };
$container["CrudController"] = function($container) {
return new \App\Controller\ CrudController($container);
 };
$container["HomeController"] = function($container) {
return new \App\Controller\ HomeController($container);
 };