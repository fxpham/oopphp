
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Template · Bootstrap</title>

    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#563d7c">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="./assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Quản lý sinh viên</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="../">Tổng quan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./includes/sinh_vien.inc.php">Sinh viên</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Thêm sinh viên</h1>
          </div>
          <div class="container">
            <div class="py-5 text-center">
              <h2>Nhập thông tin sinh viên</h2>
              <p class="lead">Điền các field bên dưới để thêm sinh viên.</p>
            </div>

            <div class="row">
              <div class="col-md-12 order-md-1">
                <h4 class="mb-3">Thông tin</h4>
                <form action="./includes/them_sinh_vien.inc.php" method="post" class="needs-validation" novalidate>

                  <!-- <div class="mb-3">
                    <label for="msv">Mã sinh viên</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="msv" name="msv" placeholder="Mã sinh viên" required>
                      <div class="invalid-feedback" style="width: 100%;">
                        Mã sinh viên là bắt buộc.
                      </div>
                    </div>
                  </div> -->

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="lastName">Họ</label>
                      <input type="text" class="form-control" id="lastName" name="ho" placeholder="Nguyễn Văn" value="" required>
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="firstName">Tên</label>
                      <input type="text" class="form-control" id="firstName" name="ten" placeholder="A" value="" required>
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
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
                      <div class="invalid-feedback">
                        Vui lòng chọn giới tính.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="dob">Ngày sinh</label>
                      <input type="date" class="form-control" id="dob" name="ngay_sinh" required>
                      <div class="invalid-feedback">
                        Vui lòng nhập Ngày sinh.
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="cmnd">Chứng minh nhân dân</label>
                      <input type="text" class="form-control" id="cmnd" name="cmnd" placeholder="1122334455" required>
                      <div class="invalid-feedback">
                        Vui lòng nhập chứng minh nhân dân.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="sdt">Số điện thoại</label>
                      <input type="text" class="form-control" id="sdt" name="sdt" placeholder="0123456789" required>
                      <div class="invalid-feedback">
                        Vui lòng nhập số điện thoại.
                      </div>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="dia_chi" placeholder="123 Trần Hưng Đạo, Quận 1, TP.Hồ Chí Minh">
                    <div class="invalid-feedback">
                      Vui lòng nhập thông tin địa chỉ.
                    </div>
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
