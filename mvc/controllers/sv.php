<?php
class sv extends Controller{
    public $SV;
    public function __construct(){
        $this->SV = $this->model("SinhVienModel");
    }
    public function SayHi(){
        $this->view('master',['pages'=>'insertSV']);
    }
    public function insert(){
        if(isset($_POST["btnInsert"])){
            $name = $_POST["name"];
            $mssv = $_POST["mssv"];
            if(!empty($name) && !empty($mssv)){
                $kq = $this->SV->insertSinhVien($mssv,$name);
                $this->view('master',['pages'=>'insertSV',
                                     'result'=>$kq,
                                     ]);
            }
        }
    }
}
?>