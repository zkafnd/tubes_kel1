<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>
  <body>
   
    



    <nav class="bg-white dark:bg-white-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
      
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
            <img src="{{ asset('assets/gambar2.png') }}" class="h-20" alt="Logo">
        </a>
        {{-- <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          </button>
        </div> --}}
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-white md:dark:bg-white-900 dark:border-gray-700">
            <li>
                <a href="{{ url('beranda'); }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:text-black  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
              </li>
            <li>
              <a href="{{ url('produk'); }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:text-black  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Produk</a>
            </li>
            <li>
              <a href="{{ url('about'); }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:text-black  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang</a>
            </li>
            <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-black rounded hover:bg-gray-100 md:hover: md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-black md:dark:hover:text-blue-500 dark:focus:text-black dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Bantuan & Dukungan <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                      <a href=" " class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"> Berita Terbaru</a>
                    </li>
                    <li>
                      <a href="{{ url('contact'); }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kontak kami</a>
                    </li>
                  </ul>
                  {{-- <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                  </div> --}}
              </div>
          </li>
          </ul>
        </div>
        </div>
      </nav>
<br>
<br><br><br>

<div class="p-10 bg-blue-300">
  <p class="font-bold text-center">Berita Terbaru</p>
</div>


 
  <div class="relative h-56 overflow-hidden rounded-lg md:h-76 top-5">
      <div class="w-auto ">
          <img src="{{ asset('assets/berita.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>   
  </div>

<br>
<br>
<div style="margin-left: 30px;">
  <p class="mb-200 text-black-500 dark:text-black-400">Jakarta, 7 Februari 2019 - Untuk memberikan kemudahan dan manfaat lebih bagi pelanggan dalam melakukan pembayaran layanan Biznet Home, di awal tahun ini Biznet resmi menghadirkan metode pembayaran layanan Biznet melalui GO-BILLS sehingga pelanggan Biznet dapat membayar layanan Biznet menggunakan GO-PAY, fintek terdepan bagian dari ekosistem GOJEK.</p><br>
  <p class="text-black-500 dark:text-black-400">"Kami melihat trend yang berkembang saat ini dimana kita sekarang hidup di era digital dengan semakin banyak kemudahan yang ditawarkan oleh teknologi digital, dengan hadirnya koneksi Internet yang semakin luas, cepat dan berkualitas. Menghadirkan metode pembayaran layanan melalui aplikasi GO-BILLS merupakan salah satu upaya kami dalam memberikan kemudahan bagi seluruh pelanggan layanan Biznet Home untuk dapat menikmati layanan kami dengan lebih nyaman, dengan proses pembayaran yang lebih cepat dan mudah," ujar Adi Kusma, President Director Biznet.</p>
  <p class="text-black-500 dark:text-black-400">Sistem pembayaran digital merupakan salah satu teknologi yang paling dibutuhkan dan semakin banyak digunakan oleh masyarakat Indonesia. Hasil riset yang dilansir DailySocial.id bersama OJK dan riset terpisah Financial Times di akhir 2018 menyatakan bahwa GO-PAY masih menjadi uang elektronik yang paling banyak digunakan di Indonesia.</p>
  <p class="text-black-500 dark:text-black-400">Budi Gandasoebrata, Managing Director GO-PAY mengatakan, "Kami sangat menyambut baik kolaborasi ini. GO-PAY terus berkomitmen untuk memperkenalkan ekosistem pembayaran nontunai kepada masyarakat dan memudahkan kehidupan sehari-hari mereka dengan teknologi. Melalui kolaborasi GO-PAY dengan Biznet Home, kami berharap bahwa manfaat dan kemudahan transaksi nontunai dapat dirasakan oleh semakin banyak orang, sehingga masyarakat luas juga dapat semakin menyadari pentingnya transaksi non-tunai yang efisien."</p>
  <p class="text-black-500 dark:text-black-400">Metode pembayaran melalui GO-PAY ini merupakan metode pembayaran terbaru dari Biznet, setelah sebelumnya menghadirkan metode pembayaran seperti pembayaran online melalui Mobile/Internet Banking, Virtual Account dan kartu kredit.</p>
</div>

<br>
<br>  
<footer class="bg-blue-300">
  <div class="container px-6 py-8 mx-auto">
      <div class="flex flex-col items-center text-center">
          <a href="#">
              <img class="w-auto h-20" src="{{ asset('assets/gambar2.png') }}" alt="">
          </a>

          <p class="max-w-md mx-auto mt-4 text-black-500 dark:text-black-400">Copyright ©2023 PT Bintang.Net - BINNET
          </p>
      </div>

      <hr class="my-10 border-gray-200 dark:border-gray-700" />

      <div class="flex flex-col items-center sm:flex-row sm:justify-between">
          <p class="text-sm text-black-500">© Copyright ©2023 PT Bintang.Net - BINNET</p>
      </div>
  </div>
</footer>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>


 

  


  

      
      
  
      
  




  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
  </body>
</html>
