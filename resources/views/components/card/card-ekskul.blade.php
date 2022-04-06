<div class="relative w-full duration-500 bg-white shadow group hover:shadow-xl">
    <div class="overflow-hidden h-60">
        <img class="w-full transition duration-300 transform group-hover:scale-110" src="{{ $img }}"
            alt="{{ str($title)->lower() }}" />
    </div>
    <div class="text-center py-14">
        <h3 class="font-sans text-2xl font-semibold text-gray-700 hover:text-gray-900">{{ $title }}</h3>
    </div>

    <div class="absolute bottom-0 w-full h-1 transition duration-300 bg-blue-500 opacity-0 group-hover:opacity-100">
    </div>
</div>
