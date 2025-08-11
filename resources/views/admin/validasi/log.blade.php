<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-[#000000] tracking-wide">
            Log Validasi Produk
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 animate-fadeIn">
        <div class="bg-[#FAE3AC] shadow-lg rounded-xl p-6 border border-[#2D3250]">
            @if(session('success'))
                <div class="mb-4 text-[#2D3250] bg-green-100 p-3 rounded-lg shadow-sm flex items-center gap-2">
                    ✅ {{ session('success') }}
                </div>
            @elseif(session('error'))
                <div class="mb-4 text-[#2D3250] bg-red-100 p-3 rounded-lg shadow-sm flex items-center gap-2">
                    ❌ {{ session('error') }}
                </div>
            @endif

            <h3 class="text-lg font-semibold text-[#2D3250] mb-6 border-b border-[#2D3250]/30 pb-2">
                Daftar Produk yang Sudah Divalidasi
            </h3>

            @if($produk->isEmpty())
                <p class="text-[#2D3250]/70 italic">Belum ada produk yang divalidasi.</p>
            @else
                <div class="overflow-x-auto rounded-lg border border-[#2D3250]/30">
                    <table class="min-w-full text-sm text-left border-collapse">
                        <thead class="bg-[#2D3250] text-[#FAE3AC] uppercase text-xs">
                            <tr>
                                <th class="px-4 py-3">#</th>
                                <th class="px-4 py-3">Nama Produk</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Lokasi</th>
                                <th class="px-4 py-3">Tanggal</th>
                                <th class="px-4 py-3">Foto</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach($produk as $item)
                                <tr class="hover:bg-[#FAE3AC]/40 transition-colors">
                                    <td class="px-4 py-3 text-[#2D3250]">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3 font-medium text-[#2D3250]">{{ $item->nama_produk }}</td>
                                    <td class="px-4 py-3">
                                        @if($item->status === 'approved')
                                            <span class="inline-flex items-center gap-1 text-[#2D3250] bg-[#FAE3AC] px-3 py-1 rounded-full text-xs font-medium border border-[#2D3250]">
                                                ✔ Disetujui
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 text-[#FAE3AC] bg-[#2D3250] px-3 py-1 rounded-full text-xs font-medium border border-[#FAE3AC]">
                                                ✖ Ditolak
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3 text-[#2D3250]">{{ $item->lokasi }}</td>
                                    <td class="px-4 py-3 text-[#2D3250]/80">{{ $item->updated_at->format('d M Y - H:i') }}</td>
                                    <td class="px-4 py-3">
                                        <img src="{{ asset('storage/' . $item->foto) }}" 
                                             alt="{{ $item->nama_produk }}"
                                             class="w-20 h-20 object-cover rounded-lg border border-[#2D3250] shadow-sm">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
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
