<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Menetapkan karakter set halaman -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur viewport agar sesuai dengan lebar perangkat -->
    <title>Watchlist</title> <!-- Judul halaman -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- Menghubungkan CSS Bootstrap -->
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css" rel="stylesheet"> <!-- Menghubungkan CSS DataTables dengan Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> <!-- Menghubungkan font Poppins -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Menghubungkan Font Awesome -->
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang halaman */
            font-family: 'Poppins', sans-serif; /* Font halaman */
            padding: 0;
            margin: 0;
        }
        h1 {
            color: #343a40; /* Warna teks heading 1 */
        }
        #coinTable_wrapper {
            background: #ffffff; /* Warna latar belakang pembungkus tabel */
            padding: 20px; /* Padding pembungkus tabel */
            border-radius: 8px; /* Sudut pembungkus tabel */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan pembungkus tabel */
        }
        table.dataTable {
            border-collapse: collapse !important; /* Mengatur tabel agar border-collapse */
        }
        table.dataTable thead {
            background-color: #007bff; /* Warna latar belakang header tabel */
            color: white; /* Warna teks header tabel */
        }
        table.dataTable thead th {
            border: none; /* Menghilangkan border header tabel */
        }
        table.dataTable tbody tr {
            transition: background-color 0.3s; /* Transisi warna latar belakang baris tabel */
        }
        table.dataTable tbody tr:hover {
            background-color: #f1f1f1; /* Warna latar belakang saat baris tabel dihover */
        }
        .btn-primary {
            background-color: #007bff; /* Warna latar belakang tombol utama */
            border-color: #007bff; /* Warna border tombol utama */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Warna latar belakang tombol utama saat dihover */
            border-color: #0056b3; /* Warna border tombol utama saat dihover */
        }
        .container {
            max-width: 100%; /* Lebar maksimum container */
            padding: 15px; /* Padding container */
        }
        .navbar-nav .nav-link {
            font-size: 16px; /* Ukuran font link navigasi */
            padding: 10px 15px; /* Padding link navigasi */
            color: #007bff; /* Warna teks link navigasi */
        }
        .navbar-nav .nav-link:hover {
            color: #0056b3; /* Warna teks link navigasi saat dihover */
        }
        .wrapper {
            display: flex; /* Mengatur flexbox untuk wrapper */
            width: 100%; /* Lebar wrapper */
            min-height: 100vh; /* Tinggi minimum wrapper */
            transition: all 0.3s; /* Transisi semua properti */
        }
        #sidebar {
            min-width: 250px; /* Lebar minimum sidebar */
            max-width: 250px; /* Lebar maksimum sidebar */
            background: #343a40; /* Warna latar belakang sidebar */
            color: #fff; /* Warna teks sidebar */
            transition: all 0.3s; /* Transisi semua properti */
        }
        #sidebar.active {
            margin-left: -250px; /* Menggeser sidebar saat aktif */
        }
        #sidebar .logo {
            text-align: center; /* Mengatur teks logo menjadi rata tengah */
            padding: 20px; /* Padding logo */
            font-size: 30px; /* Ukuran font logo */
            background: #007bff; /* Warna latar belakang logo */
        }
        #sidebar ul.components {
            padding: 20px 0; /* Padding komponen daftar */
            border-bottom: 1px solid #47748b; /* Border bawah komponen daftar */
        }
        #sidebar ul p {
            color: #fff; /* Warna teks paragraf */
            padding: 10px; /* Padding paragraf */
        }
        #sidebar ul li a {
            padding: 10px; /* Padding link daftar */
            font-size: 16px; /* Ukuran font link daftar */
            display: block; /* Menampilkan sebagai blok */
            color: #fff; /* Warna teks link daftar */
        }
        #sidebar ul li a:hover {
            color: #343a40; /* Warna teks link daftar saat dihover */
            background: #fff; /* Warna latar belakang link daftar saat dihover */
        }
        #content {
            width: 100%; /* Lebar konten */
            padding: 20px; /* Padding konten */
            min-height: 100vh; /* Tinggi minimum konten */
            transition: all 0.3s; /* Transisi semua properti */
        }
        #coinDetail {
            margin-top: 20px; /* Margin atas detail koin */
            padding: 20px; /* Padding detail koin */
            background: #fff; /* Warna latar belakang detail koin */
            border-radius: 8px; /* Sudut border detail koin */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan detail koin */
        }
        .tradingview-widget-container__widget {
            width: 100%; /* Lebar widget TradingView */
            height: 400px; /* Tinggi widget TradingView */
        }
    </style>
