<?php 
    include 'koneksi.php';
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM barang where id=$id");
    while ($data = mysqli_fetch_array($result)) {
        $nama = $data['nama'];
        $harga = $data['harga'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js" ></script>
    <script type="text/javascript" src="assets/js/bootstrap.js" ></script>
    <title>Update</title>
</head>
<body padding="16px">
    <center><h1>Edit</h1>
    <form action="update.php" method="post">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value= <?= $nama; ?>></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value= <?= $harga; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value= <?= $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Edit" class="btn btn-success btn-lg"></td>
            </tr>
        </table>
    </form>
    </center>

    <?php 
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $result = mysqli_query($koneksi, "UPDATE barang set nama='$nama', harga='$harga' where id=$id");
        header("Location:index.php");
    }
    ?>
    

</body>
</html>