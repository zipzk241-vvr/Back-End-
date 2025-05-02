<?php
require_once 'autoload.php';

use Models\UserModel;
use Controllers\UserController;
use Views\UserView;

$model = new UserModel();
$controller = new UserController();
$view = new UserView();

$content = $model->getUserName() . "<br>" . $controller->handleRequest();
$view->render($content);
