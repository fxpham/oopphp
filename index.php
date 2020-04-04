<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gui mail</title>
</head>

<body>
<div class="1">
  <h1 class="h2">Gui mail</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 order-md-1">
      <form action="./send_mail.php" method="post" class="needs-validation" novalidate="novalidate">
        <div class="mb-3">
            <div>
                <label>Email nguoi nhan: </label>
                <input type="text" name="to" id="to" />
            </div>
            <div>
                <label>Tieu de: </label>
                <input type="text" name="subject" id="subject" />
            </div>
            <div>
                <label>Noi dung: </label>
                <textarea type="text" name="body" id="body"></textarea>
            </div>

        </div>
        <input class="btn" type="submit" value="Gui mail"/>
      </form>
    </div>
  </div>
</div>

</body>
</html>
