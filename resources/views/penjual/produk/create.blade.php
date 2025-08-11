<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-[#000000]">Ajukan Produk</h2>
    </x-slot>

    <div class="max-w-2xl mx-auto py-10 px-6">
        <div class="bg-[#ffffff] shadow-lg rounded-xl p-8 border border-[#FAE3AC]/30">
            <form action="{{ route('penjual.produk.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Nama Produk -->
                <div>
                    <label class="block text-[#000000] font-medium mb-1">Nama Produk</label>
                    <input type="text" name="nama_produk" 
                        class="w-full border border-black/40 bg-transparent text-white px-4 py-2 rounded-lg placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#FFDE63] focus:border-[#FFDE63] transition">
                </div>

                <!-- Deskripsi -->
                <div class="block">
                    <label class="block text-[#000000] font-medium mb-1">Deskripsi</label>
                    <textarea name="deskripsi" rows="4"
                        class="w-full border border-black/40 bg-transparent text-white px-4 py-2 rounded-lg placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#FFDE63] focus:border-[#FFDE63] transition"></textarea>
                </div>

                <!-- Harga -->
                <div>
                    <label class="block text-[#000000] font-medium mb-1">Harga</label>
                    <input type="number" name="harga" min="0"
                        class="w-full border border-black/40 bg-transparent text-white px-4 py-2 rounded-lg placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#FFDE63] focus:border-[#FFDE63] transition">
                </div>

                <!-- Foto -->
                <div>
                    <label class="block text-[#000000] font-medium mb-1">Foto</label>
                    <input type="file" name="foto"
                        class="w-full text-white border border-black/40 rounded-lg p-2 bg-transparent file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-[#FFDE63] file:text-[#0A1B2F] hover:file:bg-[#e6c94f] cursor-pointer">
                </div>

                <!-- Stok -->
                <div>
                    <label class="block text-[#000000] font-medium mb-1">Stok</label>
                    <input type="number" name="stok"
                        class="w-full border border-black/40 bg-transparent text-white px-4 py-2 rounded-lg placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#FFDE63] focus:border-[#FFDE63] transition">
                </div>

                <!-- Lokasi -->
                <div>
                    <label class="block text-[#000000] font-medium mb-1">Lokasi</label>
                    <input type="text" name="lokasi"
                        class="w-full border border-black/40 bg-transparent text-white px-4 py-2 rounded-lg placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#FFDE63] focus:border-[#FFDE63] transition">
                </div>

                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit" 
                        class="bg-[#FFDE63] hover:bg-[#e6c94f] text-[#0A1B2F] px-6 py-2 rounded-lg font-semibold shadow-md transition">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
