
<!doctype html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bai tap</title>
    <!-- Bootstrap core CSS -->
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
  </head>

  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <h2>Nhập thông tin sinh viên</h2>
    <p class="lead">Điền các field bên dưới để thêm sinh viên.</p>
  </div>

  <div class="row">
    <div class="col-md-12 order-md-1">
      <h4 class="mb-3">Thông tin</h4>
      <form class="needs-validation" novalidate>

        <div class="mb-3">
          <label for="msv">Mã sinh viên</label>
          <div class="input-group">
            <input type="text" class="form-control" id="msv" placeholder="Mã sinh viên" required>
            <div class="invalid-feedback" style="width: 100%;">
              Mã sinh viên là bắt buộc.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="lastName">Họ</label>
            <input type="text" class="form-control" id="lastName" placeholder="Nguyễn Văn" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="firstName">Tên</label>
            <input type="text" class="form-control" id="firstName" placeholder="A" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="gioitinh">Giới tính</label>
            <select class="custom-select d-block w-100" id="gioitinh" required>
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
            <input type="date" class="form-control" id="dob" required>
            <div class="invalid-feedback">
              Vui lòng nhập Ngày sinh.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cmnd">Chứng minh nhân dân</label>
            <input type="text" class="form-control" id="cmnd" placeholder="1122334455" required>
            <div class="invalid-feedback">
              Vui lòng nhập chứng minh nhân dân.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="sdt">Số điện thoại</label>
            <input type="text" class="form-control" id="sdt" placeholder="0123456789" required>
            <div class="invalid-feedback">
              Vui lòng nhập số điện thoại.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Địa chỉ</label>
          <input type="text" class="form-control" id="address" placeholder="123 Trần Hưng Đạo, Quận 1, TP.Hồ Chí Minh">
          <div class="invalid-feedback">
            Vui lòng nhập thông tin địa chỉ.
          </div>
        </div>

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Lưu</button>
      </form>
    </div>
  </div>

</div>

</html>
