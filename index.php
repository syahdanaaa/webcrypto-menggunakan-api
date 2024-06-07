<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> <!-- Mengatur karakter encoding untuk halaman web -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur viewport untuk membuat halaman responsif -->
  <title>Home</title> <!-- Judul halaman -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- Menghubungkan file CSS Bootstrap -->
  <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css" rel="stylesheet"> <!-- Menghubungkan file CSS DataTables Bootstrap -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> <!-- Menghubungkan font Poppins dari Google Fonts -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Menghubungkan file CSS Font Awesome -->
  <style>
    body { /* Mengatur tampilan body halaman */
      background-color: #f8f9fa; /* Warna latar belakang halaman */
      font-family: 'Poppins', sans-serif; /* Mengatur font halaman */
      padding: 0; /* Menghilangkan padding halaman */
      margin: 0; /* Menghilangkan margin halaman */
    }
    h1 {
      color: #343a40; /* Warna teks h1 */
    }
    #coinTable_wrapper { /* Mengatur tampilan wrapper tabel */
      background: #ffffff; /* Warna latar belakang wrapper tabel */
      padding: 20px; /* Padding wrapper tabel */
      border-radius: 8px; /* Membuat sudut-sudut wrapper tabel menjadi bulat */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan wrapper tabel */
    }
    table.dataTable {
      border-collapse: collapse !important; /* Mengatur border tabel */
    }
    table.dataTable thead { /* Mengatur tampilan header tabel */
      background-color: #007bff; /* Warna latar belakang header tabel */
      color: white; /* Warna teks header tabel */
    }
    table.dataTable thead th {
      border: none; /* Menghilangkan border header tabel */
    }
    table.dataTable tbody tr {
      transition: background-color 0.3s; /* Efek transisi pada perubahan warna latar belakang baris tabel */
    }
    table.dataTable tbody tr:hover {
      background-color: #f1f1f1; /* Warna latar belakang baris tabel saat hover */
    }
    .btn-primary {
      background-color: #007bff; /* Warna latar belakang tombol primary */
      border-color: #007bff; /* Warna border tombol primary */
    }
    .btn-primary:hover {
      background-color: #0056b3; /* Warna latar belakang tombol primary saat hover */
      border-color: #0056b3; /* Warna border tombol primary saat hover */
    }
    .container {
      max-width: 100%; /* Mengatur lebar maksimum container */
      padding: 15px; /* Padding container */
    }
    .navbar-nav .nav-link {
      font-size: 16px; /* Ukuran font link navigasi */
      padding: 10px 15px; /* Padding link navigasi */
      color: #007bff; /* Warna teks link navigasi */
    }
    .navbar-nav .nav-link:hover {
      color: #0056b3; /* Warna teks link navigasi saat hover */
    }
    .wrapper {
      display: flex; /* Mengatur wrapper menjadi flexbox */
      width: 100%; /* Lebar wrapper 100% */
      min-height: 100vh; /* Tinggi minimum wrapper 100vh */
      transition: all 0.3s; /* Efek transisi pada wrapper */
    }
    #sidebar {
      min-width: 250px; /* Lebar minimum sidebar */
      max-width: 250px; /* Lebar maksimum sidebar */
      background: #343a40; /* Warna latar belakang sidebar */
      color: #fff; /* Warna teks sidebar */
      transition: all 0.3s; /* Efek transisi pada sidebar */
    }
    #sidebar.active {
      margin-left: -250px; /* Mengatur margin saat sidebar aktif */
    }
    #sidebar .logo {
      text-align: center; /* Mengatur teks logo menjadi center */
      padding: 20px; /* Padding logo */
      font-size: 30px; /* Ukuran font logo */
      background: #007bff; /* Warna latar belakang logo */
    }
    #sidebar ul.components {
      padding: 20px 0; /* Padding komponen dalam sidebar */
      border-bottom: 1px solid #47748b; /* Border bawah komponen dalam sidebar */
    }
    #sidebar ul p {
      color: #fff; /* Warna teks dalam sidebar */
      padding: 10px; /* Padding teks dalam sidebar */
    }
    #sidebar ul li a {
      padding: 10px; /* Padding link dalam sidebar */
      font-size: 16px; /* Ukuran font link dalam sidebar */
      display: block; /* Mengatur tampilan link dalam sidebar menjadi block */
      color: #fff; /* Warna teks link dalam sidebar */
    }
    #sidebar ul li a:hover {
      color: #343a40; /* Warna teks link dalam sidebar saat hover */
      background: #fff; /* Warna latar belakang link dalam sidebar saat hover */
    }
    #content {
      width: 100%; /* Lebar konten 100% */
      padding: 20px; /* Padding konten */
      min-height: 100vh; /* Tinggi minimum konten 100vh */
      transition: all 0.3s; /* Efek transisi pada konten */
    }
  </style>
