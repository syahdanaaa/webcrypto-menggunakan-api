<!DOCTYPE html> <!-- Mendefinisikan tipe dokumen sebagai HTML -->
<html lang="id"> <!-- Mengatur bahasa konten ke Bahasa Indonesia -->

<head>
    <meta charset="UTF-8"> <!-- Mengatur pengkodean karakter -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur viewport untuk perangkat seluler -->
    <title>Aksi monitor</title> <!-- Judul halaman -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- Menghubungkan CSS Bootstrap -->
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css" rel="stylesheet"> <!-- Menghubungkan CSS DataTables -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> <!-- Menghubungkan font Poppins -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Menghubungkan ikon Font Awesome -->
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang */
            font-family: 'Poppins', sans-serif; /* Mengatur jenis font */
            padding: 0; /* Menghapus padding */
            margin: 0; /* Menghapus margin */
        }

        .container {
            padding: 20px; /* Padding untuk container */
            background: #ffffff; /* Warna latar belakang container */
            border-radius: 8px; /* Border radius untuk container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan */
            margin-top: 20px; /* Margin atas */
        }

        .wrapper {
            display: flex; /* Display flex untuk wrapper */
            width: 100%; /* Lebar 100% */
            min-height: 100vh; /* Ketinggian minimal 100 viewport height */
            transition: all 0.3s; /* Transisi semua dengan durasi 0.3 detik */
        }

        #sidebar {
            min-width: 250px; /* Lebar minimal sidebar */
            max-width: 250px; /* Lebar maksimal sidebar */
            background: #343a40; /* Warna latar belakang sidebar */
            color: #fff; /* Warna teks sidebar */
            transition: all 0.3s; /* Transisi semua dengan durasi 0.3 detik */
        }

        #sidebar.active {
            margin-left: -250px; /* Margin kiri saat sidebar aktif */
        }

        #sidebar .logo {
            text-align: center; /* Posisi teks tengah */
            padding: 20px; /* Padding */
            font-size: 30px; /* Ukuran font */
            background: #007bff; /* Warna latar belakang */
        }

        #sidebar ul.components {
            padding: 20px 0; /* Padding atas dan bawah */
            border-bottom: 1px solid #47748b; /* Garis bawah */
        }

        #sidebar ul p {
            color: #fff; /* Warna teks */
            padding: 10px; /* Padding */
        }

        #sidebar ul li a {
            padding: 10px; /* Padding */
            font-size: 16px; /* Ukuran font */
            display: block; /* Menampilkan sebagai block */
            color: #fff; /* Warna teks */
        }

        #sidebar ul li a:hover {
            color: #343a40; /* Warna teks saat hover */
            background: #fff; /* Warna latar belakang saat hover */
        }

        #content {
            width: 100%; /* Lebar 100% */
            padding: 20px; /* Padding */
            min-height: 100vh; /* Ketinggian minimal 100 viewport height */
            transition: all 0.3s; /* Transisi semua dengan durasi 0.3 detik */
        }

        .tradingview-container {
            display: flex; /* Display flex */
            justify-content: space-between; /* Posisi ruang di antara */
        }

        .tradingview-widget {
            flex: 2; /* Proporsi flex */
            margin-right: 20px; /* Margin kanan */
        }

        .tradingview-news {
            flex: 1; /* Proporsi flex */
        }
    </style>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch"> <!-- Membuat wrapper -->
        <nav id="sidebar" class="active"> <!-- Sidebar navigasi -->
            <ul class="list-unstyled components mb-5"> <!-- Daftar navigasi dalam sidebar -->
                <li class="active"> <!-- Elemen navigasi aktif -->
                    <a href="index.php"><span class="fa fa-home"></span> Home</a> <!-- Link navigasi ke Home -->
                </li>
                <li>
                    <a href="portofolio.php"><span class="fa fa-user"></span> Portofolio</a> <!-- Link navigasi ke Portofolio -->
                </li>
                <li>
                    <a href="berita.php"><span class="fa fa-sticky-note"></span> Info</a> <!-- Link navigasi ke Info -->
                </li>
                <li>
                    <a href="watchlist.php"><span class="fa fa-sticky-note"></span> Watchlist</a> <!-- Link navigasi ke Watchlist -->
                </li>
            </ul>
        </nav>

        <div id="content" class="p-4 p-md-5"> <!-- Konten -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- Navigasi -->
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary"> <!-- Tombol untuk mengaktifkan/menonaktifkan sidebar -->
                        <i class="fa fa-bars"></i> <!-- Ikon bar -->
                        <span class="sr-only">Toggle Menu</span> <!-- Teks alternatif -->
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i> <!-- Ikon bar -->
                    </button>
                </div>
            </nav>

            <div class="container"> <!-- Kontainer -->
                <h1 class="my-4">Monitor Koin</h1> <!-- Judul -->
                <div class="tradingview-container"> <!-- Kontainer TradingView -->
                    <div id="tradingview-widget-container" class="tradingview-widget"></div> <!-- Widget TradingView -->
                    <div id="tradingview-news-widget" class="tradingview-news"></div>
                    </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Menghubungkan jQuery -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> <!-- Menghubungkan DataTables -->
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script> <!-- Menghubungkan DataTables Bootstrap 4 -->
    <script src="https://s3.tradingview.com/tv.js"></script> <!-- Menghubungkan TradingView -->
    <script>
        document.addEventListener('DOMContentLoaded', function() { // Menunggu konten dimuat
            const urlParams = new URLSearchParams(window.location.search); // Mendapatkan parameter URL
            const symbol = urlParams.get('symbol') || 'DOGEUSDT'; // Mendapatkan simbol atau default

            new TradingView.widget({ // Membuat widget TradingView
                "width": "100%", // Lebar
                "height": 610, // Tinggi
                "symbol": symbol, // Simbol
                "interval": "D", // Interval
                "timezone": "Etc/UTC", // Zona waktu
                "theme": "light", // Tema
                "style": "1", // Gaya
                "locale": "id", // Bahasa
                "toolbar_bg": "#f1f3f6", // Latar belakang toolbar
                "enable_publishing": false, // Publikasi
                "withdateranges": true, // Rentang tanggal
                "range": "YTD", // Rentang
                "hide_side_toolbar": false, // Menyembunyikan toolbar samping
                "allow_symbol_change": true, // Mengizinkan perubahan simbol
                "details": true, // Detail
                "hotlist": true, // Daftar panas
                "calendar": true, // Kalender
                "studies": [ // Studi
                    "MACD@tv-basicstudies", // MACD
                    "StochasticRSI@tv-basicstudies" // Stochastic RSI
                ],
                "container_id": "tradingview-widget-container" // ID kontainer
            });

            new TradingView.MediumWidget({ // Widget Medium TradingView
                "container_id": "tradingview-news-widget", // ID kontainer
                "symbols": [ // Simbol
                    [symbol] // Simbol
                ],
                "greyText": "Quotes by", // Teks abu-abu
                "gridLineColor": "#e9e9ea", // Warna garis grid
                "fontColor": "#83888D", // Warna teks
                "underLineColor": "#dbeffb", // Warna garis bawah
                "trendLineColor": "#4bafe9", // Warna garis tren
                "width": "100%", // Lebar
                "height": 600, // Tinggi
                "locale": "id" // Bahasa
            });
        });

        $(document).ready(function() { // Dokumen siap
            $('#sidebarCollapse').on('click', function() { // Mengatasi klik pada tombol sidebar
                $('#sidebar').toggleClass('active'); // Toggle kelas 'active' pada sidebar
            });
        });
    </script>
</body>

</html>
