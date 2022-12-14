<!DOCTYPE html>
<html >

<head>
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

    <script>
        function hello() {
            return alert('Apakah Anda Yakin?')
        }
    </script>

<h2 align="center"> Form Member </h2>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jeniskel = $_POST['jeniskel'];
    $date = $_POST['date'];
    $ukuran = $_POST['ukuran'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $hide =  1;

echo '<div class="tabel" style="display: flex;margin-top: 2%;justify-content: center;">
<table border="1" align="center">
<tr>
    <th>No</th>
    <th>Nama </th>
    <th>Email </th>
    <th>Jenis Kelamin</th>
    <th>Tanggal Lahir</th>
    <th>Ukuran Baju</th>
    <th>Alamat</th>
    <th>No Handphone</th>
</tr>
<tr align="center">
    <td >1</td>
    <td >' . $nama . '</td>
    <td > ' . $email . ' </td>
    <td > ' . $jeniskel . ' </td>
    <td > ' . $date . ' </td>
    <td > ' . $ukuran . ' </td>
    <td > ' . $alamat . ' </td>
    <td > ' . $nohp . ' </td>
</tr>
</table>
</div>';
}
?>

    <h4><a href="indexx.html">back to home</h4></a>


    <?php if (!isset($hide)) { ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="box">
        <form>
        <table>
            <tr>
                <td colspan="3"><h1> Register </h1></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td> : </td>
                <td><input type="text" name="nama" placeholder=" nama"></td> 
            </tr>
            <tr>
                <td>Email </td>
                <td> : </td>
                <td><input type="text" name="email" placeholder="email"></td> 
            </tr>
            <tr>
            <td>Jenis Kelamin</td>
                <td> : </td>
                 <td><select name="jeniskel"> 
                    <option value="" selected="selected">=Pilih Kelamin=</option> 
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select></td>
            </tr>
            <tr>
                <td>Tanggal Lahir </td>
                <td> : </td>
                <td><input type="date" name="date" ></td> 
            </tr>
            <tr>
                <td>Ukuran Baju</td>
                <td> : </td>
                <td><select name="ukuran"> 
                    <option value="" selected="selected">=Pilih Ukuran Baju=</option> 
                    <option value="L">L</option>
                    <option value="M">M</option>
                    <option value="XL">XL</option>
                    <option value="XXl">XXl</option>
                    </select></td>
            </tr>    
            <tr>
                <td>Alamat</td>
                <td>: </td>
                <td><textarea name="alamat"  cols="20" rows="5"></textarea></td>
            </tr>
            <tr>
                <td> Nomor handphone </td>
                <td> : </td>
                <td><input type="text" name="nohp" placeholder="nomor"></td>
            </tr>
            <tr>
                <td> 
                    <td><button onclick='hello()' type="submit" value="kirim" name="submit">DAFTAR</button></td>
                    <td><button type="reset" value="batal">BATAL</button></a></td>
            </tr>
        </table>
        </form>
    </div>
    <?php } ?>
</body>
</html>