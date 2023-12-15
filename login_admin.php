<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title> MASUKAN DATA DENGAN BENAR</title>

</head>
<body>
<br>
        <div class="container">
 <form name="login" method="POST" action="ceklogin/login_admin.php">
  <center><h3 class="textJudul mb-5 mt-1">Login Admin</h3></center>

 <div class="mb-3">
  <label for="exampleInputUserId" class="form-label textForm"> Masukan Id</label>
  <input type="text" name="id_admin" class="form-control" id="id_admin" aria-describedby="idHelp"placeholder="Masukan Id">
 </div>

 <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label textForm">Password</label>
  <input type="password" name="password" class="form-control" id="exampleInputPassword1"placeholder="Masukan Password">
 </div>

<p><br>
 <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary"  type="submit" href="ceklogin/login_admin.php" type="button">Login</button>
 </div>
</br></p>

 </form></div></body>
</html>