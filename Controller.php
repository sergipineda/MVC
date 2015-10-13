<?php

/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 13/10/15
 * Time: 20:52
 */

class Controller
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }
}