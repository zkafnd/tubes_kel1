<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=1400px">

    <title>Edit Data</title>
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
   

  <form action="/pesanan/ {{ $paket->id }}" method="post" class="max-w-sm mx-auto">
    @csrf
    @method('PUT')
    <div class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover"  style="background-image: url(https://images.unsplash.com/photo-1623600989906-6aae5aa131d4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1582&q=80);" id="modal-id">
        <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
          <h1 class="text-center text-3xl"><b>Edit Data</b></h1>
            <div class="p-3  mt-3 text-center space-x-4 md:block">
                  <div class="mb-5">
                      <label for="large-input" class="block mb-2 text-sm font-medium  dark:text-black">Nama</label>
                      <input type="nama" id="nama" class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required
                        name="nama" value="{{ old('nama', $paket->nama) }}">
                  </div>
                  <div class="mb-5">
                      <label for="large-input" class="block mb-2 text-sm font-medium  dark:text-black">Nomor telefon</label>
                      <input type="nomor_telp" id="nomor_telp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required
                      name="nomor_telp" value="{{ old('nomor_telp', $paket->nomor_telp) }}">
                  </div>
                  <div class="mb-5">
                      <label for="large-input" class="block mb-2 text-sm font-medium  dark:text-black">Alamat</label>
                      <input type="alamat" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required
                      name="alamat" value="{{ old('alamat', $paket->alamat) }}">
                  </div>
                  <div class="mb-5">
                      <label for="large-input" class="block mb-2 text-sm font-medium  dark:text-black">Paket yang diambil</label>
                      <input type="paket_jar" id="paket_jar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required
                      name="paket_jar" value="{{ old('paket_jar', $paket->paket_jar) }}">
                  </div>
                  <button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                    <a href="/pesanan">Kembali</a>
                  </button>
                  <button type="submit"class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Perbarui
                  </button>
            </div>
        </div>
    </div>
  </form> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
