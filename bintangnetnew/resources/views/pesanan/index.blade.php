<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="bg-white border-b border-gray-300">
        <div class="flex justify-between items-center px-6">
            <!-- Ícono de Menú (cyan) -->
            <button id="menu-button" onclick="expandSidebar()">
                <i class="fas fa-bars text-cyan-500 text-lg"></i>
            </button>
            <!-- Logo (centrado) -->
            <div class="mx-auto">
                <img src="{{ asset('assets/gambar2.png') }}" alt="logo" class="h-20 w-28">
            </div>
            <!-- Ícono de Notificación y Perfil -->
            <div class="space-x-4">
                <button>
                    <i class="fas fa-bell text-cyan-500 text-lg"></i>
                </button>
                <!-- Botón de Perfil -->
                <button>
                    <i class="fas fa-user text-cyan-500 text-lg"></i>
                </button>
            </div>
        </div>
    </nav>
    

 <!-- Barra lateral -->
<div id="sidebar" class="w-28 bg-gray h-screen fixed rounded-none border-none transition-all duration-200 ease-in-out overflow-hidden">
    <!-- Items -->
    <div class="p-2 space-y-4">
        <!-- Inicio -->
        <button class="relative px-3 py-3 flex items-center space-x-4 justify-start text-gray-500 rounded-lg group" onclick="highlightSidebarItem(this)">
            <i class="fas fa-home text-lg"></i>
            <span class="font-medium transition-all duration-200 opacity-0">Beranda</span>
        </button>

        {{-- <!-- Autorizaciones -->
        <button class="relative px-3 py-3 flex items-center space-x-4 justify-start text-gray-500 rounded-lg group" onclick="highlightSidebarItem(this)">
            <i class="fas fa-check-circle"></i>
            <span class="font-medium transition-all duration-200 opacity-0">Autorizaciones</span>
        </button> --}}

        <!-- Usuarios -->
        <a href="problem">
        <button class="relative px-3 py-3 flex items-center space-x-4 justify-start text-gray-500 rounded-lg group" onclick="highlightSidebarItem(this)">
            <i class="fas fa-users"></i>
            <span class="font-medium transition-all duration-200 opacity-0"> Keluhan</span>
        </button></a> 

        <!-- Comercios -->
        <a href="pelanggan">
        <button class="relative px-3 py-3 flex items-center space-x-4 justify-start text-gray-500 rounded-lg group" onclick="highlightSidebarItem(this)">
            <i class="fas fa-store"></i>
            <span class="font-medium transition-all duration-200 opacity-0">Pelanggan</span>
        </button></a>

        <!-- Transacciones -->
        {{-- <button class="relative px-3 py-3 flex items-center space-x-4 justify-start text-gray-500 rounded-lg group" onclick="highlightSidebarItem(this)">
            <i class="fas fa-exchange-alt"></i>
            <span class="font-medium transition-all duration-200 opacity-0"></span>
        </button> --}}

        <!-- Cerrar sesión -->
        {{-- <button class="relative px-3 py-3 flex items-center space-x-4 justify-start text-gray-500 rounded-lg group" onclick="highlightSidebarItem(this)">
            <i class="fas fa-sign-out-alt"></i>
            <span class="font-medium transition-all duration-200 opacity-0">Cerrar sesión</span>
        </button> --}}
    </div>
</div>




