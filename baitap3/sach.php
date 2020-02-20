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
          <label for="tac_gia">Tac gia</label>
          <input type="text" name="tac_gia" placeholder="Tac gia">
        </div>

        <div>
          <label for="so_trang">So trang</label>
          <input type="number" name="so_trang" placeholder="So trang">
        </div>
      </div>
      <input type="hidden" name="loai_tai_lieu" value="sach">
      <button type="submit" name="submit">Them</button>
    </form>
  </body>

</html>