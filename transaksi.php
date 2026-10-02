<html>
    <head>
        <title>tabel transaksi</title>
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
        <h2>TABEL TRANSAKSI</h2>
    <br>
        <table>
            <tr?>
                <th>Id Transaksi</th>
                <th>Id Barang</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Harga Total</th>
                <th>Nip</th>
            </tr>
            <?php
            include "koneksi.php";
            $data = mysqli_query($koneksi, "SELECT * FROM transaksi");
            while ($tampil = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $tampil['id_transaksi'];?></td>
                <td><?php echo $tampil['id_barang'];?></td>
                <td><?php echo $tampil['harga'];?></td>
                <td><?php echo $tampil['qty'];?></td>
                <td><?php echo $tampil['harga_total'];?></td>
                <td><?php echo $tampil['nip'];?></td>
            </tr>
            <?php
            }
            ?>
      </table>
    </body>
</html>