<?php
  include './autoload.php';

  $ma_lop = $_GET['MaLop'];
  $repo = new LopRepo();
  $lop = $repo->get($ma_lop);
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
            <h1 class="h2">Xoá Lớp</h1>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 order-md-1">
                <form action="./lop.inc.php" method="post" class="needs-validation" novalidate>
                  <div class="py-5 text-center">
                    <h2>Xác nhận xoá lớp <?php print $lop['TenLop']?> ?</h2>
                    <p class="lead">Hành động này không thể được phục hồi.</p>
                  </div>
                  <input type="hidden" name="maLop" value="<?php print $lop['MaLop'];?>">
                  <input type="hidden" name="action" value="delete" />
                  <hr class="mb-4">
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Xoá</button>
                </form>
              </div>
            </div>
          </div>
        </main>

      </div>
    </div>
  </body>
</html>