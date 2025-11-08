<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa - Dhafin Ahmad Ridhoni Sultan (2310010242)</title>
    <style>
        /* 🎨 Palet pastel lembut */
        :root {
            --bg-main: #d6e6f2;      /* biru pastel lembut */
            --container-bg: #f9fafc; /* putih kebiruan */
            --pastel-green: #b6d7b9; /* hijau lembut */
            --pastel-blue: #a7c5eb;  /* biru pastel */
            --pastel-peach: #f7b7a3; /* peach lembut */
            --border-color: #e1e4ea;
            --text-color: #2f2f2f;
        }

        body {
            font-family: "Poppins", Arial, sans-serif;
            background-color: var(--bg-main);
            color: var(--text-color);
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 40px;
            font-weight: 600;
            color: #2d3e50;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 30px auto;
            background: var(--container-bg);
            padding: 30px 35px;
            border-radius: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            border: 1px solid var(--border-color);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: 500;
            margin-bottom: 5px;
        }

        input[type="text"], select {
            padding: 10px 12px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
            color: var(--text-color);
        }

        input[type="text"]:focus,
        select:focus {
            border-color: var(--pastel-blue);
            box-shadow: 0 0 6px rgba(167, 197, 235, 0.6);
        }

        /* 🩵 Gaya dropdown untuk select */
        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: linear-gradient(45deg, transparent 50%, var(--pastel-blue) 50%), 
                              linear-gradient(135deg, var(--pastel-blue) 50%, transparent 50%);
            background-position: calc(100% - 18px) calc(1em + 2px), calc(100% - 13px) calc(1em + 2px);
            background-size: 6px 6px, 6px 6px;
            background-repeat: no-repeat;
        }

        .btn {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            font-size: 14px;
            padding: 10px 18px;
            border: none;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .btn-update {
            background-color: var(--pastel-green);
            color: #2f2f2f;
            border: 1px solid #a7c7a7;
        }

        .btn-update:hover {
            background-color: #a9cfae;
            transform: translateY(-1px);
        }

        .btn-kembali {
            background-color: var(--pastel-peach);
            color: #333;
            border: 1px solid #f3a996;
        }

        .btn-kembali:hover {
            background-color: #f3a996;
            transform: translateY(-1px);
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: #555;
            font-size: 13px;
            padding-bottom: 20px;
        }

        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }
            .button-group {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>

<body>
    <h1>Form Edit Mahasiswa</h1>

    <div class="container">
        <form action="<?php echo site_url('mahasiswa/perbaharui/' . $mahasiswa->id_mahasiswa) ?>" method="post">
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" value="<?php echo $mahasiswa->NIM ?>" required>

            <label for="nama_mhs">Nama Mahasiswa</label>
            <input type="text" name="nama_mhs" id="nama_mhs" value="<?php echo $mahasiswa->nama_mhs ?>" required>

            <label for="id_prodi">Program Studi</label>
            <select name="id_prodi" id="id_prodi" required>
                <option value="" disabled>Pilih Program Studi</option>
                <?php foreach($program_studi as $prodi): ?>
                    <option value="<?= $prodi->id_prodi ?>" <?= $mahasiswa->id_prodi == $prodi->id_prodi ? 'selected' : '' ?>>
                        <?= $prodi->nama_prodi ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <div class="button-group">
                <input type="submit" value="Perbaharui" class="btn btn-update">
                <a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-kembali">Kembali</a>
            </div>
        </form>
    </div>

    <footer>
        &copy; <?php echo date('Y'); ?> Dhafin Ahmad Ridhoni Sultan • Edit Mahasiswa
    </footer>
</body>
</html>