</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="active"> <!-- Sidebar navigasi -->
      <ul class="list-unstyled components mb-5"> <!-- Daftar navigasi dalam sidebar -->
        <li class="active"> <!-- Elemen navigasi aktif -->
          <a href="index.php"><span class="fa fa-home"></span> Home</a> <!-- Link navigasi ke Home -->
        </li>
        <li>
          <a href="portofolio.php"><span class="fa fa-user"></span> Portofolio</a> <!-- Link navigasi ke About -->
        </li>
        <li>
          <a href="berita.php"><span class="fa fa-sticky-note"></span> Info</a> <!-- Link navigasi ke Blog -->
        </li>
        <li>
          <a href="watchlist.php"><span class="fa fa-sticky-note"></span> Watchlist</a> <!-- Link navigasi ke Blog -->
        </li>
      </ul>
    </nav>
        
        <div id="content" class="p-4 p-md-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i> <!-- Ikon menu -->
                        <span class="sr-only">Toggle Menu</span> <!-- Teks tersembunyi untuk aksesibilitas -->
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i> <!-- Ikon menu untuk mobile -->
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    </div>
                </div>
            </nav>
        
            <div class="container">
                <div id="coinTable_wrapper">
                    <h1 class="my-4">Pantau Koin</h1> <!-- Judul halaman -->
                    <input type="text" id="coinSearchInput" class="form-control mb-3" placeholder="Cari Koin..."> <!-- Input pencarian koin -->
                    <table id="coinTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Peringkat</th>
                                <th>Nama</th>
                                <th>Simbol</th>
                                <th>Harga (IDR)</th>
                                <th>Volume (IDR)</th>
                                <th>1 Jam (%)</th>
                                <th>1 Hari (%)</th>
                                <th>1 Minggu (%)</th>
                            </tr>
                        </thead>
                        <tbody></tbody> <!-- Tubuh tabel untuk data koin -->
                    </table>
                </div>
                <div id="coinChart" class="mt-5" style="display: none;">
                    <div class="tradingview-widget-container">
                        <div id="tradingview_chart"></div> <!-- Kontainer untuk grafik koin -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Memuat pustaka JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Menghubungkan jQuery -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> <!-- Menghubungkan DataTables -->
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script> <!-- Menghubungkan DataTables dengan Bootstrap -->
    <script src="https://s3.tradingview.com/tv.js"></script> <!-- Menghubungkan TradingView -->

    <script>
        $(document).ready(function() {
            const url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest'; // URL API CoinMarketCap
            const parameters = {
                start: '1',
                limit: '100',
                convert: 'IDR'
            };
            const headers = {
                Accept: 'application/json',
                'X-CMC_PRO_API_KEY': 'c1d71bb5-19dd-46c0-80c0-40d736ee2ac8' // API key CoinMarketCap
            };
            const qs = new URLSearchParams(parameters).toString(); // Membuat query string dari parameter
            const requestUrl = `${url}?${qs}`; // Menggabungkan URL dan query string

            fetch(requestUrl, {
                method: 'GET',
                headers: headers
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Respons jaringan tidak oke'); // Pesan error jika respons tidak oke
                }
                return response.json(); // Mengubah respons menjadi JSON
            })
            .then(data => {
                const coinTable = $('#coinTable').DataTable({
                    data: data.data, // Menggunakan data dari API
                    columns: [
                        { data: 'cmc_rank' }, // Kolom Peringkat
                        { data: 'name' }, // Kolom Nama
                        { 
                            data: 'symbol', // Kolom Simbol
                            render: function(data, type, row) {
                                return `<img src="https://s2.coinmarketcap.com/static/img/coins/32x32/${row.id}.png" alt="${row.name} logo" style="width: 20px; height: 20px; margin-right: 5px;"> ${data}`; // Menampilkan logo koin
                            }
                        },
                        { 
                            data: 'quote.IDR.price', // Kolom Harga (IDR)
                            render: function(data, type, row) {
                                return parseFloat(data).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' }); // Format harga IDR
                            }
                        },
                        { 
                            data: 'quote.IDR.volume_24h', // Kolom Volume (IDR)
                            render: function(data, type, row) {
                                return parseFloat(data).toLocaleString('id-ID'); // Format volume IDR
                            }
                        },
                        { 
                            data: 'quote.IDR.percent_change_1h', // Kolom 1 Jam (%)
                            render: function(data, type, row) {
                                return `<span class="${data >= 0 ? 'text-success' : 'text-danger'}">${data.toFixed(2)}%</span>`; // Menampilkan perubahan persentase dengan warna
                            }
                        },
                        { 
                            data: 'quote.IDR.percent_change_24h', // Kolom 1 Hari (%)
                            render: function(data, type, row) {
                                return `<span class="${data >= 0 ? 'text-success' : 'text-danger'}">${data.toFixed(2)}%</span>`; // Menampilkan perubahan persentase dengan warna
                            }
                        },
                        { 
                            data: 'quote.IDR.percent_change_7d', // Kolom 1 Minggu (%)
                            render: function(data, type, row) {
                                return `<span class="${data >= 0 ? 'text-success' : 'text-danger'}">${data.toFixed(2)}%</span>`; // Menampilkan perubahan persentase dengan warna
                            }
                        }
                    ]
                });

                $('#coinTable tbody').on('click', 'tr', function() { // Menambahkan event klik pada baris tabel
                    const data = coinTable.row(this).data(); // Mendapatkan data baris yang diklik
                    $('#coinChart').show(); // Menampilkan chart
                    new TradingView.MediumWidget({
                        "container_id": "tradingview_chart",
                        "symbol": "BINANCE:" + data.symbol + "USDT",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "light",
                        "style": "1",
                        "locale": "id",
                        "toolbar_bg": "#f1f3f6",
                        "hide_side_toolbar": false,
                        "allow_symbol_change": true,
                        "details": true,
                        "hotlist": true,
                        "calendar": true,
                        "studies": ["MACD@tv-basicstudies"],
                        "show_popup_button": true,
                        "popup_width": "1000",
                        "popup_height": "650"
                    });
                });

                $('#coinSearchInput').on('keyup', function() { // Event untuk pencarian koin
                    coinTable.search(this.value).draw(); // Melakukan pencarian dan menampilkan hasil
                });
            })
            .catch(error => {
                console.error('Ada masalah dengan pengambilan data:', error); // Menangani error
            });

            $('#sidebarCollapse').on('click', function() { // Event untuk toggle sidebar
                $('#sidebar').toggleClass('active'); // Mengaktifkan atau menonaktifkan sidebar
            });
        });
    </script>
</body>
</html>
