<?php

class Controller {
    
    public function model ($model) {
        require_once 'Admin/models/' .$model . '.php';
        return new $model();
    }
    
    public function view ($view, $data = []) {
        require_once 'Admin/views/' . $view .'.php';
    }

}
