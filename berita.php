<?php
// PHP code untuk fetch data dari API dan lainnya

// Fungsi untuk mendapatkan data koin dari API
function getCoinData() {
  $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/info'; // URL API CoinMarketCap
  $parameters = ['id' => '1,2,1027,825,1958,2010,74,1975,5426,52']; // Parameter untuk memilih koin tertentu
  $query = http_build_query($parameters); // Mengubah parameter menjadi format query string
  $requestUrl = $url . '?' . $query; // Menyusun URL request lengkap

  $options = [
    CURLOPT_URL => $requestUrl, // URL yang akan diakses
    CURLOPT_RETURNTRANSFER => true, // Mengembalikan hasil transfer sebagai string
    CURLOPT_HTTPHEADER => [
      'Accepts: application/json', // Header untuk menerima data dalam format JSON
      'X-CMC_PRO_API_KEY: c1d71bb5-19dd-46c0-80c0-40d736ee2ac8' // API key untuk otentikasi
    ]
  ];

  $curl = curl_init(); // Inisialisasi cURL
  curl_setopt_array($curl, $options); // Set opsi cURL
  $response = curl_exec($curl); // Eksekusi request
  curl_close($curl); // Tutup sesi cURL
  $data = json_decode($response, true); // Decode JSON response

  return $data; // Kembalikan data yang diperoleh
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> <!-- Set karakter encoding -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Set viewport untuk responsif -->
  <title>Info</title> <!-- Judul halaman -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- Link CSS Bootstrap -->
  <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css" rel="stylesheet"> <!-- Link CSS DataTables -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> <!-- Link font Poppins -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Link font-awesome -->
  <style>
    body {
      background-color: #f8f9fa; /* Warna latar belakang */
      font-family: 'Poppins', sans-serif; /* Font utama */
      padding: 0; /* Menghapus padding default */
      margin: 0; /* Menghapus margin default */
    }
    .container {
      max-width: 100%; /* Lebar maksimum 100% */
      padding: 15px; /* Padding 15px */
    }
    .navbar-nav .nav-link {
      font-size: 16px; /* Ukuran font 16px */
      padding: 10px 15px; /* Padding atas-bawah 10px, kiri-kanan 15px */
      color: #007bff; /* Warna teks biru */
    }
    .navbar-nav .nav-link:hover {
      color: #0056b3; /* Warna teks saat hover */
    }
    .wrapper {
      display: flex; /* Flexbox untuk wrapper */
      width: 100%; /* Lebar 100% */
      min-height: 100vh; /* Tinggi minimum 100vh */
      transition: all 0.3s; /* Transisi semua properti 0.3s */
    }
    #sidebar {
      min-width: 250px; /* Lebar minimum sidebar 250px */
      max-width: 250px; /* Lebar maksimum sidebar 250px */
      background: #343a40; /* Warna latar belakang sidebar */
      color: #fff; /* Warna teks sidebar */
      transition: all 0.3s; /* Transisi semua properti 0.3s */
    }
    #sidebar.active {
      margin-left: -250px; /* Sidebar tersembunyi dengan margin negatif */
    }
    #sidebar .logo {
      text-align: center; /* Teks tengah */
      padding: 20px; /* Padding 20px */
      font-size: 30px; /* Ukuran font 30px */
      background: #007bff; /* Warna latar belakang logo */
    }
    #sidebar ul.components {
      padding: 20px 0; /* Padding atas-bawah 20px */
      border-bottom: 1px solid #47748b; /* Border bawah 1px solid */
    }
    #sidebar ul p {
      color: #fff; /* Warna teks putih */
      padding: 10px; /* Padding 10px */
    }
    #sidebar ul li a {
      padding: 10px; /* Padding 10px */
      font-size: 16px; /* Ukuran font 16px */
      display: block; /* Tampilkan sebagai blok */
      color: #fff; /* Warna teks putih */
    }
    #sidebar ul li a:hover {
      color: #343a40; /* Warna teks saat hover */
      background: #fff; /* Warna latar belakang saat hover */
    }
    #content {
      width: 100%; /* Lebar 100% */
      padding: 20px; /* Padding 20px */
      min-height: 100vh; /* Tinggi minimum 100vh */
      transition: all 0.3s; /* Transisi semua properti 0.3s */
    }
    #news {
      max-width: 300px; /* Lebar maksimum 300px */
      margin-left: 20px; /* Margin kiri 20px */
    }
    .news-item {
      margin-bottom: 10px; /* Margin bawah 10px */
      padding: 10px; /* Padding 10px */
      background: #fff; /* Warna latar belakang putih */
      border-radius: 5px; /* Border radius 5px */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan */
    }
    .news-item h5 {
      margin: 0; /* Margin 0 */
      font-size: 16px; /* Ukuran font 16px */
    }
    .news-item p {
      margin: 0; /* Margin 0 */
      font-size: 14px; /* Ukuran font 14px */
    }
    .news-item img {
      max-width: 100%; /* Lebar maksimum 100% */
      height: auto; /* Tinggi otomatis */
      border-radius: 5px; /* Border radius 5px */
      margin-bottom: 10px; /* Margin bawah 10px */
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- Navbar -->
  <div class="container-fluid"> <!-- Container navbar -->
    <button type="button" id="sidebarCollapse" class="btn btn-primary"> <!-- Tombol toggle sidebar -->
      <i class="fa fa-bars"></i>
      <span class="sr-only">Toggle Menu</span>
    </button>
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <!-- Tombol toggle navbar pada perangkat kecil -->
      <i class="fa fa-bars"></i>
    </button>
  </div>
</nav>
<div class="wrapper d-flex align-items-stretch"> <!-- Wrapper untuk konten dan sidebar -->
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

  <div id="content" class="p-4 p-md-5"> <!-- Konten utama -->
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1>Info koin</h1> <!-- Judul halaman -->
          <?php
          $coinData = getCoinData(); // Memanggil fungsi untuk mendapatkan data koin

          if (isset($coinData['data'])) { // Mengecek apakah data koin ada
            echo '<table id="coinTable" class="table table-striped table-bordered">'; // Membuat tabel untuk menampilkan data koin
            echo '<thead>';
            echo '<tr>';
            echo '<th>Logo</th>';//kolom untuk logo
            echo '<th>Nama</th>';//kollom untuk nama
            echo '<th>Deskripsi</th>';//kolom untuk deskripsi
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            foreach ($coinData['data'] as $coin) { // Loop melalui setiap koin dalam data
              echo '<tr>';
              echo '<td><img src="' . $coin['logo'] . '" alt="' . $coin['name'] . '" style="width: 50px; height: 50px;"></td>'; // Menampilkan logo koin
              echo '<td>' . $coin['name'] . '</td>'; // Menampilkan nama koin
              echo '<td>' . $coin['description'] . '</td>'; // Menampilkan deskripsi koin
              echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
          } else {
            echo '<p>Tidak ada data yang ditemukan.</p>'; // Pesan jika tidak ada data
          }
          ?>
        </div>
        <!-- Widget -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 gap-y-5 mb-20"> <!-- Grid layout untuk widget -->
          <!-- TradingView Widget NEWS -->
          <div class="bg-secondaryBg/60 backdrop-blur-sm p-5 lg:col-span-1 rounded-xl"> <!-- Widget berita -->
            <div class="tradingview-widget-container__widget"></div> <!-- Container widget TradingView -->
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
            {
               "feedMode": "market", // Mode feed (pasar)
               "market": "crypto", // Pasar (crypto)
               "isTransparent": true, // Transparan (true)
               "displayMode": "regular", // Mode tampilan (biasa)
               "height": 800, // Tinggi (800)
               "colorTheme": "dark", // Tema warna (gelap)
               "locale": "id" // Lokal (ID)
            }
</script>

            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- jQuery -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> <!-- DataTables -->
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script> <!-- DataTables Bootstrap 4 -->
<script>
  $(document).ready(function() { // Saat dokumen siap
    $('#sidebarCollapse').on('click', function() { // Ketika tombol sidebarCollapse diklik
      $('#sidebar').toggleClass('active'); // Toggle kelas active pada sidebar
    });
    $('#coinTable').DataTable(); // Inisialisasi DataTables pada tabel coinTable
  });
</script>
</body>
</html>
