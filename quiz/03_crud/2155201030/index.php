<!DOCTYPE html>
<html>
<head>
    <title>pembayaran</title>
</head>
<body>
    <h2>Input pembayaran</h2>
    <form action="simpan.php" method="post" enctype="multipart/form-data">
        <label for="nomor_tagihan">nomor_tagihan:</label><br>
        <input type="text" id="nomor_tagihan" name="nomor_tagihan" required><br><br>
        <label for="tanggal">tanggal:</label><br>
        <input type="date" id="tanggal" name="tanggal" required><br><br>
        <label for="jenis_tagihan">jenis_tagihan:</label><br>
        <input type="text" id="jenis_tagihan" name="jenis_tagihan" required><br><br>
        <label for="nominal">nominal:</label><br>
        <input type="number" id="nominal" name="nominal" required><br><br>
        <label for="bukti_transfer">bukti_transfer:</label><br>
        <input type="file" id="bukti_transfer" name="bukti_transfer" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>

