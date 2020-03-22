<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XÓA SINH VIÊN</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./js/huy.js"></script>
</head>

<body>
<div class="1">
  <h1 class="h2">XÓA THÔNG TIN</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 order-md-1">
      <form action="./includes/sv.inc.php" method="post" class="needs-validation" novalidate="novalidate">
        <div class="mb-3">
          <table width="366" border="1">
            <tr>
              <td width="142">Mã sinh viên :</td>
              <td width="208"><label for="Idsv"></label>
              <input type="text" name="masv" id="masv" /></td>
            </tr> 
            
          </table>
        </div>
        <hr class="mb-4" />
        <button class="2" type="submit" >Xóa</button>
        </form>
        <button class="2" id="btn-huy" type="submit" >Hủy</button>
    </div>
  </div>
</div>

</body>
</html>
