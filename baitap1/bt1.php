<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Bai tap 1</title>
  </head>

  <body>
    <form action="./bt1.inc.php" method="post">
      <p>Tong 2 so phuc</p>
      <div>
      <p>So phuc 1</p>
      <input type="number" name="phuc1_thuc" placeholder="Phan thuc">
      <input type="number" name="phuc1_ao" placeholder="Phan ao">
      </div>
      <select name="phep_toan">
        <option value="cong">Cộng</option>
        <option value="nhan">Nhân</option>
      </select>
      <div>
      <p>So phuc 2</p>
      <input type="number" name="phuc2_thuc" placeholder="Phan thuc">
      <input type="number" name="phuc2_ao" placeholder="Phan ao">
      </div>
      <button type="submit" name="submit">Tinh</button>
    </form>
  </body>

</html>