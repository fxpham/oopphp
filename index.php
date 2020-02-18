<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Title of the document</title>
  </head>

  <body>
    <form action="includes/calc.inc.php" method="post">
      <p>My own calculator 1</p>
      <input type="number" name="num1" placeholder="First number">
      <select name="oper">
        <option value="add">Cộng</option>
        <option value="sub">Trừ</option>
        <option value="div">Chia</option>
        <option value="mul">Nhân</option>
      </select>
      <input type="number" name="num2" placeholder="Second number">
      <button type="submit" name="submit">Calculate</button>
    </form>
  </body>

</html>