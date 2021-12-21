<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <style>
    aside {
    background: #ccc;
    width: 35%;
    height: 130px;
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
    </style>
</head>
<body>
    <form action="2.php" method="post" class="a">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required/></td>
            </tr>
            <tr>
                <td> Tempat Lahir </td>
                <td><input type="text" name="TL" required/></td>
            </tr>
            <tr>
                <td> Tanggal Lahir </td>
                <td><input type="date" name="tg" id="tg" required/></td>
            </tr>
            <tr>
                <td> alamat </td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="10" required>masukan alamat</textarea></td>
            </tr>
            <tr>
                <td> jenis kelamin </td>
                <td><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki &emsp; <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br></td>
            </tr>
            <tr>
                <td> asal sekolah </td>
                <td><input type="text" name="asal" required/></td>
            </tr>
            <tr>
                <td> nilai UAN </td>
                <td><input type="number" name="nilai" required/></td>
            </tr>
            <tr>
                <td><input type="submit" value="kirim" /></td>
                <td><input type="reset" value="reset"></td>
            </tr>
        </table>
    </form>
    <aside >
    <?php

        $nama=@$_POST['nama'];
        $tempat=@$_POST['TL'];
        $tang=@$_POST['tg'];
        $alamat=@$_POST['alamat'];
        $jenis_kelamin=@$_POST['jenis_kelamin'];
        $asal=@$_POST['asal'];
        $nilai=@$_POST['nilai'];
       
   
        echo "nama : ".$nama. "<br />"; 
        echo "tempat lahir : ".$tempat. "<br />"; 
        echo "Tanggal Lahir : ".$tang. "<br />"; 
        echo "alamat : ".$alamat. "<br />"; 
        echo "Jenis kelamin : ".$jenis_kelamin. "<br />"; 
        echo "asal : ".$asal. "<br />"; 
        echo "nilai : ".$nilai. "<br />";
    
    ?>
    </aside>
</body>
</html>
