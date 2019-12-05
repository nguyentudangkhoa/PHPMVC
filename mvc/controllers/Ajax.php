<?php
class Ajax extends Controller{
    public $SV;
    public function __construct(){
        $this->SV = $this->model("SinhVienModel");
    }
    public function checkSV(){
        $mssv = $_POST["SV"];
        echo $this->SV->checkSV($mssv);
    }
}
?>