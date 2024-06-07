<?php
// Tempat untuk menambahkan kode PHP jika diperlukan
// Contoh: memuat data portofolio dari database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <style>
        /* Mengatur gaya untuk seluruh halaman */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            color: #FFFFFF;
            margin: 0;
            padding: 0;
        }

        /* Mengatur gaya untuk container utama */
        .container {
            width: 90%;
            margin: 20px auto;
            text-align: center;
        }

        /* Mengatur gaya untuk judul utama */
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        /* Mengatur gaya untuk sub judul */
        h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        /* Mengatur gaya untuk paragraf */
        p {
            font-size: 1.2em;
        }

        /* Mengatur gaya untuk tabel */
        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
            background-color: #1e1e1e;
            border-radius: 10px;
            overflow: hidden;
        }

        /* Mengatur gaya untuk sel tabel */
        th, td {
            padding: 15px;
            text-align: left;
        }

        /* Mengatur gaya untuk header tabel */
        th {
            background-color: #333;
            font-size: 1.1em;
        }

        /* Mengatur gaya untuk sel tabel */
        td {
            border-bottom: 1px solid #333;
        }

        /* Mengatur gaya untuk tombol */
        button {
            background-color: #1dbf73;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 1em;
            border-radius: 5px;
            margin-top: 20px;
        }

        /* Mengatur gaya untuk tombol saat dihover */
        button:hover {
            background-color: #17a65c;
        }

        /* Mengatur gaya untuk form tambah aset */
        #add-asset-form {
            background-color: #333;
            padding: 20px;
            margin: 20px auto;
            width: 50%;
            border-radius: 10px;
            display: none;
        }

        /* Mengatur gaya untuk label dalam form */
        #add-asset-form label {
            display: block;
            margin: 10px 0;
            font-size: 1.1em;
        }

        /* Mengatur gaya untuk input dan select dalam form */
        #add-asset-form input, #add-asset-form select {
            display: block;
            margin: 10px 0;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }

        /* Mengatur gaya untuk tombol dalam form */
        #add-asset-form button {
            width: 100%;
            padding: 15px;
            font-size: 1.1em;
        }

        /* Mengatur gaya untuk performer */
        .performer {
            display: inline-block;
            width: 45%;
            padding: 20px;
            margin: 20px 2.5%;
            background-color: #1e1e1e;
            border-radius: 10px;
            text-align: center;
            font-size: 1.2em;
        }

        /* Mengatur gaya untuk teks dalam performer */
        .performer span {
            display: block;
            font-size: 1.5em;
            margin-top: 10px;
            color: #1dbf73;
        }

        /* Mengatur gaya untuk saran koin */
        #coin-suggestions {
            position: relative;
        }

        /* Mengatur gaya untuk daftar saran koin */
        #coin-suggestions ul {
            background-color: #333;
            border-radius: 5px;
            padding: 0;
            margin: 0;
            list-style: none;
            max-height: 200px;
            overflow-y: auto;
            position: absolute;
            width: 100%;
            z-index: 1000;
        }

        /* Mengatur gaya untuk item dalam daftar saran koin */
        #coin-suggestions ul li {
            padding: 10px;
            cursor: pointer;
        }

        /* Mengatur gaya untuk item dalam daftar saran koin saat dihover */
        #coin-suggestions ul li:hover {
            background-color: #444;
        }

        /* Mengatur gaya untuk navbar */
        .navbar {
            background-color: #343a40;
            overflow: hidden;
        }

        /* Mengatur gaya untuk link dalam navbar */
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Mengatur gaya untuk link dalam navbar saat dihover */
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Mengatur gaya untuk link dalam navbar yang aktif */
        .navbar a.active {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php" class="active">Home</a> <!-- Link to Home page -->
        <a href="watchlist.php">Watchlist</a> <!-- Link to Watchlist page -->
        <a href="comunity.php">Info</a> <!-- Link to Info page -->
        <a href="portofolio.php">Portofolio</a> <!-- Link to Portofolio page -->
    </div>

    <div class="container">
        <h1>My Crypto Portfolio</h1> <!-- Main heading -->
        <h2 id="total-portfolio-value">Loading...</h2> <!-- Subheading for total portfolio value -->
        <div class="performer">
            Best Performer: <span id="best-performer">Loading...</span> <!-- Display best performer -->
        </div>
        <div class="performer">
            Worst Performer: <span id="worst-performer">Loading...</span> <!-- Display worst performer -->
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nama</th> <!-- Column for asset name -->
                    <th>Harga Rata Rata</th> <!-- Column for average price -->
                    <th>Total Koin</th> <!-- Column for total coins -->
                    <th>Nilai Aset</th> <!-- Column for asset value -->
                    <th>Saran</th> <!-- Column for suggestions -->
                    <th>Aksi</th> <!-- Column for actions -->
                </tr>
            </thead>
            <tbody id="portfolio-table">
                <!-- Data koin akan diisi di sini -->
            </tbody>
        </table>
        <button onclick="showAddAsset
Form()">Buy Asset</button> <!-- Button to show add asset form -->
    </div>
    <div id="add-asset-form">
        <h2>Add Asset</h2> <!-- Heading for add asset form -->
        <form onsubmit="addAsset(event)"> <!-- Form to add new asset -->
            <label for="name">Nama:</label> <!-- Label for asset name -->
            <div id="coin-suggestions">
                <input type="text" id="name" name="name" required oninput="fetchCoinSuggestions(this.value)"> <!-- Input for asset name -->
                <ul id="suggestions-list"></ul> <!-- List for coin suggestions -->
            </div>
            <label for="amount">Total Koin:</label> <!-- Label for total coins -->
            <input type="number" id="amount" name="amount" required><br> <!-- Input for total coins -->
            <button type="submit">Add</button> <!-- Button to add asset -->
        </form>
    </div>
    <script>
        // JavaScript code for client-side operations
        // Deklarasi variabel untuk menyimpan data portofolio
        let portfolio = [];

        // Fungsi untuk mengambil harga crypto dari API
        async function fetchCryptoPrice(cryptoName) {
            const response = await fetch(`https://api.coingecko.com/api/v3/simple/price?ids=${cryptoName}&vs_currencies=idr`);
            const data = await response.json();
            return data[cryptoName]?.idr || 0;
        }

        // Fungsi untuk mengambil saran koin dari API
        async function fetchCoinSuggestions(query) {
            const response = await fetch(`https://api.coingecko.com/api/v3/search?query=${query}`);
            const data = await response.json();
            const suggestionsList = document.getElementById('suggestions-list');
            suggestionsList.innerHTML = '';
            data.coins.forEach(coin => {
                const li = document.createElement('li');
                li.textContent = coin.name;
                li.onclick = () => {
                    document.getElementById('name').value = coin.id;
                    suggestionsList.innerHTML = '';
                };
                suggestionsList.appendChild(li);    
            });
        }

        // Fungsi untuk menampilkan data portofolio dalam tabel
        async function renderTable() {
            const tableBody = document.getElementById("portfolio-table");
            tableBody.innerHTML = "";
            let totalValue = 0;
            let bestPerformer = { name: '', value: 0 };
            let worstPerformer = { name: '', value: 0 };

            if (portfolio.length > 0) {
                worstPerformer.value = Number.MAX_VALUE;
            }

            for (const asset of portfolio) {
                const price = await fetchCryptoPrice(asset.name);
                const assetValue = price * asset.amount;
                totalValue += assetValue;

                if (assetValue > bestPerformer.value) {
                    bestPerformer = { name: asset.name, value: assetValue };
                }
                if (assetValue < worstPerformer.value) {
                    worstPerformer = { name: asset.name, value: assetValue };
                }

                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${asset.name}</td>
                    <td>Rp. ${price.toLocaleString()}</td>
                    <td>${asset.amount}</td>
                    <td>Rp. ${assetValue.toLocaleString()}</td>
                    <td>Buy</td>
                    <td><button onclick="deleteAsset('${asset.name}')">Delete</button></td>
                `;
                tableBody.appendChild(row);
            }

            document.getElementById("total-portfolio-value").textContent = `Rp. ${totalValue.toLocaleString()}`;
            document.getElementById("best-performer").textContent = bestPerformer.value ? `${bestPerformer.name}: Rp. ${bestPerformer.value.toLocaleString()} (${((bestPerformer.value / totalValue) * 100).toFixed(2)}%)` : 'N/A';
            document.getElementById("worst-performer").textContent = worstPerformer.value !== Number.MAX_VALUE ? `${worstPerformer.name}: Rp. ${worstPerformer.value.toLocaleString()} (${((worstPerformer.value / totalValue) * 100).toFixed(2)}%)` : 'N/A';
        }

        // Fungsi untuk menampilkan form tambah aset
        function showAddAssetForm() {
            document.getElementById("add-asset-form").style.display = "block";
        }

        // Fungsi untuk menambahkan aset baru ke portofolio
        function addAsset(event) {
            event.preventDefault();
            const name = document.getElementById("name").value.toLowerCase();
            const amount = parseFloat(document.getElementById("amount").value);

            portfolio.push({ name, amount });
            renderTable();
            document.getElementById("add-asset-form").style.display = "none";
        }

        // Fungsi untuk menghapus aset dari portofolio
        function deleteAsset(name) {
            portfolio = portfolio.filter(asset => asset.name !== name);
            renderTable();
        }

        window.onload = renderTable; // Jalankan renderTable saat halaman dimuat
    </script>
</body>
</html>
