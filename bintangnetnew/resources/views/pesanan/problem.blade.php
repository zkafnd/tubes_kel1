<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
        <a href="/pesanan">
        <button class="relative px-3 py-3 flex items-center space-x-4 justify-start text-gray-500 rounded-lg group" onclick="highlightSidebarItem(this)">
            <i class="fas fa-home text-lg"></i>
            <span class="font-medium transition-all duration-200 opacity-0">  Beranda</span>
        </button></a>

        {{-- <!-- Autorizaciones -->
        <button class="relative px-3 py-3 flex items-center space-x-4 justify-start text-gray-500 rounded-lg group" onclick="highlightSidebarItem(this)">
            <i class="fas fa-check-circle"></i>
            <span class="font-medium transition-all duration-200 opacity-0">Autorizaciones</span>
        </button> --}}

        <!-- Usuarios -->
        
            <button class="relative px-3 py-3 flex items-center space-x-4 justify-start text-gray-500 rounded-lg group" onclick="highlightSidebarItem(this)">
                <i class="fas fa-users"></i>
                <span class="font-medium transition-all duration-200 opacity-0">Keluhan</span>
            </button>
        
       

        <!-- Pelanggan -->
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


    {{-- <div class="text-center">
    <h3>
        @if (Session::has('status'))
        <div class="alert alert-succes" role="alert">
          {{ Session::get('massage') }}
        </div>
        @endif
    </h3>
</div> --}}
{{-- <form action="/contact" method="POST" >
    @csrf --}}
    <div class="flex flex-col">

        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
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
                                   Masalah
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- ddd($keluhan); --}}
                            @foreach ($keluhan as $keluhans)

                                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $keluhans->nama }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $keluhans->telpon }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $keluhans->alamat }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $keluhans->masalah }}
                                    </td>
                                  
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="my-2 row justify-content-between " >
                        {{ $keluhan->links() }}
                      </div>
                </div>
            </div>
        </div>
    </div>
  
{{-- </form>  --}}
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
</body>
</html>
      