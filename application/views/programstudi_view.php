<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Program Studi oleh Dhafin Ahmad Ridhoni Sultan - 2310010242</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* 🌙 Tema pastel gelap elegan */
        :root {
            --bg-main: #2c2f48;
            --card-bg: #3c3f5c;
            --accent: #9ac8e3;
            --accent-dark: #7fb3ce;
            --text-main: #f2f4f8;
            --text-muted: #cfd3e1;
            --warning: #ffcf5c;
            --danger: #f17c7c;
            --success: #88d498;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--bg-main), #36395a);
            color: var(--text-main);
            margin: 0;
            padding: 0;
        }

        header {
            background: var(--card-bg);
            color: var(--accent);
            text-align: center;
            padding: 1.8rem 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.4);
            border-bottom: 2px solid var(--accent);
        }

        h1 {
            margin: 0;
            font-size: 1.9rem;
            letter-spacing: 1px;
        }

        main {
            padding: 2rem;
            max-width: 900px;
            margin: 2rem auto;
            background-color: rgba(255, 255, 255, 0.03);
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        a.tambah-btn {
            display: inline-block;
            background-color: var(--success);
            color: #1b1d2a;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        a.tambah-btn:hover {
            background-color: #6bc784;
            transform: translateY(-2px);
            box-shadow: 0 3px 8px rgba(0,0,0,0.3);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.8rem;
            background: var(--card-bg);
            box-shadow: 0 3px 8px rgba(0,0,0,0.25);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 14px 18px;
            text-align: left;
        }

        thead {
            background-color: var(--accent-dark);
            color: #1a1c2e;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        tbody tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        tbody tr:hover {
            background-color: rgba(154, 200, 227, 0.15);
            transition: 0.3s;
        }

        .aksi a {
            text-decoration: none;
            padding: 7px 14px;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: 0.25s ease;
            margin-right: 6px;
        }

        .aksi a:first-child {
            background-color: var(--warning);
            color: #1a1a1a;
        }

        .aksi a:first-child:hover {
            background-color: #f5be42;
            transform: scale(1.05);
        }

        .aksi a:last-child {
            background-color: var(--danger);
            color: #1a1a1a;
        }

        .aksi a:last-child:hover {
            background-color: #e86c6c;
            transform: scale(1.05);
        }

        /* 🌙 Popup Konfirmasi */
        .popup-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease forwards;
            z-index: 1000;
        }

        .popup {
            background-color: var(--card-bg);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
            text-align: center;
            max-width: 380px;
            width: 90%;
            animation: slideUp 0.3s ease;
        }

        .popup h2 {
            margin: 0 0 1rem;
            color: var(--accent);
        }

        .popup p {
            color: var(--text-muted);
            margin-bottom: 1.5rem;
        }

        .popup .btn-group {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .popup button {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
            font-size: 0.95rem;
        }

        .popup .confirm-btn {
            background-color: var(--danger);
            color: #1a1a1a;
        }

        .popup .confirm-btn:hover {
            background-color: #e86c6c;
            transform: scale(1.05);
        }

        .popup .cancel-btn {
            background-color: #777b94;
            color: #fff;
        }

        .popup .cancel-btn:hover {
            background-color: #6b6e8a;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from { opacity: 0; } 
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Responsif */
        @media (max-width: 600px) {
            main {
                padding: 1rem;
            }
            table, thead, tbody, th, td, tr {
                display: block;
            }
            th {
                display: none;
            }
            td {
                padding: 10px;
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }
            .aksi {
                display: flex;
                gap: 8px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>🌙 Daftar Program Studi - Dhafin Ahmad Ridhoni Sultan</h1>
</header>

<main>
    <a href="<?php echo site_url('programstudi/tambah') ?>" class="tambah-btn">+ Tambah Program Studi</a>

    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>KODE PRODI</th>
                <th>NAMA PRODI</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($program_studi as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->kode_prodi ?></td>
                    <td><?php echo $row->nama_prodi ?></td>
                    <td class="aksi">
                        <a href="<?php echo site_url('programstudi/edit/' . $row->id_prodi) ?>">Edit</a>
                        <a href="#" onclick="showPopup('<?php echo site_url('programstudi/hapus/' . $row->id_prodi) ?>')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>

<!-- Popup Konfirmasi -->
<div class="popup-overlay" id="popupOverlay">
    <div class="popup">
        <h2>Konfirmasi Hapus</h2>
        <p>Apakah Anda yakin ingin menghapus data ini? Tindakan ini tidak dapat dibatalkan.</p>
        <div class="btn-group">
            <button class="cancel-btn" onclick="closePopup()">Batal</button>
            <button class="confirm-btn" id="confirmDeleteBtn">Hapus</button>
        </div>
    </div>
</div>

<script>
    let deleteUrl = "";

    function showPopup(url) {
        deleteUrl = url;
        document.getElementById('popupOverlay').style.display = 'flex';
    }

    function closePopup() {
        document.getElementById('popupOverlay').style.display = 'none';
    }

    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        window.location.href = deleteUrl;
    });
</script>

</body>
</html>
