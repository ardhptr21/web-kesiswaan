<div class="w-full text-gray-700 bg-white shadow-lg">
    <div x-data="{ open: false }"
        class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="flex flex-row items-center justify-between p-4">
            <div class="flex justify-center items-center gap-5">
                <img src="/images/logos/logo.png" alt="logo" class="w-10 md:w-16">
                <a href="/"
                    class="text-base md:text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg">Kesiswaan
                    <span class="hidden lg:inline">SMK N 7 Semarang</span></a>
            </div>
            <button class="rounded-lg md:hidden" @click="open = !open">
                <i class="fa-solid fa-bars" x-show="!open"></i>
                <i class="fa-solid fa-xmark fa-xl" x-show="open"></i>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}"
            class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">

            <x-nav-item text="Home" link="/" />

            <x-nav-dropdown text="Organisasi">
                <x-nav-dropdown-item text="OSIS" />
                <x-nav-dropdown-item text="MPK" />
            </x-nav-dropdown>

            <x-nav-dropdown text="Ekstrakurikuler">
                <x-nav-dropdown-item text="Alam" />
                <x-nav-dropdown-item text="Bahasa" />
                <x-nav-dropdown-item text="Bela Diri" />
                <x-nav-dropdown-item text="Bela Negara" />
                <x-nav-dropdown-item text="Kemanusiaan" />
                <x-nav-dropdown-item text="Keagamaan" />
                <x-nav-dropdown-item text="Olahraga" />
                <x-nav-dropdown-item text="Pendidikan" />
                <x-nav-dropdown-item text="Seni" />
            </x-nav-dropdown>
        </nav>
    </div>
</div>
