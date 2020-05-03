<?php include './sinh_vien.inc.php'; ?>
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
            <h1 class="h2">Sinh viên</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <a href="./them_sinh_vien.php" class="btn btn-sm btn-outline-secondary">
                  Thêm sinh viên
                </a>
              </div>
            </div>
            <div class="table-responsive">
            <?php print danh_sach_sinh_vien(); ?>
            </div>
        </main>

      </div>
    </div>
  </body>
</html>