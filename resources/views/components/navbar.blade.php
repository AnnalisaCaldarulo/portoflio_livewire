<nav class="fixed top-0 left-0 right-0 z-10 bg-[#121212] bg-opacity-95 border border-[#33353F]">
    <div class="lg:py-4  flex flex-wrap items-center justify-between mx-auto p-8">
        <a href="{{ route('homepage') }}"
            class=" text-xl md:text-4xl font-semibold text-white hover:text-amber-500">portfolio</a>
        <div class="mobile-menu block md:hidden ">
            <button id="toggleButton" class="text-white"></button>
            {{-- {
                !navOpen ? (
                    <button onClick={() => setNavOpen(true)} class="text-slate-400 flex items-center px-3 py-2 border rounded border-slate-400 hover:text-white hover:border-white">
                        <Bars3Icon class="h-5 w-5" />
                    </button>
                ) : (
                    <button onClick={() => setNavOpen(false)} class="text-slate-400 flex items-center px-3 py-2 border rounded border-slate-400 hover:text-white hover:border-white">
                        <XMarkIcon class="h-5 w-5" />
                    </button>
                )
            } --}}
        </div>
        <div class="menu hidden md:block md:w-auto" id="navbar">
            <ul class="flex p-4 md:p-0 md:flex-row md:space-x-8 mt-0">
                <li>
                    <a href=""
                        class="block py-2 pl-3 pr-4  sm:text-xl rounded md:p-0 text-white hover:text-amber-500">About
                        me</a>
                </li>
                <li>
                    <a href=""
                        class="block py-2 pl-3 pr-4  sm:text-xl rounded md:p-0 text-white hover:text-amber-500">Experience</a>
                </li>
                <li>
                    <a href=""
                        class="block py-2 pl-3 pr-4  sm:text-xl rounded md:p-0 text-white hover:text-amber-500">Projects</a>
                </li>

            </ul>
        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden" id="mobile-menu">
        <ul class="flex flex-col py-4 items-center">

            <li>
                <a href=""
                    class="block py-2 pl-3 pr-4  sm:text-xl rounded md:p-0 text-white hover:text-amber-500">About
                    me</a>
            </li>
            <li>
                <a href=""
                    class="block py-2 pl-3 pr-4  sm:text-xl rounded md:p-0 text-white hover:text-amber-500">Experience</a>
            </li>
            <li>
                <a href=""
                    class="block py-2 pl-3 pr-4  sm:text-xl rounded md:p-0 text-white hover:text-amber-500">Projects</a>
            </li>
        </ul>
    </div>
</nav>
