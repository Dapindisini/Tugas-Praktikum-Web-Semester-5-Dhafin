<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Data Mahasiswa - Dhafin Ahmad Ridhoni Sultan (2310010242)</title>
    <style>
        /* 🎨 Tema pastel lembut dan konsisten */
        :root {
            --bg-main: #d6e6f2;      /* biru pastel lembut */
            --container-bg: #f9fafc; /* putih kebiruan */
            --pastel-blue: #a7c5eb;  /* biru pastel */
            --pastel-green: #b6d7b9; /* hijau lembut */
            --border-color: #e1e4ea;
            --text-color: #2f2f2f;
        }

        body {
            font-family: "Poppins", Arial, sans-serif;
            background-color: var(--bg-main);
            color: var(--text-color);
            margin: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: 600;
            color: #2d3e50;
        }

        .table-container {
            background: var(--container-bg);
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            border: 1px solid var(--border-color);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid var(--border-color);
            padding: 10px 12px;
            font-size: 14px;
        }

        th {
            background-color: var(--pastel-blue);
            color: #2f2f2f;
            font-weight: 600;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #eef3fa;
        }

        tr:hover {
            background-color: #dbe7f4;
            transition: 0.2s ease;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: #555;
            font-size: 13px;
        }

        /* 🖨️ Saat dicetak, hilangkan background agar hemat tinta */
        @media print {
            body {
                background: #fff;
                color: #000;
            }
            .table-container {
                box-shadow: none;
                border: none;
            }
            th {
                background-color: #e0e0e0 !important;
                color: #000 !important;
            }
            footer {
                display: none;
            }
        }
    </style>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Program Studi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($mahasiswa as $mhs): ?>
                <tr>
                    <td><?= $mhs->id_mahasiswa ?></td>
                    <td><?= $mhs->NIM ?></td>
                    <td><?= $mhs->nama_mhs ?></td>
                    <td><?= $mhs->nama_prodi ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <footer>
        &copy; <?php echo date('Y'); ?> Dhafin Ahmad Ridhoni Sultan • Print Data Mahasiswa
    </footer>
</body>
</html>
