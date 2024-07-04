<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Usaha Alumni Mahasiswa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFF;
            color: #444;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            overflow-y: auto;
        }
        .container {
            max-width: 1200px;
            background-color: #DB7093;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin: 20px;
        }
        h2 {
            text-align: center;
            color: #000;
            margin-bottom: 20px;
            font-size: 2em;
            animation: blink 1.5s infinite;
        }
        @keyframes blink {
            0% { color: #af4261; }
            50% { color: #f3ec78; }
            100% { color: #af4261; }
        }
        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .search-container form {
            display: inline-block;
            position: relative;
        }
        .search-container input[type="number"] {
            padding: 10px 15px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
        }
        .search-container button {
            background: none;
            border: none;
            padding: 6px 10px;
            cursor: pointer;
        }
        .search-container button i {
            font-size: 1.5em;
            color: #000;
        }
        .card {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }
        .card-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(50% - 10px);
            padding: 20px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        .card-item h3 {
            font-size: 1.2em;
            color: #000;
            margin-bottom: 10px;
        }
        .card-item p {
            margin: 5px 0;
        }
        .card-item span {
            font-weight: bold;
            color: #444;
        }
        .back-button {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .back-button a {
            background-color: #FFF;
            color: #000;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
        }
        .back-button a:hover {
            background-color: #444;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .pagination a {
            color: #000;
            padding: 10px 15px;
            text-decoration: none;
            border: 1px solid #ddd;
            margin: 0 5px;
            border-radius: 4px;
        }
        .pagination a:hover {
            background-color: #444;
            color: #FFF;
        }
        .pagination .active {
            background-color: #444;
            color: #FFF;
            border: 1px solid #444;
        }
        @media (max-width: 768px) {
            .card-item {
                width: 100%;
                margin-right: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Usaha Alumni Mahasiswa</h2>
        <div class="search-container">
            <form method="GET" action="">
                <input type="number" name="tahun_masuk" placeholder="Tahun Masuk" value="<?php echo isset($_GET['tahun_masuk']) ? $_GET['tahun_masuk'] : ''; ?>">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <?php
        $file = 'data_alumni.json';
        $per_page = 2; 
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $start_index = ($current_page - 1) * $per_page;

        if (file_exists($file)) {
            $current_data = file_get_contents($file);
            $array_data = json_decode($current_data, true);
            if (!empty($array_data)) {
                $tahun_masuk_query = isset($_GET['tahun_masuk']) ? $_GET['tahun_masuk'] : '';

                $filtered_data = array_filter($array_data, function ($data) use ($tahun_masuk_query) {
                    return $tahun_masuk_query ? $data['tahun_masuk'] == $tahun_masuk_query : true;
                });

                $total_data = count($filtered_data);
                $total_pages = ceil($total_data / $per_page);
                $paged_data = array_slice($filtered_data, $start_index, $per_page);

                if (!empty($paged_data)) {
                    echo '<div class="card">';
                    foreach ($paged_data as $data) {
                        echo '<div class="card-item">';
                        echo '<h3>'.$data['nama_usaha'].'</h3>';
                        echo '<p><span>NIM:</span> '.$data['nim'].'</p>';
                        echo '<p><span>Nama:</span> '.$data['nama'].'</p>';
                        echo '<p><span>Tahun Masuk:</span> '.$data['tahun_masuk'].'</p>';
                        echo '<p><span>Tahun Lulus:</span> '.$data['tahun_lulus'].'</p>';
                        echo '<p><span>Alamat Usaha:</span> '.$data['alamat_usaha'].'</p>';
                        echo '<p><span>Website:</span> '.$data['website'].'</p>';
                        echo '<p><span>Marketplace:</span> '.$data['marketplace'].'</p>';
                        echo '<p><span>No. Telepon:</span> '.$data['telepon'].'</p>';
                        echo '<p><span>Instagram:</span> '.$data['instagram'].'</p>';
                        echo '<p><span>TikTok:</span> '.$data['tiktok'].'</p>';
                        echo '<p><span>Facebook:</span> '.$data['facebook'].'</p>';
                        echo '</div>';
                    }
                    echo '</div>';

                    if ($tahun_masuk_query) {
                        echo '<div class="back-button"><a href="view.php">Kembali</a></div>';
                    }

                    echo '<div class="pagination">';
                    if ($current_page > 1) {
                        echo '<a href="?tahun_masuk='.$tahun_masuk_query.'&page='.($current_page - 1).'" class="prev-page">Sebelumnya</a>';
                    }
                    for ($i = 1; $i <= $total_pages; $i++) {
                        echo '<a href="?tahun_masuk='.$tahun_masuk_query.'&page='.$i.'" class="'.($i == $current_page ? 'active' : '').'">'.$i.'</a>';
                    }
                    if ($current_page < $total_pages) {
                        echo '<a href="?tahun_masuk='.$tahun_masuk_query.'&page='.($current_page + 1).'" class="next-page">Berikutnya</a>';
                    }
                    echo '</div>';
                } else {
                    echo "<p>Tidak ada data yang ditemukan.</p>";
                    echo '<div class="back-button"><a href="view.php">Kembali</a></div>';
                }
            } else {
                echo "<p>Tidak ada data.</p>";
                echo '<div class="back-button"><a href="view.php">Kembali</a></div>';
            }
        } else {
            echo "<p>File data tidak ditemukan.</p>";
            echo '<div class="back-button"><a href="view.php">Kembali</a></div>';
        }
        ?>
    </div>
    <script>
        document.addEventListener('keydown', function(event) {
            if (event.key === 'ArrowRight') {
                const nextPage = document.querySelector('.next-page');
                if (nextPage) {
                    window.location.href = nextPage.href;
                }
            } else if (event.key === 'ArrowLeft') {
                const prevPage = document.querySelector('.prev-page');
                if (prevPage) {
                    window.location.href = prevPage.href;
                }
            }
        });
    </script>
</body>
</html>
