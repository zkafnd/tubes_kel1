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
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>


    <form action="/pesanan" method="POST" class="max-w-sm mx-auto">
        @csrf
        <div class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover"  bg-local  style="background-image:url('https://images.unsplash.com/photo-1499123785106-343e69e68db1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1748&q=80')"
            id="modal-id">
            <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
                <div class="mb-8 flex flex-col items-center">
                    <img src="{{ asset('assets/gambar2.png') }}" width="150" alt="" srcset="" />
                    <h1 class="mb-2 text-2xl">Berlangganan</h1>
                  </div>
                {{-- <h1 class="text-center text-3xl"><b>Tambah Data</b></h1> --}}
                <div class="p-3  mt-2 text-center space-x-4 md:block">
                    <div class="mb-5">
                        <label for="large-input" class="block mb-2 text-sm font-medium  dark:text-black">Nama</label>
                        <input type="text" id="nama"
                            class="frorm-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            id="nama" name="nama" value="{{ old('nama') }}">
                    </div>
                    <div class="mb-5">
                        <label for="large-input" class="block mb-2 text-sm font-medium  dark:text-black">Nomor
                            telefon</label>
                        <input type="number" id="nomor_telp"
                            class="frorm-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            id="nomor_telp" name="nomor_telp" value="{{ old('nomor_telp') }}">
                    </div>
                    <div class="mb-5">
                        <label for="large-input" class="block mb-2 text-sm font-medium  dark:text-black">Alamat</label>
                        <input type="text" id="alamat"
                            class="frorm-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            id="alamat" name="alamat" value="{{ old('alamat') }}">
                    </div>
                    <div class="mb-5">
                        <label for="large-input" class="block mb-2 text-sm font-medium  dark:text-black">Paket yang
                            diambil</label>
                        <input type="text" id="Paket_jar"
                            class="frorm-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            id="paket_jar" name="paket_jar" value="{{ old('paket_jar') }}">
                    </div>
                    <button
                        class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                        <a href="/beranda">Kembali</a>
                            <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                             submit </button>
                    </button>

                </div>
            </div>
        </div>
        </div>
    </form>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
