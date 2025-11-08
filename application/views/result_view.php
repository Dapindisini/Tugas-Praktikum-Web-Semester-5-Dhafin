<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mahasiswa oleh Dhafin Ahmad Ridhoni Sultan 2310010242</title>
</head>
<body>
    <h2>Selamat Datang di Web Dhafin Ahmad Ridhoni Sultan Metode Result</h2>
    <table border="2">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($result as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->NIM ?></td>
                    <td><?php echo $row->nama_mhs ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
