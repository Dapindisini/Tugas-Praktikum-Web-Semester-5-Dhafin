<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Data Mahasiswa - Dhafin Ahmad Ridhoni Sultan (2310010242)</title>
    <style>
        /* 🎨 Palet pastel lembut dan seimbang */
        :root {
            --bg-main: #d6e6f2;
            --container-bg: #f9fafc;
            --pastel-blue: #a7c5eb;
            --pastel-green: #b6d7b9;
            --pastel-peach: #f7b7a3;
            --pastel-red: #f28b82;
            --text-color: #2f2f2f;
            --border-color: #e1e4ea;
        }

        body {
            font-family: "Poppins", Arial, sans-serif;
            background-color: var(--bg-main);
            color: var(--text-color);
            margin: 0;
            padding: 0;
        }

        /* 🩵 Animasi masuk untuk judul */
        h2 {
            text-align: center;
            margin-top: 40px;
            font-weight: 600;
            color: #2d3e50;
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeSlideIn 1s ease forwards;
        }

        @keyframes fadeSlideIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .container {
            width: 90%;
            max-width: 850px;
            margin: 30px auto;
            background: var(--container-bg);
            padding: 25px 35px;
            border-radius: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            border: 1px solid var(--border-color);
        }

        /* 🧩 Tombol Tambah & Cetak */
        .btn-tambah, .btn-cetak {
            display: inline-block;
            text-decoration: none;
            padding: 9px 18px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            transition: background 0.3s ease, transform 0.2s;
            border: 1px solid transparent;
            margin-right: 8px;
        }

        .btn-tambah {
            background-color: var(--pastel-green);
            color: #2f2f2f;
            border: 1px solid #a7c7a7;
        }

        .btn-tambah:hover {
            background-color: #a9cfae;
            transform: translateY(-1px);
        }

        .btn-cetak {
            background-color: var(--pastel-blue);
            color: #2f2f2f;
            border: 1px solid #96b3de;
        }

        .btn-cetak:hover {
            background-color: #95b4e3;
            transform: translateY(-1px);
        }

        /* 🧾 Tabel Data */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 18px;
            font-size: 14px;
            border-radius: 10px;
            overflow: hidden;
        }

        thead {
            background-color: var(--pastel-blue);
            color: #222;
        }

        th, td {
            padding: 12px 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f5f7fa;
        }

        tr:hover {
            background-color: #edf2f7;
        }

        .aksi a {
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 13px;
            margin-right: 6px;
            display: inline-block;
            transition: 0.3s ease;
        }

        .aksi a.edit {
            background-color: var(--pastel-peach);
            color: #333;
        }

        .aksi a.edit:hover {
            background-color: #f3a996;
        }

        .aksi a.hapus {
            background-color: var(--pastel-red);
            color: #fff;
        }

        .aksi a.hapus:hover {
            background-color: #e76a62;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: #555;
            font-size: 13px;
            padding-bottom: 20px;
        }

        /* 🪟 Popup modal pastel */
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.35);
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            background-color: var(--container-bg);
            padding: 25px 30px;
            border-radius: 14px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            max-width: 350px;
            border: 1px solid var(--border-color);
            animation: popUp 0.25s ease;
        }

        @keyframes popUp {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .modal h3 {
            margin-bottom: 15px;
            color: #2d3e50;
        }

        .modal p {
            font-size: 14px;
            margin-bottom: 20px;
            color: #444;
        }

        .modal-btn {
            display: inline-block;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            font-size: 14px;
            padding: 10px 18px;
            border: none;
            cursor: pointer;
            margin: 0 8px;
            transition: 0.3s ease;
        }

        .btn-batal {
            background-color: var(--pastel-peach);
            color: #333;
            border: 1px solid #f3a996;
        }

        .btn-batal:hover {
            background-color: #f3a996;
            transform: translateY(-1px);
        }

        .btn-hapus {
            background-color: var(--pastel-red);
            color: #fff;
            border: 1px solid #e76a62;
        }

        .btn-hapus:hover {
            background-color: #e76a62;
            transform: translateY(-1px);
        }
    </style>
</head>
<body>

    <h2>Selamat Datang di Web Dhafin Ahmad Ridhoni Sultan</h2>

    <div class="container">
        <a href="<?php echo site_url('mahasiswa/tambah') ?>" class="btn-tambah">+ Tambah Mahasiswa</a>
        <a href="<?php echo site_url('mahasiswa/cetak') ?>" class="btn-cetak">🖨️ Cetak</a>

        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($mahasiswa as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->NIM ?></td>
                    <td><?php echo $row->nama_mhs ?></td>
                    <td><?php echo $row->nama_prodi ?></td>
                    <td class="aksi">
                        <a href="<?php echo site_url('mahasiswa/edit/' . $row->id_mahasiswa) ?>" class="edit">Edit</a>
                        <a href="javascript:void(0)" class="hapus" onclick="showModal('<?php echo site_url('mahasiswa/hapus/' . $row->id_mahasiswa) ?>')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- 🪟 Modal Hapus -->
    <div class="modal" id="hapusModal">
        <div class="modal-content">
            <h3>Konfirmasi Hapus</h3>
            <p>Apakah Anda yakin ingin menghapus data mahasiswa ini?</p>
            <div>
                <button class="modal-btn btn-batal" onclick="closeModal()">Batal</button>
                <a id="btnHapusLink" href="#" class="modal-btn btn-hapus">Hapus</a>
            </div>
        </div>
    </div>
    <script>
        // Fungsi untuk menampilkan modal konfirmasi hapus
        function showModal(hapusUrl) {
            const modal = document.getElementById('hapusModal');
            const link = document.getElementById('btnHapusLink');
            modal.style.display = 'flex';  // Tampilkan modal
            link.href = hapusUrl;          // Set tautan hapus dinamis
        }

        // Fungsi untuk menutup modal
        function closeModal() {
            const modal = document.getElementById('hapusModal');
            modal.style.display = 'none';
        }

        // Tutup modal jika pengguna klik di luar kotak modal
        window.onclick = function(event) {
            const modal = document.getElementById('hapusModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
    </script>

    <footer>
        © 2025 Dhafin Ahmad Ridhoni Sultan — Sistem Data Mahasiswa
    </footer>
