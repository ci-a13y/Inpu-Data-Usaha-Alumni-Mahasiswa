<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .container h2 {
            color: #af4261;
            margin-bottom: 20px;
        }
        .container a {
            display: inline-block;
            margin: 10px;
            padding: 12px 24px;
            background-color: #af4261;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .container a:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data berhasil disimpan!</h2>
        <a href="index.php">Kembali ke Formulir</a>
        <a href="view.php">Lihat Data</a>
    </div>
</body>
</html>
