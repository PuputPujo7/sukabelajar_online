<header class="fixed w-full top-0 z-50">
    <nav class="z-100 relative mb-5" x-data="{ open: false, menu: false, lokasi: false }">
        <div class="relative z-100 bg-pink-200 shadow">
            <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    {{-- <div class="flex h-16 w-full px-2 lg:px-0 bg-purple-400"> --}}
                        <a class="flex-shrink-0" href="#">
                            <img class="block lg:hidden h-16 w-auto rounded bg-white" src="logo.jpg" alt="Logo">
                            <img class="hidden lg:block h-16 w-auto rounded bg-white" src="logo.jpg" alt="Logo">
                            {{-- @foreach ($logos as $logo)
                            <img class="block lg:hidden h-16 w-auto rounded bg-white" src={{ asset('storage/' . $logo->logo) }} alt="Logo">
                            <img class="hidden lg:block h-16 w-auto rounded bg-white" src={{ asset('storage/' . $logo->logo) }} alt="Logo">
                            @endforeach --}}

                        </a>


                        <div class="filters sm-hidden hidden lg:block lg:ml-2">
                            <div
                                class="mx-auto flex  w-full justify-center pt-4 sm:max-w-[640px] md:max-w-[768px] lg:max-w-[1024px] xl:max-w-[1280px] 2xl:max-w-[1536px]">
                                <div x-data="filters()"
                                    @reset="reset = $event.detail.reset, filterCounter = 0">
                                    <div class="flex flex-wrap items-center">
                                        <div class="flex items-start">

                                            <a href="/"
                                                class="px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                                HOME </a>
                                            <div class="mb-3" x-ref="myFilter" x-data="{
                                                show: false,
                                                counter: 0,
                                            }"
                                                @reset.window="counter = 0">
                                                <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                                                    x-on:click="open" type="button"
                                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium-semibold text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700">
                                                    TEMA
                                                    <span x-show="counter" x-text="counter"
                                                        class="bg-green-500 text-green-100 card-pills--counter ml-2 rounded-md px-2 py-1 text-sm"
                                                        style="display: none">0</span>
                                                    <i
                                                        class="fas fa-angle-down pl-3 text-stone-700 dark:text-stone-300"></i>
                                                </button>
                                                <div x-show="isOpen()" x-on:click.away="close"
                                                    class="w-auto shadow-stone-55 absolute z-10 divide-y divide-gray-100 overflow-hidden rounded-md bg-white shadow-lg "
                                                    data-popper-placement="bottom" style="display: none">
                                                    <ul class="text-gray-700" aria-labelledby="dropdownDefault">
                                                        <li x-data="{
                                                            checked: false
                                                        }" @reset.window="checked = false">
                                                            <a href="/haji"
                                                                class="group flex w-full items-center justify-between px-4 py-2 hover:bg-yellow-500 hover:text-stone-300">
                                                                MATEMATIKA </a>

                                                        </li>

                                                        <li x-data="{
                                                            checked: false
                                                        }" @reset.window="checked = false">

                                                            <a href="/umroh"
                                                                class="group flex w-full items-center justify-between px-4 py-2 hover:bg-yellow-500 hover:text-stone-300">
                                                                TIK </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="/galeri"
                                                class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                                GALERI </a>
                                            <a href="/profil"
                                                class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                                PROFIL </a>
                                            <a href="/kontak"
                                                class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                                KONTAK </a>
                                            <a href="/coba"
                                                class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                                COBA </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                function filters() {
                                    return {
                                        filterCounter: 0,
                                        reset: false,
                                        resetCounter: false,
                                        open() {
                                            this.show = true;
                                        },
                                        close() {
                                            this.show = false;
                                        },

                                        isOpen() {
                                            return this.show === true;
                                        },

                                        count() {
                                            this.show = false;
                                            this.checked = !this.checked;
                                            if (this.checked) {
                                                this.counter = this.counter + 1;
                                                this.filterCounter = this.filterCounter + 1;
                                            } else if (!this.checked) {
                                                this.counter = this.counter - 1;
                                                this.filterCounter = this.filterCounter - 1;
                                            }
                                        },
                                    };
                                }
                            </script>
                        </div>

                    {{-- </div> --}}

                    <div class="flex lg:hidden">
                        <button @click="menu=!menu"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-yellow-500 focus:outline-none focus:bg-yellow-700 focus:text-white transition duration-150 ease-in-out"
                            aria-label="Main menu" aria-expanded="false">
                            <svg class="block h-6 w-6 text-gray-900 hover:bg-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <svg class="hidden h-6 w-6 hover:bg-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
                    <div x-show="menu" class="block md:hidden bg-pink-200">

                        <div x-data="filters()" @reset="reset = $event.detail.reset, filterCounter = 0">

                            <a href="/"
                                class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                HOME </a>
                            <div class="mb-3" x-ref="myFilter" x-data="{
                                show: false,
                                counter: 0,
                            }"
                                @reset.window="counter = 0">
                                <button id="dropdownDefault" data-dropdown-toggle="dropdown" x-on:click="open"
                                    type="button"
                                    class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                    TEMA
                                    <span x-show="counter" x-text="counter"
                                        class="bg-green-500 text-green-100 card-pills--counter ml-2 rounded-md px-2 py-1 text-sm"
                                        style="display: none">0</span>
                                    <i class="fas fa-angle-down pl-3 text-stone-700 dark:text-stone-300"></i>
                                </button>
                                <div x-show="isOpen()" x-on:click.away="close"
                                    class="w-46 shadow-stone-55 absolute z-10 divide-y divide-gray-100 overflow-hidden rounded-md bg-white shadow-lg "
                                    data-popper-placement="bottom" style="display: none">
                                    <ul class="text-gray-700" aria-labelledby="dropdownDefault">
                                        <li x-data="{
                                            checked: false
                                        }" @reset.window="checked = false">
                                            <a href="/paket"
                                                class="group flex w-full items-center justify-between px-4 py-2 hover:bg-yellow-500 hover:text-stone-300">
                                                MATEMATIKA </a>

                                        </li>

                                        <li x-data="{
                                            checked: false
                                        }" @reset.window="checked = false">

                                            <a href="/paket"
                                                class="group flex w-full items-center justify-between px-4 py-2 hover:bg-yellow-500 hover:text-stone-300">
                                                TIK </a>
                                        </li>

                                    </ul>
                                </div>
                                <a href="/galeri"
                                    class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                    GALERI</a>
                                <a href="/profil"
                                    class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                    PROFIL</a>
                                <a href="/kontak"
                                    class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                    KONTAK</a>
                                <a href="/coba"
                                    class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                    COBA</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </nav>
</header>