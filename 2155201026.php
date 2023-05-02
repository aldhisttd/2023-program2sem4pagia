<form action="proses-form-input.php" method="POST">
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <div>
        <label>NIM</label> <br>
        <input type="NIM" name="NIM">
    </div>
    <div>
        <label>Usia</label> <br>
        <input type="number" name="usia">
    </div>
    <div>
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="tanggal_lahir">
    </div>
    <div>
        <label>Alamat</label> <br>
        <textarea name="alamat"></textarea>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Jenis Kelamin</label> <br>
        <input type="radio" name="jenis_kelamin" value="l"> Laki-Laki <br>
        <input type="radio" name="jenis_kelamin" value="p"> Perempuan
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Status</label> <br>
        <select name="status">
            <option value="lajang">Lajang</option>
            <option value="menikah">Menikah</option>
        </select>
    </div>

    <div>
        <button>Submit</button>
    </div>
</form>