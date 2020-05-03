<!doctype html>
<html lang="vi">
  <?php
  include './views/head.php';
  ?>

  <body>
    <? include './views/header.php';?>
    <div class="container-fluid">
      <div class="row">
        <? include './views/nav.php'?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Sinh viên</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <a href="./them_sinh_vien.php" class="btn btn-sm btn-outline-secondary">
                  Thêm sinh viên
                </a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th>Mã sinh viên</th>
                    <th>Tên sinh viên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Tác vụ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1,001</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td>dolor</td>
                    <td>sit</td>
                    <td>
                    <div class="btn-group mr-2">
                      <a href="./sua_sinh_vien.php" class="btn btn-sm btn-outline-secondary">Sửa</a>
                      <a href="./xoa_sinh_vien.php" class="btn btn-sm btn-outline-secondary">Xoá</a>
                    </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              </div>
        </main>

      </div>
    </div>
  </body>
</html>