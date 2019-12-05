<?php
    class SinhVienModel extends DB{
        public function GetSinhVien(){
            return 'Sinhvien';
        }
        public function XinChao($ten){
            return 'Xin chào bạn: '.$ten;
        }
        public function viewSinhVien(){
            $sql = "SELECT * FROM sinhvientt";
            return mysqli_query($this->conn,$sql);
        }
        public function insertSinhVien($mssv,$name){
            $sql="INSERT INTO sinhvientt values(null,'$name','$mssv')";
            $result = false;
            if(mysqli_query($this->conn,$sql)){
                $result = true;
            }
            return json_decode($result);
        }
        public function checkSV($un){
            $sql = "SELECT * FROM sinhvientt where mssv ='$un'";
            $row = mysqli_query($this->conn,$sql);
            $result = '';
            if(mysqli_num_rows($row)>0){
                $result = 'Tồn tại';
            }
            return json_decode($result);
        }
    }
?>