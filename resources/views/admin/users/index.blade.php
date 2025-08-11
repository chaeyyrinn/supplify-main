<x-app-layout>
  <x-slot name="header">
        <h2 class="text-2xl font-bold text-[#000000] tracking-wide">
            Managemen pengguna
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 animate-fadeIn">
        <div class="bg-[#FAE3AC] shadow-lg rounded-xl p-6 border border-[#2D3250]">
            @if(session('success'))
                <div class="mb-4 text-[#2D3250] dark:text-[#FAE3AC] bg-[#FAE3AC]/40 dark:bg-[#2D3250]/50 p-3 rounded-lg shadow-sm border border-[#2D3250]/20">
                    ✅ {{ session('success') }}
                </div>
            @endif
<h3 class="text-lg font-semibold text-[#2D3250] mb-6 border-b border-[#2D3250]/30 pb-2">
                Daftar Pengguna
            </h3>

            <div class="bg-white dark:bg-[#2D3250] shadow-lg rounded-xl overflow-hidden border border-[#2D3250]/30 dark:border-[#FAE3AC]/30">
                <div class="p-6 text-[#2D3250] dark:text-[#FAE3AC]">
                    <div class="overflow-x-auto rounded-lg border border-[#2D3250]/20 dark:border-[#FAE3AC]/20">
                        <table class="min-w-full text-sm text-left border-collapse">
                            <thead class="bg-[#2D3250] text-[#FAE3AC] uppercase text-xs">
                                <tr>
                                    <th class="px-6 py-4">Nama</th>
                                    <th class="px-6 py-4">Email</th>
                                    <th class="px-6 py-4">Role</th>
                                    <th class="px-6 py-4">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-[#1f2236]">
                                @forelse ($users as $user)
                                    <tr class="border-b border-[#2D3250]/20 dark:border-[#FAE3AC]/20 hover:bg-[#FAE3AC]/30 dark:hover:bg-[#2D3250]/70 transition-colors">
                                        <td class="px-6 py-4 font-medium">{{ $user->name }}</td>
                                        <td class="px-6 py-4">{{ $user->email }}</td>
                                        <td class="px-6 py-4">
                                            <span class="px-3 py-1 rounded-full text-xs font-medium 
                                                {{ $user->role === 'admin' ? 'bg-[#2D3250] text-[#FAE3AC] border border-[#FAE3AC]' : 'bg-[#FAE3AC] text-[#2D3250] border border-[#2D3250]' }}">
                                                {{ ucfirst($user->role) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 space-x-2">
                                            <a href="{{ route('admin.users.show', $user->id) }}" class="px-3 py-1 rounded-lg text-sm font-medium border border-[#2D3250] text-[#2D3250] hover:bg-[#2D3250] hover:text-[#FAE3AC] transition dark:border-[#FAE3AC] dark:text-[#FAE3AC] dark:hover:bg-[#FAE3AC] dark:hover:text-[#2D3250]">
                                                Detail
                                            </a>

                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-3 py-1 rounded-lg text-sm font-medium border border-red-600 text-red-600 hover:bg-red-600 hover:text-white transition">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-[#2D3250]/70 dark:text-[#FAE3AC]/70">
                                            Belum ada user selain admin.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
