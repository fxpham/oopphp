
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
            <h1 class="h2">Thêm Lớp</h1>
          </div>
          <div class="container">
            <div class="py-5 text-center">
              <h2>Nhập thông tin lớp</h2>
              <p class="lead">Điền các field bên dưới để thêm lớp.</p>
            </div>
            <div class="row">
              <div class="col-md-12 order-md-1">
                <form action="./lop.inc.php" method="post" class="needs-validation" novalidate>
                  <div class="mb-3">
                    <label for="tenLop">Tên</label>
                    <input type="text" class="form-control" id="tenLop" name="tenLop" value="" required>
                    <div class="invalid-feedback">
                      Vui lòng nhập tên lớp.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="maKhoa">Mã Khoa</label>
                    <input type="text" class="form-control" id="maKhoa" name="maKhoa">
                    <div class="invalid-feedback">
                      Vui lòng nhập thông tin Lớp.
                    </div>
                  </div>
                  <input type="hidden" name="maLop" value="">
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