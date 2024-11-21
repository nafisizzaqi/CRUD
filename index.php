<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js" ></script>
    <script type="text/javascript" src="assets/js/bootstrap.js" ></script>
    
    <title>Penjualan</title>
</head>
<body>
    <center><h1>Data Penjualan</h1></center>
    <center><table class="table table-bordered">
        <tr>
            <th>ID</th> <th>Nama</th> <th>Harga</th> <th>Edit/delete</th>
        </tr>

        <?php 
            include'koneksi.php';
            $result = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id DESC");
                while ($data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['nama']."</td>";
                    echo "<td>".$data['harga']."</td>";
                    echo "<td><a href='update.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";
                }?>
    </table></center>
    <center><a href="add.php">Tambah</a></center>

</body>
</html>