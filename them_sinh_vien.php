
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
            <h1 class="h2">Thêm Khoa</h1>
          </div>
          <div class="container">
            <div class="py-5 text-center">
              <h2>Nhập thông tin sinh viên</h2>
              <p class="lead">Điền các field bên dưới để thêm sinh viên.</p>
            </div>
            <div class="row">
              <div class="col-md-12 order-md-1">
                <form action="./sinh_vien.inc.php" method="post" class="needs-validation" novalidate>
                	<div class="mb-3">
                    <label for="masv">MãSV</label>
                    <input type="text" class="form-control" id="tensv" name="masv" value="" required>
                    <div class="invalid-feedback">
                      Vui lòng nhập mã sinh viên.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="tensv">TênSV</label>
                    <input type="text" class="form-control" id="tensv" name="tensv" value="" required>
                    <div class="invalid-feedback">
                      Vui lòng nhập tên sinh viên.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="ngaysinh">Ngày sinh</label>
                    <input type="text" class="form-control" id="ngaysinh" name="ngaysinh">
                    <div class="invalid-feedback">
                      Vui lòng nhập thông tin ngày sinh.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="gioitinh">Giới tính</label>
                    <input type="text" class="form-control" id="gioitinh" name="gioitinh">
                    <div class="invalid-feedback">
                      Vui lòng nhập thông tin giới tính
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="diachi">Địa chỉ</label>
                    <input type="text" class="form-control" id="diachi" name="diachi">
                    <div class="invalid-feedback">
                      Vui lòng nhập thông tin địa chỉ
                    </div>
                  </div>
                  <input type="hidden" name="masv" value="">
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