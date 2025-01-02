<?php

//Menghubungkan ke file koneksi.php
include koneksi.php";
//Query untuk mengambil semua data dari tabel transaksi
$query "SELECT id, nama, email, nim, password, data barang FROM
transaksi";
$result mysqli_query($conn, $query);

if (1$result) {
   die("Query Error: mysqli_error($conn){;
}
?>

<DOCTYPE html>
<html>
<head>
    <title>Data Transaksi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid #ddd;
            text-align: left;
        }
        th, td {
            padding: spx;
        }
        th, {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<h2>Data Transaksi</h2>

<table>
<tr>

<th>ID</th>

<th>Nama</th>

<th>Email</th>

<th>NIMc/tho

<tho-Password</th>

<thoDta Barang</th>
<th>Aksi</th>
</tr>

<?php
// Menampilkan data per baris
while ($row mysqli_fetch_assoc($result)) (
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['nim']."</td>";
echo "<td>".$row['password']."</td>";
echo "<td>".$row['data_barang"]."</td>";
echo "<td>Edit | Hapus</td>";
echo "</tr>";