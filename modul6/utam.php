<!-- bagian koneksi -->
<?php
$servername = "sql310.epizy.com";
$user = "epiz_29586831";
$password = "vZLDP4Vifbw";
$database = "epiz_29586831_lat";
$conn = mysqli_connect($servername, $user, $password, $database) or die(mysqli_error($conn));
if (isset($_POST['nama'])) { 
    $id=@$_POST['id'];
    $nama=@$_POST['nama'];
    $email=@$_POST['email'];
    $website=@$_POST['website'];
    $komentar=@$_POST['komentar'];
    $tombol=@$_POST['tombol'];
    if ($tombol=="tambah" and $id==null) {
        $sql = "INSERT INTO lat(nama,email,website,komentar) VALUES('$nama','$email','$website','$komentar')"; 
        $has = mysqli_query($conn,$sql) or die("Insert data gagal!"); 
    }
    elseif ($tombol=="edit") {
        $sql="UPDATE lat SET nama='$nama',email='$email',website='$website',komentar='$komentar' WHERE id=$id ";
        $has = mysqli_query($conn,$sql) or die("Insert data gagal!"); 
    }
    elseif ($tombol=="hapus") {
        $sql="DELETE FROM lat WHERE id=$id";
        $has = mysqli_query($conn,$sql) or die("Insert data gagal!");
    }
    elseif ($tombol=="tambah" and $id!=null){
        echo "<script type='text/javascript'>alert('jangan masukan id'); </script>";
    }
  }
?>
<!-- bagian ui-ux -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul7</title>
    <style>
    aside {
    float: right;
    padding : 30px;
    margin : 20px 100px 50px 0px;
}
.a{
    margin : 20px 0px 50px 50px;
    padding : 30px;
    width: 35%;
    height: 385px;
    float: left;
    background: #ccc;
}

.baru table {
  border-collapse : collapse;
}
.baru th {
  background-color : #2E6AB1;
  padding-left     : 10px;
  padding-right    : 8px;
  padding-top      : 3px;
  padding-bottom   : 3px;
  border           : 1px solid #969BA5;  
  text-align       : left;
  color            : #FFFFFF;
  font-size        : 13;
}
.baru td {
  background-color : #F0F0F0;
  padding-left     : 8px;
  padding-right    : 8px;
  padding-top      : 3px;
  padding-bottom   : 3px;
  border           : 1px solid #969BA5;
  color            : #2E6AB1;
  font-size        : 13;
}


.baru div.paging {
	padding     : 2px;
	margin      : 2px;
	text-align  : center;
	font-family : Tahoma;
	font-size   : 12px;
}
.baru div.paging a {
	padding         : 2px 5px 2px 5px;
	margin-right    : 2px;
	border          : 1px solid #9AAFE5;
	text-decoration : none; 
	color           : #2E6AB1;
}
.baru div.paging a:hover {
	border           : 1px solid #2B66A5;
	color            : #000000;
	background-color : #FFFF80;
}
.baru div.paging span.current {
	padding          : 2px 5px 2px 5px;
	margin-right     : 2px;
	border           : 1px solid navy;
	font-weight      : bold;
	background-color : #2E6AB1;
	color            : #FFFFFF;
}
div.paging span.disabled {
	padding      : 2px 5px 2px 5px;
	margin-right : 2px;
	border       : 1px solid #999999;
	color        : #999999;
}
.baru div.paging span.prevnext {
  font-weight : bold;
}
    </style>
</head>
<body>
    <form action="utam.php" method="post" class="a">
        <table>
            <tr>
                <td>id</td>
                <td><input type="number" name="id" placeholder="kosongkan id (insert)"/></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" /></td>
            </tr>
            <tr>
                <td> email </td>
                <td><input type="email" name="email" id="email" ></td>
            </tr>
            <tr>
                <td>website</td>
                <td><input type="text" name="website" /></td>
            </tr>
            <tr>
                <td> komentar </td>
                <td><textarea name="komentar" id="komentar" cols="30" rows="10" >masukan komentar</textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="tambah" name="tombol"/>&nbsp<input type="submit" value="edit" name="tombol">&nbsp<input type="submit" value="hapus" name="tombol"></td>
            </tr>
        </table>
    </form>
    <aside >
    <!-- bagian hasil -->
    <div class="baru">
    <?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    echo "<table align=center><tr><th>ID</th><th>Nama</th><th>Email</th><th>Website</th><th>Tanggal</th><th>Komentar</th></tr>";
    // Langkah 1: Tentukan batas,cek halaman & posisi data
    $batas   = 5;
    $halaman = $_GET['halaman'];
    if(empty($halaman)){
        $posisi  = 0;
        $halaman = 1;
    }
    else{
        $posisi = ($halaman-1) * $batas;
    }
    
    //Langkah 2: Sesuaikan perintah SQL
    $tampil = "SELECT * FROM lat LIMIT $posisi,$batas";
    $hasil  = mysqli_query($conn, $tampil);
    
    $no = $posisi+1;
    while($r=mysqli_fetch_array($hasil)){
      echo "<tr><td>$r[id]</td><td>$r[nama]</td><td>$r[email]</td><td>$r[website]</td><td>$r[tanggal]</td><td>$r[komentar]</td></tr>";
      $no++;
    }
    echo "</table><br>";
    
    //Langkah 3: Hitung total data dan halaman 
    $tampil2 = mysqli_query($conn,"SELECT * FROM lat");
    $jmldata = mysqli_num_rows($tampil2);
    $jmlhal  = ceil($jmldata/$batas);
    
    echo "<div class=paging>";
    // Link ke halaman sebelumnya (previous)
    if($halaman > 1){
        $prev=$halaman-1;
        echo "<span class=prevnext><a href=$_SERVER[PHP_SELF]?halaman=$prev>Sebelumnya</a></span> ";
    }
    else{ 
        echo "<span class=disabled>Sebelumnya</span> ";
    }
    
    // Tampilkan link halaman 1,2,3 ...
    for($i=1;$i<=$jmlhal;$i++)
    if ($i != $halaman){
        echo " <a href=$_SERVER[PHP_SELF]?halaman=$i>$i</a> ";
    }
    else{
        echo " <span class=current>$i</span> ";
    }
    
    // Link kehalaman berikutnya (Next)
    if($halaman < $jmlhal){
        $next=$halaman+1;
        echo "<span class=prevnext><a href=$_SERVER[PHP_SELF]?halaman=$next>Selanjutnya</a></span>";
    }
    else{ 
        echo "<span class=disabled>Selanjutnya</span>";
    }
    echo "</div>";
    echo "<p align=center>Total tamu : <b>$jmldata</b> orang</p>";
    ?>
    </div>
    </aside>
</body>
</html>
