{{-- resources/views/landing.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplify</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">

    {{-- Navbar --}}
    <nav class="bg-[#FAE3AC] text-black px-8 py-4 rounded-t-2xl shadow flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center gap-3">
        <img src="{{ asset('image/logo-supplify.png') }}" alt="Supplify Logo" class="h-[70px] w-[40x]">
    
    </div>

    <!-- Menu -->
    <div class="flex items-center gap-10 font-medium">
        
        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="hover:text-blue-700 transition">
                login
            </button>
        </form>
    </div>
</nav>

  <!-- Hero Section -->
<section class="bg-[#223A5E] px-6 md:px-10 py-10 mt-8">
    <div class="grid md:grid-cols-2 gap-10 items-center">
        
        <!-- Left Content -->
        <div class="flex flex-col gap-6">
            <!-- Title -->
            <h1 class="text-white font-extrabold text-3xl md:text-4xl leading-tight">
                Simplify Your Supply, Amplify Your Growth.
            </h1>

            <!-- Yellow Box -->
            <div class="bg-[#FAE3AC] p-5 rounded-lg shadow-lg">
                <p class="text-black text-base leading-relaxed">
                    Suplify adalah platform yang menghubungkan Anda dengan pemasok terpercaya, membantu bisnis mendapatkan bahan baku dan produk berkualitas tepat waktu, dengan proses yang cepat dan transparan. Dari pencarian, pemesanan, hingga pengelolaan pasokan, semuanya bisa dilakukan dalam satu tempat.
                </p>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4 mt-2">
                <button class="bg-[#EACD79] px-6 py-2 rounded font-bold text-[#223A5E] hover:bg-[#dcb95f] transition">
                    Login
                </button>
                <button class="border-2 border-white px-6 py-2 rounded font-bold text-white hover:bg-white hover:text-[#223A5E] transition">
                    <img src="{{ asset('image/logo-supplify.png') }}" alt="Supplify Logo" class="h-[40px] w-auto
                    ">
            </button>
            </div>
        </div>

        <!-- Right Image -->
        <div>
             <img src="{{ asset('image/hero-seller.jpg') }}" alt="Hero" class="rounded-lg shadow-lg w-full object-cover">
        </div>
    </div>
</section>


    {{-- Produk Section --}}
    <section class="bg-[#223A5E] px-6 md:px-10 py-10 mt-8">
     <div class="bg-[#FAE3AC] py-10 px-4 rounded-lg">
        <div class="max-w-6xl mx-auto">

            <!-- Judul -->
            <h2 class="text-center text-2xl font-semibold text-gray-800 mb-6">
                Our best sellers Products
            </h2>
            <!-- Grid Produk -->
            <div class="grid gri d-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

                <!-- Produk 1 (Highlight) -->
                <div class="bg-white rounded-lg p-4 flex flex-col items-center shadow">
                    <img src="{{ asset('image/kayu.png') }}" alt="Plant" class="w-40 h-40 object-contain  rounded-[10px] mb-4">
                    <h3 class="text-gray-800 font-medium">kayu papan</h3>
                    <p class="text-red-500 text-sm">$4.20</p>
                </div>

                <!-- Produk 2 -->
                <div class="bg-white rounded-lg p-4 flex flex-col items-center shadow">
                    <img src="{{ asset('image/leather.png') }}" alt="Plant" class="w-40 h-40 object-contain rounded-[10px] mb-4">
                    <h3 class="text-gray-800 font-medium">kulit sintetis</h3>
                    <p class="text-red-500 text-sm">$4.00</p>
                </div>

                <!-- Produk 3 -->
                <div class="bg-white rounded-lg p-4 flex flex-col items-center shadow">
                    <img src="{{ asset('image/benang.png') }}" alt="Plant" class="w-40 h-40 object-contain  rounded-[10px] mb-4">
                    <h3 class="text-gray-800 font-medium">benang wol</h3>
                    <p class="text-red-500 text-sm">$4.00</p>
                </div>

                <!-- Produk 4 -->
                <div class="bg-white rounded-lg p-4 flex flex-col items-center shadow">
                    <img src="{{ asset('image/kancing.png') }}" alt="Plant" class="w-40 h-40 object-contain rounded-[10px] mb-4">
                    <h3 class="text-gray-800 font-medium">kancing</h3>
                    <p class="text-red-500 text-sm">$4.00</p>
                </div>

                <!-- Produk 5 -->
                <div class="bg-white rounded-lg p-4 flex flex-col items-center shadow">
                    <img src="{{ asset('image/kaleng.png') }}" alt="Plant" class="w-40 h-40 object-contain  rounded-[10px] mb-4">
                    <h3 class="text-gray-800 font-medium">kaleng</h3>
                    <p class="text-red-500 text-sm">$4.00</p>
                </div>

                <!-- Produk 6 -->
                <div class="bg-white rounded-lg p-4 flex flex-col items-center shadow">
                    <img src="{{ asset('image/pipa.png') }}" alt="Plant" class="w-40 h-40 object-contain rounded-[10px] mb-4">
                    <h3 class="text-gray-800 font-medium">pipa paralon</h3>
                    <p class="text-red-500 text-sm">$4.00</p>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- About Us Section --}}
