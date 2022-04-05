@extends('layouts.base')

@section('content')
    <section id="image-slider" class="splide">
        <div class="splide__progress">
            <div class="bg-blue-500 splide__progress-bar"></div>
        </div>
        <div class="splide__track">
            <ul class="splide__list">
                <li class="relative splide__slide">
                    <img src="/images/banners/Kesiswaan.JPG">
                    <div class="absolute inset-0 flex items-center justify-center w-full h-full">
                        <div class="gap-3 p-5 text-center text-white bg-blue-500">
                            <h2 class="text-lg font-bold md:text-7xl">KESISWAAN</h2>
                            <p class="text-xs md:font-semibold md:text-base">SMK N 7 Semarang</p>
                        </div>
                    </div>
                </li>
                <li class="relative splide__slide">
                    <img src="/images/banners/Organisasi.jpg">
                    <div class="absolute inset-0 flex items-center justify-center w-full h-full">
                        <div class="gap-3 p-5 text-center text-white bg-blue-500">
                            <h2 class="text-lg font-bold md:text-7xl">ORGANISASI</h2>
                            <p class="text-xs md:font-semibold md:text-base">OSIS & MPK</p>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <img src="/images/banners/Ekstrakurikuler.png">
                    <div class="absolute inset-0 flex items-center justify-center w-full h-full">
                        <div class="gap-5 p-5 text-center text-white bg-blue-500">
                            <h2 class="text-lg font-bold md:text-7xl">EKSTRAKURIKULER</h2>
                            <p class="text-xs md:font-semibold md:text-base">Berprestasi, Berakhlak, Berkarakter, dan lain
                                lain
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <x-basic.section>
        <x-basic.section-title title="Kesiswaan" subtitle="SMK Negeri 7 Semarang" />

        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-4">
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-medal fa-3x"></i>
                <h3 class="text-2xl">Prestasi</h3>
                <p class="text-gray-600">
                    Membantu pengembangan prestasi akademik maupun non-akademik melalui bakat dan
                    minat siswa
                </p>
            </div>
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-book fa-3x"></i>
                <h3 class="text-2xl">Tata Tertib</h3>
                <p class="text-gray-600">
                    Menegakkan kedisiplinan, ketertiban dan ketaatan
                </p>
            </div>
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-thumbs-up fa-3x"></i>
                <h3 class="text-2xl">Karakter</h3>
                <p class="text-gray-600">
                    Membentuk karakter siswa yang disiplin dan setia
                </p>
            </div>
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-people-group fa-3x"></i>
                <h3 class="text-2xl">Organisasi</h3>
                <p class="text-gray-600">
                    Melatih siswa menjadi seorang pemimpin melalui organisasi
                </p>
            </div>
        </div>
    </x-basic.section>

    <x-basic.section>
        <x-basic.section-title title="Struktur"></x-basic.section-title>

        <img src="/images/bagan/struktur.jpg" alt="gambar struktur">

        <div class="w-full mx-auto my-5 border-b">
            <h3 class="text-2xl font-medium text-gray-800">Apa itu Kesiswaan?</h3>
            <p class="my-3 text-gray-600">
                Kesiswaan adalah suatu sistem penataan atau pengaturan segala aspek aktivitas yang berkaitan dengan peserta
                didik dalam suatu lembaga, yaitu dari mulai masuknya peserta didik (siswa) sampai keluarnya peserta didik
                (siswa) tersebut dari suatu sekolah atau suatu lembaga pendidikan.
            </p>
        </div>

        <div>
            <x-accordion title="Tanggung jawab terhadap Tuhan Yang Maha Esa">
                Kesiswaan Melaksanakan tugas berpedoman kepada perintah-Nya dan meninggalkan larangan-Nya
            </x-accordion>
            <x-accordion title="Tanggung jawab revolusi">
                Kesiswaan berkonstribusi dalam memperjuangkan, mempertahankan, dan mengembangkan Negara Kesatuan Republik
                Indonesia
            </x-accordion>
            <x-accordion title="Tanggung jawab sosial">
                Kesiswaan bertanggung jawab kepada anggota masyarakat dengan cara ikut aktif bersama dalam kehidupan
                bermasyarakat dan bernegara
            </x-accordion>
            <x-accordion title="Tanggung jawab institusi/kelembagaan">
                Kesiswaan bertanggung jawab kepada organisasi dan kepada Kepala Sekolah
            </x-accordion>
            <x-accordion title="Tanggung jawab hati nurani">
                Kesiswaan bertanggung jawab kepada diri sendiri
            </x-accordion>
        </div>

        <div class="w-full mx-auto my-5 mb-10 border-b">
            <h3 class="text-2xl font-medium text-gray-800">Tugas Kesiswaan</h3>
            <p class="my-3 text-gray-600">
                Berikut adalah beberapa tugas dari Kesiswaan
            </p>
        </div>

        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-4">
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-calendar-days fa-3x"></i>
                <h4 class="text-gray-600">Menyusun program pembinaan kesiswaan</h4>
            </div>
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-people-robbery fa-3x"></i>
                <h4 class="text-gray-600">Melaksanakan bimbingan, pengarahan dan pengendalian kegiatan siswa</h4>
            </div>
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-people-roof fa-3x"></i>
                <h4 class="text-gray-600">Membina pengurus OSIS dalam berorganisasi</h4>
            </div>
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-calendar fa-3x"></i>
                <h4 class="text-gray-600">Menyusun program dan jadwal pembinaan secara berkala dan insidental</h4>
            </div>
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-users-between-lines fa-3x"></i>
                <h4 class="text-gray-600">Membina dan melaksanakan koordinasi pelaksanaan keamanan, kebersihan, ketertiban,
                    keindahan,
                    kerindangan, kekeluargaan, dan ketaqwaan</h4>
            </div>
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-bullseye fa-3x"></i>
                <h4 class="text-gray-600">Melaksanakan pemilihan calon siswa teladan dan calon siswa penerima bea siswa
                </h4>
            </div>
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-users-viewfinder fa-3x"></i>
                <h4 class="text-gray-600">Mengadakan pemilihan siswa untuk mewakili sekolah dalam kegiatan di luar sekolah
                </h4>
            </div>
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-arrows-down-to-people fa-3x"></i>
                <h4 class="text-gray-600">Mengatur mutasi siswa</h4>
            </div>
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-list-check fa-3x"></i>
                <h4 class="text-gray-600">Menyusun program kegiatan ekstrakurikuler</h4>
            </div>
            <div class="space-y-3 text-center">
                <i class="fa-solid fa-calendar-check fa-3x"></i>
                <h4 class="text-gray-600">Menyusun laporan pelaksanaan kesiswaan secara berkala</h4>
            </div>
        </div>
    </x-basic.section>

    <x-basic.section>
        <x-basic.section-title title="Ekstrakurikuler Unggulan" />

        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
            <x-card-ekskul img="/images/ekskul/ambalan.jpg" title="Ambalan" />
            <x-card-ekskul img="/images/ekskul/paskibra.jpg" title="Paskibra" />
            <x-card-ekskul img="/images/ekskul/dance.jpg" title="Dance" />
            <x-card-ekskul img="/images/ekskul/band.jpg" title="Band" />
            <x-card-ekskul img="/images/ekskul/tari.jpg" title="Tari" />
            <x-card-ekskul img="/images/ekskul/theater.jpg" title="Theater" />
            <x-card-ekskul img="/images/ekskul/karawitan.jpg" title="Karawitan" />
            <x-card-ekskul img="/images/ekskul/pmr.jpg" title="Palang Merah Remaja" />
        </div>
    </x-basic.section>
@endsection
