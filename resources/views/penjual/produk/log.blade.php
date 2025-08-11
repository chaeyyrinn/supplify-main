<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-[#000000] tracking-wide">
            Riwayat Produk
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 animate-fadeIn">
        
        {{-- Header --}}
        <div class="bg-[#2D3250] text-[#FAE3AC] p-6 rounded-t-lg shadow-md">
            <h2 class="text-xl font-bold">Log Produk</h2>
        </div>

        {{-- Konten --}}
        <div class="bg-white shadow-lg rounded-b-lg overflow-x-auto border border-[#2D3250]/30">
            <div class="p-4 flex justify-between items-center">
                <form action="{{ route('penjual.produk.log') }}" method="GET" class="flex items-center gap-2">
                    <input type="text" name="search" placeholder="Cari produk..."
                        class="px-4 py-2 rounded-lg bg-white text-[#2D3250] border border-[#2D3250]/40 focus:outline-none focus:ring-2 focus:ring-[#2D3250]" />
                    <button type="submit"
                        class="bg-[#2D3250] hover:bg-[#1f233a] text-[#FAE3AC] px-4 py-2 rounded-lg font-semibold transition">
                        🔍
                    </button>
                </form>
            </div>

            {{-- Tabel --}}
            <table class="min-w-full table-auto text-sm text-left">
                <thead class="bg-[#FAE3AC] text-[#2D3250] uppercase text-xs">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama Produk</th>
                        <th class="px-4 py-3">Deskripsi</th>
                        <th class="px-4 py-3">Foto Produk</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produks as $index => $produk)
                        <tr class="border-t hover:bg-[#FAE3AC]/30 transition">
                            <td class="px-4 py-3 text-[#2D3250]">{{ $index + 1 }}</td>
                            <td class="px-4 py-3 font-medium text-[#2D3250]">{{ $produk->nama_produk }}</td>
                            <td class="px-4 py-3 text-[#2D3250]/80 max-w-[200px] truncate">
                                {{ $produk->deskripsi }}
                            </td>
                            <td class="px-4 py-3">
                                <img src="{{ asset('storage/' . $produk->foto) }}" 
                                     alt="{{ $produk->nama_produk }}"
                                     class="w-16 h-16 object-cover rounded-lg border border-[#2D3250] shadow-sm mx-auto" />
                            </td>
                            <td class="px-4 py-3">
                                @if ($produk->status === 'pending')
                                    <span class="text-yellow-600 font-semibold">Pending</span>
                                @elseif ($produk->status === 'approved')
                                    <span class="text-green-600 font-semibold">Approved</span>
                                @elseif ($produk->status === 'rejected')
                                    <span class="text-red-600 font-semibold">Rejected</span>
                                @else
                                    <span class="text-gray-500">-</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 max-w-xs text-sm">
                                @if ($produk->status === 'pending')
                                    <p class="text-yellow-700">Produk anda saat ini masih menunggu validasi oleh admin.</p>
                                @elseif ($produk->status === 'approved')
                                    <p class="text-green-700">Produk anda sudah disetujui dan akan tampil di halaman utama.</p>
                                @elseif ($produk->status === 'rejected')
                                    <p class="text-red-700">Produk anda ditolak, mohon periksa dan revisi data produk anda.</p>
                                @else
                                    <p class="text-gray-500">Status tidak diketahui.</p>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center px-4 py-6 text-gray-500">
                                Belum ada produk yang diajukan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 0.4s ease-in-out;
        }
    </style>
</x-app-layout>
