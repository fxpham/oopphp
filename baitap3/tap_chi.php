<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Bai tap 3</title>
  </head>

  <body>
    <h2>Nhap Sach</h2>
    <form action="./bt3.inc.php" method="post">
      <div>
        <div>
        <label for="ma_tai_lieu">Ma Sach</label>
        <input type="text" name="ma_tai_lieu" placeholder="Ma sach">
        </div>

        <div>
          <label for="nha_xuat_ban">Nha xuat ban</label>
          <input type="text" name="nha_xuat_ban" placeholder="Nha xuat ban">
        </div>

        <div>
          <label for="so_luong">So luong</label>
          <input type="number" name="so_luong" placeholder="So luong">
        </div>

        <div>
          <label for="so_phat_hanh">So phat hanh</label>
          <input type="text" name="so_phat_hanh" placeholder="So phat hanh">
        </div>

        <div>
          <label for="thang_phat_hanh">Thang phat hanh</label>
          <select type="select" name="thang_phat_hanh">
          <?php
          for ($i = 1; $i <= 12; $i++) {
            echo "<option value=\"$i\">$i</option>";
          }
          ?>
          </select>
        </div>
      </div>
      <input type="hidden" name="loai_tai_lieu" value="bao">
      <button type="submit" name="submit">Them</button>
    </form>
  </body>

</html>