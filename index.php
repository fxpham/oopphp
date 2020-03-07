
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bai tap</title>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Thêm sinh viên</h1>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 order-md-1">
                <form action="includes/sinhvien.inc.php" method="post" class="needs-validation" novalidate>

                  <div class="mb-3">
                    <label for="msv">Mã sinh viên</label>
                      <input type="text" class="form-control" id="msv" name="msv" placeholder="Mã sinh viên" required>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="lastName">Họ</label>
                      <input type="text" class="form-control" id="lastName" name="ho" placeholder="Nguyễn Văn" value="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="firstName">Tên</label>
                      <input type="text" class="form-control" id="firstName" name="ten" placeholder="A" value="" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="gioitinh">Giới tính</label>
                      <select class="custom-select d-block w-100" id="gioitinh" name="gioi_tinh" required>
                        <option value="">Chọn...</option>
                        <option value="nam">Nam</option>
                        <option value="nu">Nữ</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="dob">Ngày sinh</label>
                      <input type="date" class="form-control" id="dob" name="ngay_sinh" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="cmnd">Chứng minh nhân dân</label>
                      <input type="text" class="form-control" id="cmnd" name="cmnd" placeholder="1122334455" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="sdt">Số điện thoại</label>
                      <input type="text" class="form-control" id="sdt" name="sdt" placeholder="0123456789" required>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="dia_chi" placeholder="123 Trần Hưng Đạo, Quận 1, TP.Hồ Chí Minh">
                  </div>
                  <input type="hidden" name="loai_du_lieu" value="sinh_vien" />

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