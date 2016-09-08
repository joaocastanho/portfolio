<?php

// index
$app->get('/', 'ControllerIndex:index')->setName('index');

// backoffice
$app->get('/login', 'ControllerAuth:pageLogin')->setName('login');
