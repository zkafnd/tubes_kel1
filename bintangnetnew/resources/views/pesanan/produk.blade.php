<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=1400px">
    
    <title>BERANDA</title>
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
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="/pesanan"><img src="{{ asset('assets/gambar2.png') }}" class="h-20" alt="Logo" ></a>  
        </a>
       
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-white md:dark:bg-white-900 dark:border-gray-700">
            <li>
                <a href="{{ url('beranda'); }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:text-black  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
              </li>
            <li>
              <a href="" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:text-black  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Produk</a>
            </li>
            <li>
              <a href="{{ url('about'); }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:text-black  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang</a>
            </li>
            <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-black rounded hover:bg-gray-100 md:hover: md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-black md:dark:hover:text-blue-500 dark:focus:text-black dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Bantuan & Dukungan <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" fill="none" viewBox="0 0 10 6">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                      <a href="{{ url('berita'); }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white ">Berita Terbaru</a>
                    </li>
                    <li>
                      <a href="{{ url('contact'); }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kontak kami</a>
                    </li>
                  </ul>
                  {{-- <div class="py-1">
                    <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                  </div> --}}
              </div>
          </li>
          </ul>
        </div>
        </div>
      </nav>

      <br><br><br><br>


      <div class="bg-gray-50">
        <h2 class="text-5xl font-semibold text-center bg-gray-50 py-10">Paket Hemat</h2>
        </div>
      <section class="text-gray-600 body-font bg-gray-50 flex justify-center items-center">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4 text-center">
            <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
              <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                <div>
                  <h2 class="text-gray-900 text-lg font-bold">Paket Hemat 1</h2>
                  <h3 class="mt-2 text-xl font-bold text-yellow-500 text-left">Rp.220.000</h3>
                  <p class="text-sm font-semibold text-gray-400">cocok di gunakan untuk maks 6-8 perangkat</p>
                  <button class="text-sm mt-6 px-4 py-2 bg-yellow-400 text-white rounded-lg  tracking-wider hover:bg-yellow-300 outline-none">
                    <a href="/add-pesanan">Berlangganan</a></button>
                </div>
                <div class="bg-gradient-to-tr w-32 h-32   border-white  border-dashed border-2  flex justify-center items-center ">
                  <div>
                    <img src="{{ asset('assets/10 Mbps.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
              <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                <div>
                  <h2 class="text-gray-900 text-lg font-bold">Paket Hemat 2</h2>
                  <h3 class="mt-2 text-xl font-bold text-yellow-500 text-left">Rp.275.000</h3>
                  <p class="text-sm font-semibold text-gray-400">cocok di gunakan untuk maks 4-6 perangkat</p>
                  <button class="text-sm mt-6 px-4 py-2 bg-yellow-400 text-white rounded-lg  tracking-wider hover:bg-yellow-300 outline-none">
                    <a href="/add-pesanan">Berlangganan</a></button>
                </div>
                <div
                  class="bg-gradient-to-tr w-32 h-32   border-white  border-dashed border-2  flex justify-center items-center ">
                  <div>
                    <img src="{{ asset('assets/15 Mbps.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
              <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                <div>
                  <h2 class="text-gray-900 text-lg font-bold">Paket Hemat 3</h2>
                  <h3 class="mt-2 text-xl font-bold text-yellow-500 text-left">Rp.330.000</h3>
                  <p class="text-sm font-semibold text-gray-400">cocok di gunakan untuk maks 8-10 perangkat</p>
                  <button class="text-sm mt-6 px-4 py-2 bg-yellow-400 text-white rounded-lg  tracking-wider hover:bg-yellow-300 outline-none">
                    <a href="/add-pesanan">Berlangganan</a></button>
                </div>
                <div
                  class="bg-gradient-to-tr w-32 h-32   border-white  border-dashed border-2  flex justify-center items-center ">
                  <div>
                    <img src="{{ asset('assets/20 Mbps.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
      
            <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
              <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                <div>
                  <h2 class="text-gray-900 text-lg font-bold">Paket Hemat 4</h2>
                  <h3 class="mt-2 text-xl font-bold text-yellow-500 text-left">Rp.385.000</h3>
                  <p class="text-sm font-semibold text-gray-400">cocok di gunakan untuk maks 10-15 perangkat</p>
                  <button class="text-sm mt-6 px-4 py-2 bg-yellow-400 text-white rounded-lg  tracking-wider hover:bg-yellow-300 outline-none">
                    <a href="/add-pesanan">Berlangganan</a></button>
                </div>
                <div
                class="bg-gradient-to-tr w-32 h-32   border-white  border-dashed border-2  flex justify-center items-center ">
                <div>
                  <img src="{{ asset('assets/30 Mbps.png') }}" alt="">
                </div>
                </div>
              </div>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
              <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                <div>
                  <h2 class="text-gray-900 text-lg font-bold">Paket Hemat 5</h2>
                  <h3 class="mt-2 text-xl font-bold text-yellow-500 text-left">Rp.440.000</h3>
                  <p class="text-sm font-semibold text-gray-400">cocok di gunakan untuk maks >15 perangkat</p>
                  <button class="text-sm mt-6 px-4 py-2 bg-yellow-400 text-white rounded-lg  tracking-wider hover:bg-yellow-300 outline-none">
                    <a href="/add-pesanan">Berlangganan</a></button>
                </div>
                <div
                  class="bg-gradient-to-tr w-32 h-32   border-white  border-dashed border-2  flex justify-center items-center ">
                  <div>
                    <img src="{{ asset('assets/50 Mbps.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
              <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                <div>
                  <h2 class="text-gray-900 text-lg font-bold">Paket Hemat 6</h2>
                  <h3 class="mt-2 text-xl font-bold text-yellow-500 text-left">Rp.500.000</h3>
                  <p class="text-sm font-semibold text-gray-400">cocok di gunakan untuk maks >15 perangkat</p>
                  <button class="text-sm mt-6 px-4 py-2 bg-yellow-400 text-white rounded-lg  tracking-wider hover:bg-yellow-300 outline-none">
                    <a href="/add-pesanan">Berlangganan</a></button>
                </div>
                <div
                  class="bg-gradient-to-tr w-32 h-32   border-white  border-dashed border-2  flex justify-center items-center ">
                  <div>
                    <img src="{{ asset('assets/100 Mbps.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
      
      <section class="py-15">
        <div class="container mx-auto">
          <h2 class="text-5xl font-semibold text-center mb-8">Paket Terpopuler</h2>
        </div>
      </section>
      
      
      <div class="p-5 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-0 lg:grid-cols-3 xl:grid-cols-0 gap-0 ">
      
        <div class="mx-auto mt-10 w-[500px] transform overflow-hidden rounded-lg bg-white dark:bg-white-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
            <img class="h-48 w-full object-cover object-center" src="{{ asset('assets/gambar6.png') }}" alt="Product Image" />
            <div class="p-4">
              <h2 class="mb-2 text-lg font-medium dark:text-black text-gray-900">Benifit</h2>
              <div class="flex items-center">
                <p class="ml-auto text-base font-medium text-black-500">10 Mbps</p>
              </div>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">1. gratis biaya instalasi</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">2. perangkat dipinjamkan selama berlanggan</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">3. speed upload dowload simetris</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">4. tegihan tetap setiap bulannya(flat)</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">5. kuota unlimited tanpa batasan</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">6. estimasi pemasangan 2-3 hari</p>
              <div class="flex items-center">
                <p class="ml-auto text-base font-medium text-green-500">Rp.220.000</p>
              </div>
         
              <button type="button" class="text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center" disabled> <a href="/add-pesanan">Berlangganan </button></a>
            </div>
          </div>
      
          <div class="mx-auto mt-10 w-[500px] transform overflow-hidden rounded-lg bg-white dark:bg-white-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
            <img class="h-48 w-full object-cover object-center" src="{{ asset('assets/gambar7.jpg') }}" alt="Product Image" />
            <div class="p-4">
              <h2 class="mb-2 text-lg font-medium dark:text-black text-gray-900">Benifit</h2>
              <div class="flex items-center">
                <p class="ml-auto text-base font-medium text-black-500">15 Mbps</p>
              </div>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">1. gratis biaya instalasi</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">2. perangkat dipinjamkan selama berlanggan</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">3. speed upload dowload simetris</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">4. tegihan tetap setiap bulannya(flat)</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">5. kuota unlimited tanpa batasan</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">6. estimasi pemasangan 2-3 hari</p>
              <div class="flex items-center">
                <p class="ml-auto text-base font-medium text-green-500">Rp.275.000</p>
              </div>
         
              <button type="button" class="text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center" disabled> <a href="/add-pesanan">Berlangganan </button></a>
            </div>
          </div>
      
          <div class="mx-auto mt-10 w-[500px] transform overflow-hidden rounded-lg bg-white dark:bg-white-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
            <img class="h-48 w-full object-cover object-center" src="{{ asset('assets/gambar6.png') }}" alt="Product Image" />
            <div class="p-4">
              <h2 class="mb-2 text-lg font-medium dark:text-black text-gray-900">Benifit</h2>
              <div class="flex items-center">
                <p class="ml-auto text-base font-medium text-black-500">20 Mbps</p>
              </div>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">1. gratis biaya instalasi</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">2. perangkat dipinjamkan selama berlanggan</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">3. speed upload dowload simetris</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">4. tegihan tetap setiap bulannya(flat)</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">5. kuota unlimited tanpa batasan</p>
              <p class="mb-2 text-base dark:text-black-300 text-gray-700">6. estimasi pemasangan 2-3 hari</p>
              <div class="flex items-center">
                <p class="ml-auto text-base font-medium text-green-500">Rp.330.000</p>
              </div>
         
            <button type="button" class="text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center" disabled> <a href="/add-pesanan">Berlangganan </button></a>
            </div>
          </div>
      </div>


      
      
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
      
  




  
      
                <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
  
            </body>
</html>
