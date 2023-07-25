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
    <title>CRUD Software</title>
</head>

<body>
    <h1>Daftar Software</h1>
    <form action="process.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="create">

        <label for="sn">Sn :</label>
        <input type="text" name="kode" required><br>

        <label for="tanggal_rilis">Tanggal Rilis :</label>
        <input type="date" name="tanggal_masuk" required><br>

        <label for="jenis">Jenis Kendaraan :</label>
        <select name="jenis_kendaraan" required>
            <option value="Editing">Editing</option>
            <option value="Coding">Coding</option>
            <option value="Tools">Tools</option>
        </select><br>

        <label for="quantity">Quantity :</label>
        <input type="number" name="quantity" required><br>

        <label for="spesifikasi">Spesifikasi :</label>
        <textare name='spesifikasi'></textare>
        <input type="text" name="spesifikasi" required><br>

        <label for="gambar">Gambar :</label>
        <input type="file" name="gambar" accept="image/*" required><br>

        <input type="submit" value="Tambah Softaware">
    </form>

    <h2>Daftar Software Saat Ini :</h2>
    <table>
        <thead>
            <tr>
                <th>Sn</th>
                <th>Tanggal Rilis</th>
                <th>Jenis </th>
                <th>Quantity</th>
                <th>Spesifikasi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'read.php'; ?>
            <b><p><a href="../act/logout.php">LOGOUT</a></p></b>
        </tbody>
    </table>
</body>
</html>