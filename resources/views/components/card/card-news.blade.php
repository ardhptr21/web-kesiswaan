    <div class="w-full mb-6 tracking-wide transition duration-300 bg-white shadow-md group hover:shadow-xl">
        <div class="h-64 overflow-hidden md:flex-shrink-0">
            <img src="{{ $img }}" alt="{{ str($title)->lower() }}"
                class="object-cover w-full h-full transition duration-300 transform group-hover:scale-110">
        </div>

        <div class="px-4 py-2 mt-2 space-y-5">
            <small><i class="fa-solid fa-clock"></i> {{ $date }}</small>
            <h2 class="text-2xl font-bold tracking-normal text-gray-800">{{ $title }}</h2>
            <p class="text-sm text-gray-700 ">{{ $short }}</p>
            <a href="{{ $link }}" class="inline-block text-sm text-blue-500 hover:underline">Read More</a>
        </div>
    </div>
