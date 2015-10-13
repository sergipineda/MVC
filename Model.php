<?php

/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 13/10/15
 * Time: 20:51
 */

class Model
{
    public $string;

    public function __construct(){
        $this->string = "MVC + PHP = Awesome!";
    }
}

class Controller
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }
}
class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output(){
        return "<p>" . $this->model->string . "</p>";
    }
}
$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->output();