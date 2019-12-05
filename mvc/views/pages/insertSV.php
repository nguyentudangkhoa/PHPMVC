
<form action="./SinhVien/insert" method="POST">
  Mã số Sinh viên:<br>
  <input type="text" id="txtmssv" name="mssv" value="" placeholder="Mã số Sinh viên">
  <div id="SVmess"></div>
  <br>
  Tên sinh viên:<br>
  <input type="text" name="name" value="" placeholder="Tên Sinh Viên">
  <br><br>
  <input type="submit" name="btnInsert" value="Thêm Sinh viên">
  <?php
  if(isset($data['result'])){
      echo 'Insert thành công';
  }
  ?>
</form> 