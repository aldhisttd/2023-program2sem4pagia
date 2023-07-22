<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Kendaraan</title>
</head>

<body>
    <h1>Daftar Kendaraan</h1>
    <form action="process.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="create">

        <label for="kode">Kode Kendaraan:</label>
        <input type="text" name="kode" required><br>

        <label for="tanggal_masuk">Tanggal Masuk:</label>
        <input type="date" name="tanggal_masuk" required><br>

        <label for="jenis_kendaraan">Jenis Kendaraan:</label>
        <select name="jenis_kendaraan" required>
            <option value="SUV">SUV</option>
            <option value="City Car">City Car</option>
            <option value="Sedan">Sedan</option>
        </select><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" required><br>

        <label for="photo">Foto Kendaraan:</label>
        <input type="file" name="photo" accept="image/*" required><br>

        <input type="submit" value="Tambah Kendaraan">
    </form>

    <h2>Daftar Kendaraan Saat Ini:</h2>
    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Tanggal Masuk</th>
                <th>Jenis Kendaraan</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'read.php'; ?>
        </tbody>
    </table>
</body>

</html>