<!DOCTYPE html>
<html>
<head>
    <title>Input Pembayaran</title>
</head>
<body>
    <h2>Input Pembayaran</h2>
    <form action="simpan.php" method="post" enctype="multipart/form-data">
        <label for="Nomor_Tagihan">Nomor_Tagihan:</label><br>
        <input type="text" id="Nomor_Tagihan" name="Nomor_Tagihan" required><br><br>
        <label for="Tanggal">Tanggal:</label><br>
        <input type="date" id="Tanggal" name="Tanggal" required><br><br>
        <label for="Jenis_Tagihan">Jenis_Tagihan:</label><br>
        <input type="text" id="Jenis_Tagihan" name="Jenis_Tagihan" required><br><br>
        <label for="Nominal">Nominal:</label><br>
        <input type="number" id="Nominal" name="Nominal" required><br><br>
        <label for="Bukti_Transfer">bukti transfer:</label><br>
        <input type="file" id="Bukti_Transfer" name="Bukti_Transfer" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>