<nav class="bg-[#FAE3AC] text-black px-8 py-4 rounded-t-2xl shadow flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center gap-3">
        <img src="{{ asset('image/logo-supplify.png') }}" alt="Supplify Logo" class="h-[70px] w-[40x]">
    
    </div>

    <!-- Menu -->
    <div class="flex items-center gap-10 font-medium">
        <a href="{{ route('pembeli.dashboard') }}" class="hover:text-blue-700 transition">Dashboard</a>
        <a href="{{ route('pembeli.marketplace.index') }}" class="hover:text-blue-700 transition">Marketplace</a>
        
        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="hover:text-blue-700 transition">
                Logout
            </button>
        </form>
    </div>
</nav>
