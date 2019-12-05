<?php
    class Home extends Controller{
        public $ModelName;
        function __construct()
        {
            $this->ModelName = $this->model("SinhVienModel");//khởi tạo sv dùng chung
        }
        function SayHi(){
        }
        function Show(){
            $this->view('master',['XinChao'=>$this->ModelName -> XinChao('Khoa'),
                                 'pages'=>'content',
                                 'Array'=>[1,2,3,5],
                                 'SV'=>$this->ModelName->SinhVien()]);
        }
    }