</head>
<body>
  <div class="wrapper d-flex align-items-stretch"> <!-- Wrapper utama dengan flexbox -->
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
    
    <!-- Page Content -->
    <div id="content" class="p-4 p-md-5"> <!-- Konten halaman -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- Navbar dengan Bootstrap -->
        <div class="container-fluid"> <!-- Container fluid untuk navbar -->
          <button type="button" id="sidebarCollapse" class="btn btn-primary"> <!-- Tombol collapse sidebar -->
            <i class="fa fa-bars"></i> <!-- Ikon menu -->
            <span class="sr-only">Toggle Menu</span> <!-- Teks hanya untuk screen reader -->
          </button>
          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <!-- Tombol collapse navbar untuk layar kecil -->
            <i class="fa fa-bars"></i> <!-- Ikon menu -->
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- Konten yang bisa di-collapse dalam navbar -->
          </div>
        </div>
      </nav>

      <div class="container"> <!-- Container untuk konten utama -->
        <button id="monitorBtn" class="btn btn-primary mb-3">Monitor</button> <!-- Tombol Monitor -->
        <div id="coinTable_wrapper"> <!-- Wrapper untuk tabel koin -->
          <table id="coinTable" class="table table-striped table-bordered"> <!-- Tabel koin -->
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
                <th>Monitor</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Menghubungkan file jQuery -->
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> <!-- Menghubungkan file DataTables jQuery -->
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script> <!-- Menghubungkan file DataTables Bootstrap -->
  
  <script>
    $(document).ready(function() { // Menjalankan kode saat DOM siap
      const url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest'; // Mendefinisikan URL dari endpoint API CoinMarketCap
      const parameters = { // Menetapkan parameter untuk permintaan API
        start: '1', // Memulai dari koin pertama
        limit: '1000', // Batas koin yang akan diambil
        convert: 'IDR' // Mengonversi nilai koin ke IDR
      };
      const headers = { // Menetapkan header untuk permintaan API
        Accept: 'application/json', // Menerima data dalam format JSON
        'X-CMC_PRO_API_KEY': 'c1d71bb5-19dd-46c0-80c0-40d736ee2ac8' // Kunci API untuk otentikasi
      };
      const qs = new URLSearchParams(parameters).toString(); // Mengonversi parameter ke string query
      const requestUrl = `${url}?${qs}`; // Membuat URL permintaan lengkap

      fetch(requestUrl, { // Melakukan permintaan fetch ke API
        method: 'GET', // Metode HTTP GET
        headers: headers // Menyertakan header dalam permintaan
      })
        .then(response => { // Menangani respons dari server
          if (!response.ok) { // Jika respons tidak berhasil
            throw new Error('Respons jaringan tidak oke'); // Lemparkan error
          }
          return response.json(); // Mengonversi respons ke JSON
        })
        .then(data => { // Mengolah data JSON
          const coinTable = $('#coinTable').DataTable({ // Menginisialisasi DataTable
            data: data.data, // Mengisi DataTable dengan data dari API
            columns: [ // Menetapkan kolom-kolom dalam DataTable
              { data: 'cmc_rank' }, // Kolom peringkat koin
              { data: 'name' }, // Kolom nama koin
              { data: 'symbol', // Kolom simbol koin dengan gambar logo
                render: function(data, type, row) {
                  return `<img src="https://s2.coinmarketcap.com/static/img/coins/32x32/${row.id}.png" alt="${row.name} logo" style="width: 20px; height: 20px; margin-right: 5px;"> ${data}`;
                }
              },
              { data: 'quote.IDR.price', // Kolom harga koin dalam IDR
                render: function(data, type, row) {
                  return parseFloat(data).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
                }
              },
              { data: 'quote.IDR.volume_24h', // Kolom volume perdagangan dalam IDR
                render: function(data, type, row) {
                  return parseFloat(data).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
                }
              },
              { data: 'quote.IDR.percent_change_1h', // Kolom persentase perubahan harga dalam 1 jam
                render: function(data, type, row) {
                  return parseFloat(data).toFixed(2) + "%";
                }
              },
              { data: 'quote.IDR.percent_change_24h', // Kolom persentase perubahan harga dalam 24 jam
                render: function(data, type, row) {
                  return parseFloat(data).toFixed(2) + "%";
                } 
              },
              { data: 'quote.IDR.percent_change_7d', // Kolom persentase perubahan harga dalam 7 hari
                render: function(data, type, row) {
                  return parseFloat(data).toFixed(2) + "%";
                }
              },
              {
                data: null, // Kolom checkbox untuk setiap koin
                render: function(data, type, row) {
                  return '<input type="checkbox" name="' + row.symbol + '" value="' + row.symbol + '">';
                }
              },
              { 
                data: null, // Kolom tombol aksi
                render: function(data, type, row) {
                  return '<button class="btn btn-primary aksi-btn">Aksi</button>';
                }
              }
            ],
            order: [[0, 'asc']], // Urutan berdasarkan kolom peringkat koin
            paging: true, // Mengaktifkan penomoran halaman
            pageLength: 50 // Jumlah entri per halaman
          });

          $('#coinTable tbody').on('click', 'button.aksi-btn', function() { // Menambahkan event listener untuk tombol Aksi
    const data = coinTable.row($(this).parents('tr')).data(); // Mendapatkan data baris yang terkait
    const symbol = data.symbol; // Mendapatkan simbol koin
    window.open(`aksi.php?symbol=${symbol}`, '_blank'); // Membuka halaman aksi.php dalam tab baru
          });

        })
        .catch(error => { // Menangani error dari permintaan fetch
          console.error('Terjadi kesalahan', error); // Menampilkan error di console
        });

      $('#monitorBtn').on('click', function() { // Menambahkan event listener untuk tombol Monitor
        const selectedSymbols = []; // Array untuk menyimpan simbol koin yang dipilih
        $('#coinTable tbody input[type="checkbox"]:checked').each(function() { // Iterasi melalui checkbox yang dipilih
          selectedSymbols.push($(this).val()); // Menambahkan simbol koin ke array
        });
        const symbolsQuery = selectedSymbols.join(','); // Mengonversi array simbol koin menjadi string terpisah dengan koma
        const monitorUrl = `monitor.php?coin=${symbolsQuery}`; // Membuat URL monitor dengan simbol koin yang dipilih
        window.open(monitorUrl, '_blank'); // Membuka halaman monitor.php dalam tab baru
      });

      $('#sidebarCollapse').on('click', function() { // Menambahkan event listener untuk tombol collapse sidebar
        $('#sidebar').toggleClass('active'); // Menambahkan atau menghapus class active pada sidebar
      });
    });
  </script>
</body>
</html>
