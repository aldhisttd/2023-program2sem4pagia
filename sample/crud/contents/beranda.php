<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Pegawai</h1>
</div>
<div class="table-responsive small">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIP</th>
                <th scope="col">NAMA</th>
                <th scope="col">HP</th>
                <th scope="col">ALAMAT</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $data = $conn->query("SELECT * FROM pegawai");
            $no = 1;
            while($dt = mysqli_fetch_array($data)){
            ?>

                <tr>
                    <td><?php echo $no  ?></td>
                    <td><?php echo $dt['nip'] ?></td>
                    <td><?php echo $dt['nama'] ?></td>
                    <td><?php echo $dt['hp'] ?></td>
                    <td><?php echo $dt['alamat'] ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="action/hapus_pegawai.php?nip=<?php echo $dt['nip'] ?>" type="button" class="btn btn-danger btn-sm">Hapus</a>
                            <a type="button" class="btn btn-warning btn-sm">Edit</a>
                        </div>
                    </td>
                </tr>

            <?php
            $no++;
            }

            ?>

        </tbody>
    </table>
</div>