<div @click.away="open = false" class="relative" x-data="{ open: false }">
    <button @click="open = !open"
        class="flex flex-row text-gray-900 items-center w-full px-4 py-2 mt-2 text-md font-semibold text-left rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-blue-500 transition duration-300"
        :class="{'text-blue-500': open}">
        <span>{{ $text }}</span>
        <i :class="{'rotate-180': open, 'rotate-0': !open}"
            class="inline origin-center w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 fa-solid fa-angle-down"></i>
    </button>
    <div x-show="open" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="block md:absolute right-0 w-full bg-white md:max-w-xs md:w-screen mt-2 origin-top-right">
        <div class="bg-white">
            <div class="grid grid-cols-1 border-t-4 bg-white md:mx-0 mx-4 border-blue-600">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
