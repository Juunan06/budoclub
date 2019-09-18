<?php
spl_autoload_register(function ($class) {
    if(file_exists('./classes/' . $class . '.php')){
        include './classes/' . $class . '.php';
    }else if(file_exists('../classes/' . $class . '.php')){
        include '../classes/' . $class . '.php';
    }else if(file_exists('../../classes/' . $class . '.php')){
        include '../../classes/' . $class . '.php';
    }else if(file_exists('../../../classes/' . $class . '.php')){
        include '../../../classes/' . $class . '.php';
    }
});