<?php

/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 13/10/15
 * Time: 20:52
 */

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