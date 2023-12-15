<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Register ⦁ U-TECH</title>
    <link rel="stylesheet" href="css/style.css">
</head>
  
<body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><center><div class="container">
    <form name="register" method="POST" action="aksi_register.php">

    <div class="mb-3">
        <input type="text" name="id_admin" class="form-control" id="id_admin" aria-describedby="idHelp"placeholder="ID (6 Digit)">
    </div>

    <div class="mb-3">
        <input type="text" name="nama_admin" class="form-control" id="nama_admin" aria-describedby="idHelp"placeholder="Nama">
    </div>

    <div class="mb-3">
        <input type="password" name="password" class="form-control" id="exampleInputPassword1"placeholder="Password (8-10 Karakter)">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary" type="submit">Register</button>
    </div>

    </form>
</div></center></br></br></br></br></br>

<style>
body {
    background-image: url(../Image/bg-index.png);
    background-size: cover;
}

.form-control {
    width: 550;
}

.btn {
    width: 550;
}
</style>

</body>
</html>
