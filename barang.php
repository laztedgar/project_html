<html>
    <head>
        <title>tabel barang</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f7eff9;
                margin: 30px;
            }

            h2 {
                text-align: center;
                color: #57005f;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                background-color: white;
                margin-top: 20px;
            }

            th, td {
                border: 1px solid #57005f;
                padding: 10px;
                text-align: center;
            }

            th {
                background-color: #57005f;
                color: white;
            }

            tr:hover {
                background-color: #f0dff2;
            }
        </style>
    </head>
    <body>
        <h2>TABEL BARANG</h2>
    <br>
        <table>
            <tr>
                <th>Id Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
            <?php
            include "koneksi.php";
            $data = mysqli_query($koneksi, "SELECT * FROM barang");
            while ($tampil = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $tampil['id_barang'];?></td>
                <td><?php echo $tampil['nama_barang'];?></td>
                <td><?php echo $tampil['harga'];?></td>
                <td><?php echo $tampil['stok'];?></td>
            </tr>
            <?php
            }
            ?>
      </table>
    </body>
</html>