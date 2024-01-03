<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        .pulse-animation {
            animation: pulse 1s infinite;
        }
    </style>
</head>

<body class="bg-white text-gray-800 font-sans">

    <div class="container mx-auto p-8 max-w-md shadow-lg rounded-md bg-white bg-opacity-30 backdrop-filter backdrop-blur-md">

        <h1 class="text-3xl font-bold mb-6 text-blue-500">Total Pembayaran</h1>

        <p class="text-5xl font-bold mb-8 text-yellow-500">Rp440.000</p>

        <div class="mb-6 space-y-2">
            <div>
                <p class="text-sm">Durasi Pembayaran:</p>
                <p id="countdown" class="text-sm font-bold"></p>
                <p class="text-sm font-bold">Jatuh Tempo 03 Jan 2024, 12:01</p>
            </div>
        </div>

        <div class="mb-6 space-y-2">
            <p class="text-sm font-bold text-black">Bank BCA</p>
            <p class="text-sm">No. Rekening:</p>
            <p class="text-lg font-bold text-blue-500">1200 8009 2272 6114</p>
        </div>

        <div class="mb-6 space-y-2">
            <p class="text-sm">Proses verifikasi kurang dari 10 menit setelah pembayaran berhasil</p>
            <p class="text-sm">Hanya menerima dari Bank BCA</p>
        </div>

        <div class="mb-6 space-y-2">
            <p class="text-sm font-bold text-black">Petunjuk Transfer mBanking</p>
            <ol class="list-decimal ml-4 space-y-1">
                <li>Pilih m-Transfer > BCA Virtual Account.</li>
                <li>Masukkan nomor Virtual Account 1200800922726114 dan pilih Send.</li>
                <li>Periksa informasi yang tertera di layar. Pastikan Merchant adalah Shopee, Total tagihan sudah benar dan
                    username kamu jaqe.coy. Jika benar pilih Ya.</li>
                <li>Masukkan PIN m-BCA Anda dan pilih OK.</li>
                <li>Jika muncul notifikasi “Transaksi Gagal. Nominal melebihi limit harian”, mohon ulangi transaksi
                    menggunakan KlikBCA (iBanking) atau ATM.</li>
            </ol>
        </div>

        <div class="mb-6">
            <p class="text-sm font-bold text-black">Petunjuk Transfer iBanking</p>
            <p class="text-sm">Login ke iBanking Anda dan pilih menu Transfer.</p>
            <p class="text-sm">Pilih tujuan transfer ke BCA Virtual Account.</p>
            <p class="text-sm">Masukkan nomor Virtual Account dan jumlah pembayaran.</p>
            <p class="text-sm">Klik konfirmasi dan tunggu hingga transaksi selesai.</p>
        </div>

        <div class="mb-6">
            <p class="text-sm font-bold text-black">Petunjuk Transfer ATM</p>
            <p class="text-sm">Datang ke mesin ATM terdekat.</p>
            <p class="text-sm">Pilih menu Transfer dan pilih ke BCA Virtual Account.</p>
            <p class="text-sm">Masukkan nomor Virtual Account dan jumlah pembayaran.</p>
            <p class="text-sm">Ikuti petunjuk selanjutnya hingga transaksi selesai.</p>
        </div>

        <button
            class="bg-blue-500 hover:bg-blue-600 active:bg-blue-800 text-white px-6 py-3 rounded-full transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none pulse-animation shadow-md w-full mt-8">
            <span class="mr-2">
               <a href="/produk"> Bayar Sekarang</span></a>
            <i class="fas fa-arrow-right"></i>
        </button>

    </div>

    <script>
        // Tentukan tanggal dan waktu akhir pembayaran
        var countDownDate = new Date("Jan 3, 2024 12:01:00").getTime();

        // Perbarui hitungan mundur setiap 1 detik
        var x = setInterval(function () {
            // Dapatkan tanggal dan waktu saat ini
            var now = new Date().getTime();

            // Hitung sisa waktu
            var distance = countDownDate - now;

            // Hitung hari, jam, menit, dan detik
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Tampilkan hitungan mundur
            document.getElementById("countdown").innerHTML = days + " hari " + hours + " jam " + minutes + " menit " + seconds + " detik ";

            // Jika hitungan mundur selesai, tampilkan pesan
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "WAKTU HABIS";
            }
        }, 1000);
    </script>

</body>

</html>

</body>

</html>
