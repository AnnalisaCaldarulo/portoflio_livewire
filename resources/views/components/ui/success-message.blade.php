@if (session('success'))
    <div class="relative group mt-5 border-2 border-white rounded-lg w-full">
        <div class="absolute -inset-1 bg-gradient-to-r from-green-500 to-yellow-400 rounded-lg blur  text-center">
        </div>
        <div class="relative px-7 py-6 bg-[#121212]  rounded-lg leading-none  ">
            <div class="space-y-2">
                <p class="text-white text-center font-bold">{{ session('success') }}</p>
            </div>
        </div>
    </div>
@endif
