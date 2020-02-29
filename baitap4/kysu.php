<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h2>NHẬP KỸ SƯ</h2>
    <form action="./bt4.inc.php" method="post">
      <div>
        <div>
        <label for="hoten">Họ tên: </label>
        	<input type="text" name="hoten" placeholder="hoten">
        </div>

        <div>
          <label for="tuoi">Tuổi:</label>
          <input type="number" name="tuoi" placeholder="tuoi">
        </div>

        <div>
          <label for="gioitinh">Giới tính:</label>
          <select name="gioitinh">
            <option value="nam">Nam</option>
            <option value="nu">Nữ</option>
            <option value="khac">Khác</option>
          </select>
        </div>

        <div>
          <label for="diachi">Địa chỉ:</label>
          <input type="text" name="diachi" placeholder="diachi">
        </div>

        <div>
          <label for="nganhdaotao">Ngành đào tạo:</label>
          <input type="text" name="nganhdaotao" placeholder="nganhdaotao">
        </div>
      </div>
      <input type="hidden" name="loaicanbo" value="kysu">
      <button type="submit" name="submit">Them</button>
    </form>
</body>
</html>