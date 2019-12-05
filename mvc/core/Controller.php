<?php
    class Controller{
        public function model($model)//ham ket noi model
        {
            require_once "./mvc/models/".$model.".php";
            return new $model;//$nameValue = new Model;
        }
        public function view($view, $data=[]){
            require_once "./mvc/views/".$view.".php";
        }
    }
?>