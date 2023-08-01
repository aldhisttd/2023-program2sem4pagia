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
    <h1>Software</h1>
    <form action="process.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="create">

        <label for="Sn"> Sn :</label>
        <input type="text" name="Sn" required><br>

        <label for="Tanggal_rilis">Tanggal_rilis :</label>
        <input type="date" name="Tanggal_rilis" required><br>

        <label for="jenis_Software">Jenis Software :</label>
        <select name="jenis_Software" required>
            <option value="Editing">Editing</option>
            <option value="Coding">Coding</option>
            <option value="Tools">Tools</option>
        </select><br>

        <label for="Quantity">Quantity :</label>
        <input type="number" name="Quantity" required><br>

        <label for="Gambar">Gambar :</label>
        <input type="file" name="Gambar" accept="image/*" required><br>

        <input type="submit" value="Tambah Gambar">
    </form>

    <h2>Software Saat Ini :</h2>
    <table>
        <thead>
            <tr>
                <th>Sn</th>
                <th>Tanggal_rilis</th>
                <th>Jenis</th>
                <th>Quantity</th>
                <th>Spesifikasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'read.php'; ?>
        </tbody>
    </table>
</body>

</html>