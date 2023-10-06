<?php

class App
{
    public function __construct()
    {

        if (!empty($_GET)) {
            $url = explode('/', rtrim($_GET['url'], '/'));
        } else {
            $url[0] = 'index';
        }
        $file_name = 'controllers/' . $url[0] . '.php';
        if (file_exists($file_name)) {
            //подключение контроллера
            require_once $file_name;
            $controller = new $url[0];
            //вызов метода
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    //передача параметров методу
                    if (isset($url[2])) {
                        $controller->{$url[1]}($url[2]);
                    } else {
                        $controller->{$url[1]}();
                    }
                } else {
                    echo 'method not exists';
                }
            } else {
                $controller->index();
            }
        } else {
            echo 'file not exists';
        }
    }
}
