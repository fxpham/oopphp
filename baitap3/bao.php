<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Bai tap 3</title>
  </head>

  <body>
    <h2>Nhap Bao</h2>
    <form action="./bt3.inc.php" method="post">
      <div>
        <div>
        <label for="ma_tai_lieu">Ma tai lieu</label>
        <input type="text" name="ma_tai_lieu" placeholder="Ma tai lieu">
        </div>

        <div>
          <label for="nha_xuat_ban">Nha xuat ban</label>
          <input type="text" name="nha_xuat_ban" placeholder="Nha xuat ban">
        </div>

        <div>
          <label for="so_luong">So luong</label>
          <input type="text" name="so_luong" placeholder="So luong">
        </div>

        <div>
          <label for="ngay_phat_hanh">Ngay phat hanh</label>
          <input type="date" name="ngay_phat_hanh" placeholder="Ngay phat hanh">
        </div>

      </div>
      <input type="hidden" name="loai_tai_lieu" value="bao">
      <button type="submit" name="submit">Them</button>
    </form>
  </body>

</html>