<!-- Contenedor gris al lado de la barra lateral -->
<div class="ml-16 bg-gray-100 h-screen fixed w-full lg:w-4/4 transition-all duration-200 ease-in-out">
    
   
{{--     
<form action="/pesanan-search" method="GET">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." name="search">
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form> --}}
{{-- <form action="/pesanan-search" method="GET">   
    <div class='flex items-center justify-center '>
      <div class="flex mx-3 rounded bg-white">
          <input class=" w-full border-none bg-transparent px-2 py-1 text-gray-400 outline-none focus:outline-none " type="search" name="search" placeholder="Search..." />
          <button type="submit" class="m-2 rounded bg-blue-600 px-4 py-2 text-white">
              <svg class="fill-current h-8 w-8" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="px" height="300px">
              <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
              </svg>
          </button>
      </div>
    </div>
  </form> --}}
  

    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <a href="/add-pesanan"> <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Tambah data</button></a>        
    </div>

    {{-- <form action="{{ url('pesanan')}}" method="GET">
        <div class="w-1/2 rounded-lg bg-gray-200 p-3 ">
            <div class="flex">
              <div class="flex w-10 items-center justify-center rounded-tl-lg rounded-bl-lg border-r border-gray-200 bg-white p-5">
                <svg viewBox="0 0 20 20" aria-hidden="true" class="pointer-events-none absolute w-5 fill-gray-500 transition">
                  <path d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z"></path>
                </svg>
              </div>
              <input type="cari"  class="w-full bg-white pl-2 text-base font-semibold outline-0" placeholder="" id="" />
              <input type="button" value="cari" class="bg-blue-500 p-2 rounded-tr-lg rounded-br-lg text-white font-semibold hover:bg-blue-800 transition-colors"/>
            </div>
          </div>
    </form> --}}
  
  
    
  

    <div class="text-center">
        <h3>
            @if (Session::has('status'))
                <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    {{ Session::get('massage') }}
                </div>
            @endif
        </h3>
    </div>

    {{-- <div class="text-center">
    <h3>
        @if (Session::has('status'))
        <div class="alert alert-succes" role="alert">
          {{ Session::get('massage') }}
        </div>
        @endif
    </h3>
</div> --}}
    <div class="flex flex-col">

        <div class="overflow-y-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-gray-200 border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    ID
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    NAMA
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    NOMOR TELEPON
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    ALAMAT
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    PAKET YANG DIAMBIL
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    AKSI
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paket as $konten)
                                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $loop->iteration}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $konten->nama }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $konten->nomor_telp }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $konten->alamat }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $konten->paket_jar }}
                                    </td>
                                    <td
                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap items-center">
                                        <button type="button"
                                            class="text-white  hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                            <a href="/pesanan/{{ $konten->id }}">Detail</button></a>
                                        <button type="button"
                                            class="text-white  hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                            <a href="/edit-pesanan/{{ $konten->id }}">Edit</button></a>
                                        <button type="button"
                                            class="text-white  hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                            <a href="/delete-pesanan/{{ $konten->id }}">Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="my-4 row justify-content-between " >
                        {{ $paket->links() }}
                      </div>
                </div>
            </div>
        </div>
    </div>
  
  
</div>

<script>
    function expandSidebar() {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.querySelector('.ml-16');

        if (sidebar.style.width === '16rem') {
            sidebar.style.width = '4rem';
            mainContent.style.marginLeft = '4rem';
            sidebar.classList.remove('text-left', 'px-6');
            sidebar.classList.add('text-center', 'px-0');
        } else {
            sidebar.style.width = '16rem';
            mainContent.style.marginLeft = '16rem';
            sidebar.classList.add('text-left', 'px-6');
            sidebar.classList.remove('text-center', 'px-0');
        }

        const labels = sidebar.querySelectorAll('span');
        labels.forEach(label => label.classList.toggle('opacity-0'));
    }

    function highlightSidebarItem(element) {
    const buttons = document.querySelectorAll("#sidebar button");
    buttons.forEach(btn => {
        btn.classList.remove('bg-gradient-to-r', 'from-cyan-400', 'to-cyan-500', 'text-white', 'w-48', 'ml-0');
        btn.firstChild.nextSibling.classList.remove('text-white');
    });
    element.classList.add('bg-gradient-to-r', 'from-cyan-400', 'to-cyan-500', 'w-56', 'h-10','ml-0');
    element.firstChild.nextSibling.classList.add('text-white');
    }

    // Para la gráfica de Usuarios
    var ctx = document.getElementById('usersChart').getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Usuarios Nuevos', 'Usuarios Registrados'],
            datasets: [{
                data: [50, 50],
                backgroundColor: ['cyan', 'yellow'],
            }]
        },
        options: {
            responsive: true,
        }
    });

    // Para la gráfica de Comercios
    var ctx2 = document.getElementById('commercesChart').getContext('2d');
    new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['Comercios Nuevos', 'Comercios Registrados'],
            datasets: [{
                data: [60, 40],
                backgroundColor: ['cyan', 'yellow'],
            }]
        },
        options: {
            responsive: true,
        }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
      