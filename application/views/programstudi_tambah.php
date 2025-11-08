<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Program Studi oleh Dhafin Ahmad Ridhoni Sultan - 2310010242</title>
    <style>
        /* 🌙 Tema pastel gelap elegan (selaras dengan halaman utama) */
        :root {
            --bg-main: #2c2f48;
            --card-bg: #3c3f5c;
            --accent: #9ac8e3;
            --accent-dark: #7fb3ce;
            --text-main: #f2f4f8;
            --text-muted: #cfd3e1;
            --success: #88d498;
            --danger: #f17c7c;
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
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
            border-bottom: 2px solid var(--accent);
        }

        h1 {
            margin: 0;
            font-size: 1.9rem;
            letter-spacing: 1px;
        }

        main {
            max-width: 600px;
            margin: 3rem auto;
            background-color: var(--card-bg);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
            animation: fadeIn 0.6s ease;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        label {
            font-weight: 600;
            color: var(--accent);
            margin-bottom: 0.3rem;
            display: block;
            letter-spacing: 0.5px;
        }

        input[type="text"] {
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--text-main);
            font-size: 1rem;
            width: 100%;
            transition: 0.3s ease;
        }

        input[type="text"]:focus {
            outline: 2px solid var(--accent);
            background-color: rgba(255, 255, 255, 0.15);
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }

        input[type="submit"],
        .back-btn {
            display: inline-block;
            padding: 10px 22px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        input[type="submit"] {
            background-color: var(--success);
            color: #1b1d2a;
        }

        input[type="submit"]:hover {
            background-color: #6bc784;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }

        .back-btn {
            background-color: var(--danger);
            color: #1b1d2a;
        }

        .back-btn:hover {
            background-color: #e86c6c;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsif */
        @media (max-width: 600px) {
            main {
                margin: 2rem 1rem;
                padding: 1.5rem;
            }
            .button-group {
                flex-direction: column;
                gap: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>🌙 Form Tambah Program Studi</h1>
    </header>

    <main>
        <form action="<?= site_url('programstudi/simpan') ?>" method="post">
            <div>
                <label for="kode_prodi">KODE PRODI</label>
                <input type="text" name="kode_prodi" required>
            </div>

            <div>
                <label for="nama_prodi">NAMA PRODI</label>
                <input type="text" name="nama_prodi" required>
            </div>

            <div class="button-group">
                <a href="<?= site_url('programstudi') ?>" class="back-btn">Kembali</a>
                <input type="submit" value="Simpan">
            </div>
        </form>
    </main>
</body>

</html>
