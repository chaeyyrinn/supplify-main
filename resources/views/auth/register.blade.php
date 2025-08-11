<x-guest-layout>
   
        <div class="flex flex-col md:flex-row rounded-2xl shadow-2xl overflow-hidden w-full max-w-5xl h-full">
            
          <!-- Left Image Section -->
            <div class="md:w-1/2 w-full relative">
                <img src="{{ asset('image/login-image.jpg') }}" alt="Login Image" class="w-full h-full object-cover" />
                <div class="absolute top-5 left-5">
                    <img src="{{ asset('images/suplify-logo.png') }}" alt="Suplify Logo" class="w-24">
                </div>
            </div>


            <!-- Form -->
            <div class="md:w-1/2 w-full bg-[#1f2544] text-white flex flex-col justify-center p-12">
                <h2 class="text-3xl font-bold mb-8 text-white text-center">Create an account</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mb-4">
                        <input
                            id="name"
                            name="name"
                            type="text"
                            value="{{ old('name') }}"
                            required
                            placeholder="Name"
                            class="w-[400px] h-[55px] ml-2 px-4 py-3 rounded-lg bg-[#2f365e] border border-gray-600 text-white font-semibold placeholder-white focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        />
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400" />
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            required
                            placeholder="Email"
                            class="w-[400px] h-[55px] ml-2 px-4 py-3 rounded-lg bg-[#2f365e] border border-gray-600 text-white font-semibold placeholder-white focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <input
                            id="password"
                            name="password"
                            type="password"
                            required
                            placeholder="Password"
                            class="w-[400px] h-[55px] ml-2 px-4 py-3 rounded-lg bg-[#2f365e] border border-gray-600 text-white font-semibold placeholder-white focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-4">
                        <input
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            required
                            placeholder="Confirm Password"
                            class="w-[400px] h-[55px] ml-2 px-4 py-3 rounded-lg bg-[#2f365e] border border-gray-600 text-white font-semibold placeholder-white focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400" />
                    </div>

                    <!-- Role -->
                    <div class="mb-6">
                        <select
                            id="role"
                            name="role"
                            required
                            class="w-[400px] h-[55px] ml-2 px-4 py-3 rounded-lg bg-[#2f365e] border border-gray-600 text-white font-semibold focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        >
                            <option value="">Role</option>
                            <option value="pembeli" {{ old('role') == 'pembeli' ? 'selected' : '' }}>Pembeli</option>
                            <option value="penjual" {{ old('role') == 'penjual' ? 'selected' : '' }}>Penjual</option>
                        </select>
                        <x-input-error :messages="$errors->get('role')" class="mt-2 text-red-400" />
                    </div>

                    <!-- Submit -->
                    <div class="mb-4">
                        <button
                            type="submit"
                            class="w-[400px] h-[55px] ml-2 bg-[#fce3ac] hover:bg-[#fcd18d] text-black font-bold py-3 px-4 rounded-lg transition duration-300"
                        >
                            Register
                        </button>
                    </div>

                    <!-- Login link -->
                    <div class="text-sm text-center text-white">
                        Already Registered? 
                        <a href="{{ route('login') }}" class="text-yellow-400 hover:text-yellow-300 font-semibold underline ml-1">
                            Login here
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
