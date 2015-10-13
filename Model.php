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
        $this->string = “MVC + PHP = Awesome, click here!”;
    }

}

class Controller
{
    private $model;

    public function __construct($model){
        $this->model = $model;
    }

    public function clicked() {
        $this->model->string = “Updated Data, thanks to MVC and PHP!”
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

    public function output() {
        return '<p><a href="mvc.php?action=clicked"' . $this->model->string . "</a></p>";
    }
}
$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->output();