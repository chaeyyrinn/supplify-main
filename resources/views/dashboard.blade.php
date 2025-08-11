<x-app-layout>
    <div class="bg-[#0A1A2F] p-8 min-h-screen rounded-xl">
        <!-- Statistik -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-md text-center">
                <p class="text-sm font-semibold">total produk terjual</p>
                <p class="text-2xl font-bold mt-4">100</p>
            </div>
            <div class="bg-white p-6 rounded-md text-center">
                <p class="text-sm font-semibold">total produk disetujui</p>
                <p class="text-2xl font-bold mt-4">100</p>
            </div>
            <div class="bg-white p-6 rounded-md text-center">
                <p class="text-sm font-semibold">total produk ditolak</p>
                <p class="text-2xl font-bold mt-4">100</p>
            </div>
            <div class="bg-white p-6 rounded-md text-center">
                <p class="text-sm font-semibold">total penjual terdaftar</p>
                <p class="text-2xl font-bold mt-4">100</p>
            </div>
        </div>

        <!-- Tombol Navigasi -->
        <div class="flex flex-wrap justify-center gap-6">
            <a href="#" class="bg-white px-6 py-3 rounded-md font-semibold shadow hover:shadow-lg transition">data pengguna</a>
            <a href="#" class="bg-white px-6 py-3 rounded-md font-semibold shadow hover:shadow-lg transition">data produk</a>
            <a href="#" class="bg-white px-6 py-3 rounded-md font-semibold shadow hover:shadow-lg transition">riwayat</a>
        </div>
    </div>
</x-app-layout>
