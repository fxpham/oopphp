<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="1">
  <h1 class="h2">Thêm sinh viên</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 order-md-1">
      <form action="./includes/sinhvien.inc.php" method="post" class="needs-validation" novalidate="novalidate">
        <div class="mb-3">
          <table width="366" border="1">
            <tr>
              <td width="142">Mã sinh viên :</td>
              <td width="208"><label for="masv"></label>
              <input type="text" name="masv" id="masv" /></td>
            </tr>
            <tr>
              <td>Tên sinh viên: </td>
              <td><label for="tensv"></label>
              <input type="text" name="tensv" id="tensv" /></td>
            </tr>
            <tr>
              <td>Ngày sinh</td>
              <td><input type="date" class="form-control" id="dob" name="ngay_sinh" required></td>
            </tr>
            <tr>
              <td>Giới tính :</td>
              <td>
              	<select class="custom-select d-block w-100" id="gioitinh" name="gioi_tinh" required>
                        <option value="">Chọn...</option>
                        <option value="nam">Nam</option>
                        <option value="nu">Nữ</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Quê quán: </td>
              <td><label for="quequan"></label>
              <input type="text" name="quequan" id="quequan" /></td>
            </tr>
            <tr>
              <td>Năm học : </td>
              <td><label for="namhoc"></label>
              <input type="text" name="namhoc" id="namhoc" /></td>
            </tr>
            <tr>
              <td>Lớp học</td>
              <td><label for="lophoc"></label>
              <input type="text" name="lophoc" id="lophoc" /></td>
            </tr>
          </table>
        </div>
        <hr class="mb-4" />
        <button class="2" type="submit" >Thêm SV</button><button type="submit" >Hủy</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>
