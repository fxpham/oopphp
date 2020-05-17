<?php
  include './sinh_vien.inc.php';
  $ma_sv = $_GET['ma_sv'];
  $repo = new SinhVienRepo();
  $sinhvien = $repo->get($ma_sv);
  //print_r($sinhvien);exit;
?>

<!doctype html>
<html lang="vi">
  <?php
  include './views/head.php';
  ?>

  <body>
    <?php include './views/header.php';?>

    <div class="container-fluid">
      <div class="row">
        <?php include './views/nav.php'?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Sửa sinh viên</h1>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 order-md-1">
              <form action="./sinh_vien.inc.php" method="post" class="needs-validation" novalidate>
                  <div class="mb-3">
                    <label for="ho_sv">Họ</label>
                    <input type="text" class="form-control" id="ho_sv" name="ho_sv" value="<?php print($sinhvien['Ho']); ?>" required>
                    <div class="invalid-feedback">
                      Vui lòng nhập tên sinh viên.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="ten_sv">Tên</label>
                    <input type="text" class="form-control" id="ten_sv" name="ten_sv" value="<?php print($sinhvien['TenSV']); ?>" required>
                    <div class="invalid-feedback">
                      Vui lòng nhập tên sinh viên.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="ngay_sinh">Ngày sinh</label>
                    <input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" value="<?php print($sinhvien['NgaySinh']); ?>">
                    <div class="invalid-feedback">
                      Vui lòng nhập thông tin ngày sinh.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="gioi_tinh">Giới tính</label>
                    <select id="gioi_tinh" name="gioi_tinh" value="<?php print($sinhvien['GioiTinh']); ?>">
                      <option value="0">Nữ</option>
                      <option value="1">Nam</option>
                      <option value="2">Khác</option>
                    </select>
                    <div class="invalid-feedback">
                      Vui lòng nhập thông tin giới tính
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="dia_chi">Địa chỉ</label>
                    <input type="text" class="form-control" id="dia_chi" name="dia_chi" value="<?php print($sinhvien['DiaChi']); ?>">
                    <div class="invalid-feedback">
                      Vui lòng nhập thông tin địa chỉ
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="dien_thoai">Điện thoại</label>
                    <input type="text" class="form-control" id="dien_thoai" name="dien_thoai" value="<?php print($sinhvien['DienThoai']); ?>">
                    <div class="invalid-feedback">
                      Vui lòng nhập thông tin địa chỉ
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="ma_lop">Mã lớp</label>
                    <?php print danh_sach_chon_lop(); ?>
                    <div class="invalid-feedback">
                      Vui lòng nhập thông tin địa chỉ
                    </div>
                  </div>
                  
                  <div class="mb-3">
                    <label for="hinh_anh">Hình ảnh</label>
                    <input type="file" class="form-control" id="hinh_anh" name="hinh_anh">
                  </div>

                  <input type="hidden" name="ma_sv" value="<?php print($sinhvien['MaSV']); ?>">
                  <input type="hidden" name="action" value="save" />
                  <hr class="mb-4">
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Lưu</button>
                </form>
              </div>
            </div>
          </div>
        </main>

      </div>
    </div>
  </body>
</html>