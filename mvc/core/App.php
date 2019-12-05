<?php
    class App{ //Xử lý thanh địa chỉ
        protected $controller = "Home";//controller
        protected $action = "SayHi";//function in controller
        protected $params = [];//params (parameters in function)
        function __construct(){
            $arr = $this->UrlProcess();
            //print_r($arr);
            //xử lý controller
            if(file_exists("./mvc/controllers/".$arr[0].".php")){   // kiểm tra tồn tại controller
                $this->controller = $arr[0];
                unset($arr[0]);// khi lấy dc r thì klhông cần nữa nên unset
            }
            require_once "./mvc/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;
            //xử lý action
            if(isset($arr[1])){
                if(method_exists($this->controller,$arr[1])){ // kiểm ra function tồn tại
                    $this->action = $arr[1];
                }
                unset($arr[1]);// khi lấy dc r thì klhông cần nữa nên unset
            }
            //Xử lí params
            $this->params = $arr?array_values($arr):[];
            call_user_func_array([$this->controller,$this->action],$this->params);// dùng để try cập controller action và param trong function nếu có
        }
        function UrlProcess(){
            if(isset($_GET["url"]))
                return explode("/",filter_var(trim($_GET["url"],"/")));// lấy phần tử sau dấu "/" và cắt 
        }
    }
