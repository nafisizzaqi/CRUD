<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js" ></script>
    <script type="text/javascript" src="assets/js/bootstrap.js" ></script>
    <title>ADD</title>
</head>
<body>
    
    <center><h1>Tambah</h1>
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Tambah" class="btn btn-success btn-lg"></td>
            </tr>
        </table>
    </form>
    </center>

    <?php
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];
            include 'koneksi.php';

            $result = mysqli_query($koneksi, "INSERT INTO barang(id,nama,harga)values('$id','$nama','$harga')");
            echo "user added Successfully";

            header("location:index.php");
        }
    ?>
</body>
</html>