<div class="bg-[#223A5E] p-6 md:p-8 mt-8 mb-8">
    <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
        
        <!-- Gambar di kiri -->
        <div class="w-full md:w-1/2">
            <img src="{{ asset('image/about-us.jpg') }}" 
                 alt="Tentang Kami" 
                 class="rounded-lg shadow-lg w-[400px] h-auto object-cover">
        </div>

        <!-- Teks di kanan -->
        <div class="w-full ml-5 md:text-4xl text-white">
            <h2 class="text-3xl font-bold mb-3">about us</h2>
           <p class="text-gray-300 text-base leading-relaxed mb-4">Suplify adalah platform inovatif yang hadir untuk mempermudah proses pemenuhan kebutuhan Anda dengan cepat, aman, dan efisien.
             Kami menghubungkan pengguna dengan berbagai produk berkualitas dari pemasok terpercaya, memastikan setiap transaksi berjalan lancar dan memuaskan.
                </p>
            <p class="text-gray-300 text-base leading-relaxed">Dengan komitmen pada transparansi, kemudahan, dan layanan pelanggan yang responsif, Suplify berupaya menjadi solusi terbaik bagi individu maupun bisnis dalam mendapatkan barang yang mereka butuhkan.
               </p>
        </div>
    </div>
</div>

<!-- Call To Action -->
    <div class="bg-[#FAE3AC] text-black py-16 text-center rounded-[10px] mb-8">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-2xl font-bold mb-4">Belanja? Jualan? Semua bisa di Supplify.</h2>
            <p class="mb-6">Login atau daftar sekarang, mulai perjalananmu bersama Supplify</p>
            <a href="{{ route('penjual.produk.create') }}" class="bg-white text-[#223A5E] font-bold px-8 py-3 rounded-full shadow hover:bg-gray-100">
                Login/register
            </a>
        </div>
    </div>

<footer class="bg-[#FBE3A0] text-black">
  <div class="max-w-7xl mx-auto px-6 py-8 grid grid-cols-1 md:grid-cols-3 gap-8">

    <!-- Logo & Description -->
    <div>
      <img src="{{ asset('image/logo-supplify.png') }}" alt="Logo Suplify" class="w-12 mb-4">
      <p class="text-sm mb-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <div class="flex space-x-4">
        <a href="#"><i class="fab fa-linkedin text-xl"></i></a>
        <a href="#"><i class="fab fa-instagram text-xl"></i></a>
        <a href="#"><i class="fab fa-facebook text-xl"></i></a>
        <a href="#"><i class="fab fa-x-twitter text-xl"></i></a>
      </div>
    </div>

    <!-- Information -->
    <div>
      <h3 class="font-bold mb-3">Information</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#">Products & Services</a></li>
        <li><a href="#">User Guide</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Terms & Conditions</a></li>
      </ul>
    </div>

    <!-- Company -->
    <div>
      <h3 class="font-bold mb-3">Company</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#">Products & Services</a></li>
        <li><a href="#">User Guide</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Terms & Conditions</a></li>
      </ul>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="bg-[#223A5E] text-white text-center py-4">
    <p class="text-sm">© 2025 Suplify. All rights reserved under applicable law.</p>
  </div>
</footer>

</body>
</html>
