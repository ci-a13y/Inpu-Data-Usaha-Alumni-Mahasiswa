<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Usaha Alumni Mahasiswa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; 
            background-color: #f5f5f5;
        }
        .container {
            width: 100%;
            max-width: 800px; 
            padding: 30px;
            box-sizing: border-box;
            background-color: palevioletred;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            margin-top: 30px; /* Tambahkan margin-top di sini */
        }
        form {
            padding: 30px 0; 
        }
        form div {
            margin-bottom: 20px;
        }
        form div label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
            font-size: 1.2em;
        }
        form div input, form div textarea {
            width: calc(100% - 20px);
            padding: 12px; 
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1em; 
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        form div input:focus, form div textarea:focus {
            border-color: #af4261;
            box-shadow: 0 0 8px rgba(175, 66, 97, 0.5);
        }
        form div textarea {
            height: 100px;
            resize: vertical;
        }
        form div input[type="submit"] {
            width: auto;
            background-color: #FFC0CB;
            color: black;
            border: none;
            cursor: pointer;
            padding: 12px 30px; 
            border-radius: 8px;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        form div input[type="submit"]:hover {
            background-color: #f3ec78;
            color: #af4261;
        }
        h2 {
            text-align: center;
            color: #af4261;
            margin-bottom: 30px;
            font-size: 2.2em;
            animation: blink 1.5s infinite;
        }
        @keyframes blink {
            0% { color: #af4261; }
            50% { color: #f3ec78; }
            100% { color: #af4261; }
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            font-size: 0.9em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Input Data Usaha Alumni Mahasiswa</h2>
        <form method="POST" action="submit.php">
            <div>
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required>
            </div>
            <div>
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div>
                <label for="tahun_masuk">Tahun Masuk:</label>
                <input type="number" id="tahun_masuk" name="tahun_masuk" required>
            </div>
            <div>
                <label for="tahun_lulus">Tahun Lulus:</label>
                <input type="number" id="tahun_lulus" name="tahun_lulus" required>
            </div>
            <div>
                <label for="nama_usaha">Nama Usaha:</label>
                <input type="text" id="nama_usaha" name="nama_usaha" required>
            </div>
            <div>
                <label for="alamat_usaha">Alamat Usaha (Jika Ada):</label>
                <textarea id="alamat_usaha" name="alamat_usaha"></textarea>
            </div>
            <div>
                <label for="website">Website (Jika Ada):</label>
                <input type="text" id="website" name="website">
            </div>
            <div>
                <label for="marketplace">Link ke Marketplace:</label>
                <input type="text" id="marketplace" name="marketplace">
            </div>
            <div>
                <label for="telepon">No. Telepon Bisnis:</label>
                <input type="text" id="telepon" name="telepon" required>
            </div>
            <div>
                <label for="instagram">Instagram (Jika Ada):</label>
                <input type="text" id="instagram" name="instagram">
            </div>
            <div>
                <label for="tiktok">TikTok (Jika Ada):</label>
                <input type="text" id="tiktok" name="tiktok">
            </div>
            <div>
                <label for="facebook">Facebook (Jika Ada):</label>
                <input type="text" id="facebook" name="facebook">
            </div>
            <div style="text-align: center;">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
    <footer>
        &copy; 2024 Cindy/a.ptr
    </footer>
</body>
</html>
