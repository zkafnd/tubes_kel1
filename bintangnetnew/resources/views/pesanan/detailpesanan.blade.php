<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<title>Invoice</title>
</head>
<body class="bg-white text-black font-sans">
<div class="container mx-auto mt-8">
    <!-- Header -->
    <div class="flex justify-between items-center bg-blue-500 text-white p-4 rounded-t-lg shadow-md">
    <h1 class="text-2xl font-semibold">Invoice Pembelian</h1>
    <p class="text-sm">Tanggal: 2024-01-02</p>
    </div>

    <!-- Informasi Alamat User -->
    <div class="bg-blue-500 text-white p-6 rounded-lg shadow-md my-4">
    <h2 class="text-xl font-semibold mb-4">Informasi Alamat Pengiriman</h2>
    <p>Nama: John Doe</p>
    <p>Alamat: Jl. Contoh No. 123</p>
    <p>Kota: Jakarta</p>
    <!-- Tambah informasi alamat sesuai kebutuhan -->
    </div>

    <!-- Produk yang Dipesan -->
    <div class="bg-blue-500 text-white p-6 rounded-lg shadow-md my-4">
    <h2 class="text-xl font-semibold mb-4">Produk yang Dipesan</h2>
    <!-- Card Produk - Paket Hemat 1 -->
    <div class="bg-yellow-400 p-4 rounded-md mb-2">
        <h3 class="text-lg font-semibold mb-2">Paket Hemat 1 (10 Mbps)</h3>
        <p>Harga: Rp220.000</p>
    </div>
    <!-- Tambah card produk lainnya sesuai kebutuhan -->
    </div>

    <!-- Rincian Pembayaran -->
    <div class="bg-blue-500 text-white p-6 rounded-lg shadow-md my-4">
    <h2 class="text-xl font-semibold mb-4">Rincian Pembayaran</h2>
    <div class="flex justify-between mb-2">
        <p>Subtotal untuk Produk</p>
        <p>Rp220.000</p>
    </div>
    <div class="flex justify-between mb-2">
        <p>Total Ongkos Kirim</p>
        <p>Rp29.000</p>
    </div>
    <div class="flex justify-between mb-2">
        <p>Total Penghematan Paket Diskon</p>
        <p>-Rp10.000</p>
    </div>
    <div class="flex justify-between mb-2">
        <p>Biaya Layanan</p>
        <p>Rp1.000</p>
    </div>
    <div class="flex justify-between mb-2">
        <p>Biaya Penanganan</p>
        <p>Rp1.000</p>
    </div>
    <hr class="my-2">
    <div class="flex justify-between mt-2">
        <p class="font-semibold">Total Pembayaran</p>
        <p class="font-semibold">Rp440.000</p>
    </div>
    </div>

    <!-- Tombol Buat Pesanan -->
    <div class="flex justify-end mb-8">
    <button class="bg-yellow-400 text-black py-2 px-4 rounded hover:bg-yellow-600"> <a href="bayar">Buat Pesanan</button></a> 
    </div>

    <!-- Footer dengan informasi tambahan -->
    <div class="bg-gray-200 p-4 rounded-md text-sm text-gray-600">
    <p>Terima kasih telah berbelanja di Toko Kami.</p>
    <p>Pembayaran dapat dilakukan melalui transfer bank ke rekening berikut: Bank ABC, No. Rek: 1234567890 a.n. Toko Kami.</p>
    <p>Silakan selesaikan pembayaran Anda sebelum tanggal jatuh tempo.</p>
    </div>
</div>
</body>
</html>
