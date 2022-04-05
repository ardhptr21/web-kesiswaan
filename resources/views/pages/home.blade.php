@extends('layouts.base')

@section('content')
    <section id="image-slider" class="splide">
        <div class="splide__progress">
            <div class="splide__progress-bar bg-blue-500"></div>
        </div>
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide relative">
                    <img src="/images/banners/Kesiswaan.JPG">
                    <div class="absolute flex justify-center items-center inset-0 w-full h-full">
                        <div class="bg-blue-500 p-5 gap-3 text-white text-center">
                            <h2 class="font-bold text-lg md:text-7xl">KESISWAAN</h2>
                            <p class="md:font-semibold text-xs md:text-base">SMK N 7 Semarang</p>
                        </div>
                    </div>
                </li>
                <li class="splide__slide relative">
                    <img src="/images/banners/Organisasi.jpg">
                    <div class="absolute flex justify-center items-center inset-0 w-full h-full">
                        <div class="bg-blue-500 p-5 gap-3 text-white text-center">
                            <h2 class="font-bold text-lg md:text-7xl">ORGANISASI</h2>
                            <p class="md:font-semibold text-xs md:text-base">OSIS & MPK</p>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <img src="/images/banners/Ekstrakurikuler.png">
                    <div class="absolute flex justify-center items-center inset-0 w-full h-full">
                        <div class="bg-blue-500 p-5 gap-5 text-white text-center">
                            <h2 class="font-bold text-lg md:text-7xl">EKSTRAKURIKULER</h2>
                            <p class="md:font-semibold text-xs md:text-base">Berprestasi, Berakhlak, Berkarakter, dan lain
                                lain
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </section>
@endsection
