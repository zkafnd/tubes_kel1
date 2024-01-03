<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=1400px">

    <title>Data Pesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet" />
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
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
   

    <form method="post" action="/pesanan/{{ $paket->id }}">
        @csrf
        @method('delete')
<div class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover"  style="background-image: url(https://images.unsplash.com/photo-1623600989906-6aae5aa131d4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1582&q=80);" id="modal-id">
   	<div class="absolute bg-black opacity-80 inset-0 z-0"></div>
    <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
      <h1 class="text-center text-3xl"><b>Detail Data</b></h1>

        <div class="p-3  mt-2 text-center space-x-4 md:block">
          
          <form class="max-w-sm mx-auto">
              <div class="mb-5">
                  <label for="large-input" class="block mb-2 text-sm font-medium  dark:text-black">Nama</label>
                  <p class="block w-full p-7 0 border">   {{ $paket->nama }} </p>
              </div>
              <div class="mb-5">
                  <label for="large-input" class="block mb-2 text-sm font-medium  dark:text-black">Nomor telefon</label>
                  <p class="block w-full p-7 0 border">{{ $paket->nomor_telp }} </p>
              </div>
              <div class="mb-5">
                  <label for="large-input" class="block mb-2 text-sm font-medium  dark:text-black">Alamat</label>
                  <p class="block w-full p-7 0 border"> {{ $paket->alamat }}</p>
              </div>
              <div class="mb-5">
                  <label for="large-input" class="block mb-2 text-sm font-medium  dark:text-black">Paket yang diambil</label>
                  <p class="block w-full p-7 0 border">{{ $paket->paket_jar }} </p>
              </div>
            <button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
              <a href="/pesanan">Kembali</a>
            </button>
            
        </div>
      </div>
    </div>
  </div>

</form> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
