@extends('layout.master')

@section('content')
<div class="container py-5 mt-5">

    <!-- Judul Halaman -->
    <div class="row mb-5">
        <div class="col-md-12 text-center" data-aos="fade-down">
            <h1 class="fw-bold">Profil Desa Tubo Selatan</h1>
            <p class="lead text-muted">Sekilas tentang Visi, Misi, Sejarah, dan Struktur Organisasi Desa Tubo Selatan
            </p>
            <hr class="w-25 mx-auto border-3 border-primary">
        </div>
    </div>

    <!-- Visi & Misi -->
    <div class="row mb-5">
        <div class="col-md-12" data-aos="fade-up">
            <h2 class="mb-3 text-primary fw-bold">Visi</h2>
            <blockquote class="blockquote border-start border-4 ps-3 fst-italic text-dark">
                "Terwujudnya Desa Tubo Selatan yang mandiri, maju, berbudaya, dan sejahtera melalui pembangunan yang
                berkelanjutan serta partisipasi aktif masyarakat."
            </blockquote>

            <h2 class="mt-4 mb-3 text-primary fw-bold">Misi</h2>
            <ul class="list-group list-group-flush shadow-sm">
                <li class="list-group-item">Meningkatkan kualitas sumber daya manusia melalui pendidikan dan
                    kesehatan.</li>
                <li class="list-group-item">Mengembangkan potensi ekonomi desa berbasis pertanian, pariwisata, dan
                    UMKM.</li>
                <li class="list-group-item">Melestarikan adat, budaya, dan tradisi lokal.</li>
                <li class="list-group-item">Meningkatkan tata kelola pemerintahan desa yang transparan dan akuntabel.
                </li>
                <li class="list-group-item">Mendorong partisipasi masyarakat dalam setiap pembangunan desa.</li>
            </ul>
        </div>
    </div>

    <!-- Sejarah Desa -->
    <div class="row mb-5">
        <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
            <h2 class="text-primary fw-bold mb-3">Sejarah Desa</h2>
            <p class="text-muted">
                Desa Tubo Selatan didirikan pada tahun 1980 dan sejak saat itu terus berkembang menjadi salah satu desa
                dengan potensi besar di Kabupaten Mamuju. Desa ini dikenal dengan keindahan alamnya, seperti sawah
                hijau,
                sungai yang jernih, dan pemandangan pegunungan yang menawan.
            </p>
            <p class="text-muted">
                Selain alamnya, Desa Tubo Selatan juga kaya akan tradisi dan budaya. Festival Budaya Tubo Selatan yang
                rutin diadakan setiap tahun menjadi daya tarik tersendiri, mempertemukan masyarakat dengan berbagai
                pertunjukan seni, tarian tradisional, dan pameran kerajinan tangan.
            </p>
        </div>
    </div>

    <!-- Struktur Organisasi -->
    <div class="row mb-5">
        <div class="col-md-12" data-aos="fade-up">
            <h2 class="text-primary fw-bold mb-3">Bagan Desa</h2>
            <p class="text-muted">Berikut adalah struktur organisasi Pemerintahan Desa dan Badan Permusyawaratan Desa
                (BPD) Tubo Selatan:</p>
        </div>

        <!-- Struktur Pemerintahan Desa -->
        <div class="col-md-6 text-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="card shadow-lg border-0 hover-shadow mb-4">
                <a href="{{ asset('assets/img/about-5.webp') }}" data-bs-toggle="modal" data-bs-target="#imgModal"
                    data-img="{{ asset('assets/img/about-5.webp') }}">
                    <img src="{{ asset('assets/img/about-5.webp') }}" class="card-img-top rounded"
                        alt="Struktur Organisasi Pemerintahan Desa">
                </a>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Struktur Organisasi Pemerintahan Desa</h5>
                </div>
            </div>
        </div>

        <!-- Struktur BPD -->
        <div class="col-md-6 text-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="card shadow-lg border-0 hover-shadow mb-4">
                <a href="{{ asset('assets/img/about-5.webp') }}" data-bs-toggle="modal" data-bs-target="#imgModal"
                    data-img="{{ asset('assets/img/about-5.webp') }}">
                    <img src="{{ asset('assets/img/about-5.webp') }}" class="card-img-top rounded"
                        alt="Struktur Organisasi BPD">
                </a>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Struktur Organisasi BPD</h5>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal untuk zoom gambar -->
<div class="modal fade" id="imgModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <img id="modalImage" class="w-100 rounded shadow-lg" src="" alt="">
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    const imgModal = document.getElementById('imgModal');
    imgModal.addEventListener('show.bs.modal', function (event) {
        let button = event.relatedTarget;
        let imgSrc = button.getAttribute('data-img');
        let modalImage = document.getElementById('modalImage');
        modalImage.src = imgSrc;
    });
</script>
@endpush