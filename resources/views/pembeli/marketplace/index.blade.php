<x-app-layout>
    <div class="py-12 bg-[#F5F7FA] dark:bg-[#1E1E2F] min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-[#2D3250] dark:bg-[#2D3250] rounded-xl shadow-xl p-8 text-white">
                <h1 class="text-3xl font-bold mb-6 text-center">Marketplace</h1>

                @if ($produk->isEmpty())
                    <p class="text-center text-lg text-gray-300">Tidak ada produk yang tersedia saat ini.</p>
                @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach ($produk as $item)
                            <div class="bg-white dark:bg-[#1E1E2F] rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition flex flex-col">
                                
                                <!-- Gambar produk + badge -->
                                <div class="relative h-48 overflow-hidden">
                                    <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}"
                                        class="w-full h-full object-cover">
                                </div>

                                <!-- Info produk -->
                                <div class="p-3 flex flex-col flex-1">
                                    <h2 class="text-sm font-semibold text-[#2D3250] dark:text-white mb-1 leading-snug">
                                        {{ $item->nama }}
                                    </h2>

                                    <p class="text-xs text-gray-600 dark:text-gray-300 mb-2 line-clamp-2">
                                        {{ Str::limit($item->deskripsi, 60) }}
                                    </p>

                                    <!-- Harga di bawah -->
                                    <div class="mt-auto">
                                        <p class="text-lg font-bold text-[#2D3250] dark:text-[#FAE3AC]">
                                            Rp {{ number_format($item->harga, 0, ',', '.') }}
                                        </p>

                                        <a href="{{ route('pembeli.marketplace.show', $item->id) }}"
                                            class="mt-2 block w-full text-center bg-[#FAE3AC] hover:bg-yellow-300 text-[#2D3250] font-semibold py-2 rounded">
                                            Beli
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
s