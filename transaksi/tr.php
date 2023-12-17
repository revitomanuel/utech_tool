<?php
  session_start();
  if(isset($_SESSION['username'])){
    include "koneksi.php";
  }else{
    header("location:index.php");
  }
?>
<html>
<head>
  <title>Form Transaksi</title>
</head>
<body>
  <form name="autoSumForm" method="post" bgcolor="red" width="75%" action="bayar.php">
    <legend>Data Pelanggan</legend>
    <fieldset>
    <?php
      $user=$_SESSION['username'];
      $sql = "SELECT * FROM member WHERE username ='$user'";
      $query = mysqli_query($db_link,$sql);
      $data = mysqli_fetch_array($query);
    ?>
    <table border=0 width="80%" bg-color="white">
      <tr>
        <td>Id Member</td>
        <td><input name='id_member' type='text' id="id_member" readonly="readonly" value="<?php echo $data['id_member'] ?>"></td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td><input name='nama' type='text' id="nama" readonly="readonly" value="<?php echo $data['nama'] ?>"></td>
        </tr>
<tr>
        <td>Alamat Lengkap</td>
        <td><input name='alamat' type='text' id="alamat" readonly="readonly" value="<?php echo $data['alamat'] ?>"></td>
      </tr>
<tr>
        <td>No HP</td>
        <td><input name='nohp' type='number' id="nohp" readonly="readonly" value="<?php echo $data['nohp'] ?>"></td>
      </tr>
</table>
      </fieldset>

      <legend>Data Produk</legend>
    <fieldset>
    <?php
      $total=$_GET['total'];
      
    ?>
    <table border=0 width="80%" bg-color="white">
      <tr>
        <td>Total</td>
        <td><input type="text" name="total"  value="<?php echo $total;?>" readonly="readonly"  onFocus="startCalc();" onBlur="stopCalc();"> </td>
        
      </tr>
      <tr>
        <td>Jumlah Bayar</td>
        <td><input type="number" name="bayar" onFocus="startCalc();" onBlur="stopCalc();" ></td>
      </tr>
      <tr>
        <td>Uang Kembalian</td>
        <td><input type="number" name="kembalian" readonly="readonly" onFocus="startCalc();" onBlur="stopCalc();" ></td>
      </tr>
</table>
      </fieldset>
      <p>
      <br>
      <a href="bayar.php?sid=<?php echo $total;?>"><button>BAYAR</button></a>

      <button><a href="javascript:window.history.go(-1);">BATAL</a></button>
    </form>

<script>
function startCalc(){
  interval = setInterval("calc()",1);}
function calc(){
  three=document.autoSumForm.bayar.value;
  four=document.autoSumForm.total.value;
  five=document.autoSumForm.kembalian.value;
  document.autoSumForm.kembalian.value=(three*1)-(four*1);
}

</script>

  </body>
  </html>