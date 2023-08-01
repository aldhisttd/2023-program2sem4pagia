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
    <title>CRUD software</title>
</head>

<body>
    <h1>Daftar software</h1>
    <form action="process.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="create">

        <label for="kode">Kode :</label>
        <input type="text" name="kode" required><br>

        <label for="tanggal_rilis">Tanggal Rilis:</label>
        <input type="date" name="tanggal_rilis" required><br>

        <label for="jenis_software">Jenis software:</label>
        <select name="jenis_software" required>
            <option value="Chrome">Chrome</option>
            <option value="Mozilla">Mozilla</option>
            <option value="Ms Excel">Ms Excel</option>
        </select><br>

        <label for="Quantity">Quantity:</label>
        <input type="number" name="harga" required><br>

        <label for="photo">Foto software:</label>
        <input type="file" name="photo" accept="image/*" required><br>

        <input type="submit" value="Tambah software">
    </form>

    <h2>Pemakaian Software Saat Ini:</h2>
    <table>
        <thead>
            <tr>
                <th>Failed Name</th>
                <th>Data Type</th>
                <th>Input Type</th>
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