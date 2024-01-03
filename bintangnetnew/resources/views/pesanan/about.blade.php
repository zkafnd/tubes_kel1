<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=1400px">
    
    <title>ABOUT</title>
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


    <nav class="bg-white dark:bg-white-900 fixed w-full z-10 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <img src="{{ asset('assets/gambar2.png') }}" class="h-20" alt="Logo">
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            {{-- <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          </button> --}}
        </div>
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
                      <a href="{{ url('berita'); }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white ">Berita Terbaru</a>
                    </li>
                    <li>
                        <a href="{{ url('contact'); }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kontak kami</a>
                      </li>
                  </ul>
                  
              </div>
          </li>
          </ul>
        </div>
        </div>
      </nav>

<br>
<br>
<br>
      <div class="p-10 mb-10 bg-blue-300 text-white text-center">
        <div class="relative mx-auto h-full px-4  pb-20   md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
          <div class="flex flex-col items-center justify-between lg:flex-row py-5">
              <div class=" relative ">
                  <div class="lg:max-w-xl lg:pr-5 relative z-40">
                      <h2 class="mb-6 max-w-lg text-5xl font-light text-g1 sm:text-5xl " style="font-weight: bold;">
                          KENAPA HARUS BINNET?
                      </h2>
                      <p class="text-base font-light" style="max-width: 90%;"> Binnet Merupakan pilihan terbaik bagi pengalaman hiburan berkualitas tinggi dan koneksi yang dapat diandalkan serta harga yang terjangkau
                      </p>
                  </div>
                  <div class="">
                    <br>
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Lihat Paket
                  </button>
              </div>
              </div>
              <div class="relative hidden lg:ml-32 lg:block lg:w-1/2">
                  <svg  class="my-6 mx-auto h-10 w-10 animate-bounce rounded-full bg-white p-2 lg:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16 17l-4 4m0 0l-4-4m4 4V3"></path>
                  </svg>
                  <div class="abg-orange-400 mx-auto ">
                       <img src="{{ asset('assets/jrg.jpeg') }}" width="350" height="350" style="border-radius: 15px;">
                  </div>
              </div>
          </div>
        </div> 
      </div>
      
      <div class="relative flex items-center justify-center">
        <div class="relative mx-auto h-full px-4  pb-20   md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
          <div class="flex flex-col items-center justify-between lg:flex-row py-5">
              <div class=" relative ">
                <div class="abg-orange-400 ">
                  <img src="{{ asset('assets/asd.jpeg') }}" width="350" height="350" style="border-radius: 15px;">
                </div>
              </div>
            <div class="bg-red">
              <div class="relative hidden lg:ml-32 lg:block lg:w-1/2">
                <div class="lg:max-w-xl lg:pr-5 relative left-[50px]  z-40">
                  <h2 class="mb-6 max-w-lg text-5xl font-light text-g1 sm:text-5xl " style="font-weight: bold;">
                    KENAPA BINNET?
                  </h2>
                  <p class="font-light" style="max-width: 90%;"> Binnet Merupakan pilihan terbaik bagi pengalaman hiburan berkualitas tinggi dan koneksi yang dapat diandalkan serta harga yang terjangkau
                  </p>
              </div>
            </div>
              </div>
          </div>
        </div> 
      </div>
      <div class="p-10 bg-white text-white text-center">
        <div class="relative mx-auto h-full px-4  pb-20   md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
          <div class="flex flex-col items-center justify-between lg:flex-row py-5">
              <div class=" relative ">
                <svg  class="my-6 mx-auto h-10 w-10 animate-bounce rounded-full bg-white p-2 ">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16 17l-4 4m0 0l-4-4m4 4V3"></path>
                </svg>
                  <div class="lg:max-w-xl lg:pr-5 relative z-40">
                      <h2 class="mb-6 max-w-lg text-5xl text-black text-g1 sm:text-5xl " style="font-weight: bold;">
                          KENYAMAN ANDA ADALAH PRIORITAS KAMI
                      </h2>
                      <p class="text-base text-black" style="max-width: 90%;"> Binnet Merupakan pilihan terbaik bagi pengalaman hiburan berkualitas tinggi dan koneksi yang dapat diandalkan serta harga yang terjangkau
                      </p>
                  </div>
              </div>
              <div class="relative hidden lg:ml-32  lg:w-1/2">
                  <div class="abg-orange-400 mx-auto w-fit ">
                       <img src="{{ asset('assets/qwe.jpeg') }}" width="350" height="350" style="border-radius: 15px;">
                  </div>
              </div>
          </div>
        </div> 
      </div>
      <div class="bg-white relative flex items-center justify-center ">
        <div class="relative mx-auto h-full px-4  pb-20   md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
          <div class="flex flex-col items-center justify-between lg:flex-row py-5">
              <div class=" relative ">
                <svg  class="my-6 mx-auto h-10 w-10 animate-bounce rounded-full bg-white p-2 lg:hidden"  viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16 17l-4 4m0 0l-4-4m4 4V3"></path>
                </svg>
                <div class="abg-orange-400 w-fit ">
                  <img src="{{ asset('assets/gambar6.png') }}" width="350" height="350" style="border-radius: 15px;">
                </div>
              </div>
              <div class="relative  lg:ml-32  lg:w-1/2">
                <div class="lg:max-w-xl lg:pr-5 relative z-40">
                  <h2 class="mb-6 max-w-lg text-5xl font-light text-g1 sm:text-5xl " style="font-weight: bold;">
                    KENYAMAN ANDA ADALAH PRIORITAS KAMI
                  </h2>
                  <p class="text-base font-light" style="max-width: 90%;"> Binnet Merupakan pilihan terbaik bagi pengalaman hiburan berkualitas tinggi dan koneksi yang dapat diandalkan serta harga yang terjangkau
                  </p>
              </div>
              </div>
          </div>
        </div> 
      </div>
      
      <br><br><br><br>
  
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
