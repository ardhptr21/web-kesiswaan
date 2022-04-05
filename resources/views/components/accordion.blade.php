<div class="transition" :class="{'bg-blue-50': open, 'hover:bg-gray-100': !open}" x-data="{ open: false }"
    @click.away="open = false">
    <div class="flex items-center h-16 px-5 space-x-5 transition cursor-pointer" @click="open = !open">
        <i class="fas" :class="{'fa-plus': !open, 'fa-minus': open}"></i>
        <h3 class="text-lg font-semibold">{{ $title }}</h3>
    </div>
    <div class="px-5 pt-0 overflow-hidden transition-all duration-500 ease-in-out max-h-0" :class="{'max-h-96': open}">
        <div class="pb-5">
            <p class="leading-6 pl-9">
                {{ $slot }}
            </p>
        </div>
    </div>
</div>
