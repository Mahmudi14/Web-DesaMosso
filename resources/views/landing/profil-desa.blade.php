@extends('layout.master')

@section('content')
<div class="container py-5 mt-5">

    <!-- Judul Halaman -->
    <div class="row mb-5">
        <div class="col-md-12 text-center" data-aos="fade-down">
            <h1 class="fw-bold">Profil Kelurahan Mosso Dhua</h1>
            <p class="lead text-muted">Sekilas tentang Visi, Misi, Sejarah, dan Struktur Organisasi Kelurahan Mosso Dhua
            </p>
            <hr class="w-25 mx-auto border-3 border-primary">
        </div>
    </div>

    <!-- Visi & Misi -->
    <div class="row mb-5">
        <div class="col-md-12" data-aos="fade-up">
            <h2 class="mb-3 text-primary fw-bold">Visi</h2>
            <blockquote class="blockquote border-start border-4 ps-3 fst-italic text-dark">
                "Terwujudnya Kelurahan Mosso Dhua yang mandiri, maju, berbudaya, dan sejahtera melalui pembangunan yang
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
                Kelurahan Mosso Dhua secara administratif berada di Kecamatan Sendana. Wilayah ini berbatasan langsung
                dengan Desa Bukit Samang di sebelah utara, Desa Kalumammang di sebelah timur, Desa Adolang Dhua dan
                Kelurahan Sirindu di sebelah selatan, serta Selat Makassar di sebelah barat. Luas wilayah Kelurahan
                Mosso Dhua berdasarkan pemetaan Data Desa Presisi tahun 2022 adalah 1.264,436 hektare, yang terbagi ke
                dalam beberapa lingkungan.
            </p>
            <p class="text-muted">
                Secara historis, Kelurahan Mosso Dhua awalnya merupakan bagian dari wilayah adat yang dihuni oleh
                masyarakat pesisir dan pertanian. Nama Mosso diyakini berasal dari bahasa lokal yang merujuk pada daerah
                subur dan dekat dengan jalur laut, sementara kata Dhua berarti "dua", menandakan bahwa wilayah ini
                merupakan kelanjutan atau pemekaran dari Mosso lama. Dalam perkembangannya, Mosso Dhua ditetapkan
                sebagai kelurahan di bawah Kecamatan Sendana. Masyarakatnya dikenal menjadikan laut dan pertanian
                sebagai penopang utama kehidupan, sambil tetap menjaga kearifan lokal dan beradaptasi dengan pembangunan
                modern.
            </p>
        </div>
    </div>

    <!-- Struktur Organisasi -->
    <div class="row mb-5">
        <div class="col-md-12" data-aos="fade-up">
            <h2 class="text-primary fw-bold mb-3">Bagan Desa</h2>
            <p class="text-muted">Berikut adalah struktur organisasi Kelurahan Mosso Dhua</p>
        </div>

        <!-- Struktur Pemerintahan Desa -->
        <div class="col-md-12 text-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="card shadow-lg border-0 hover-shadow mb-4">
                <a href="{{ asset('assets/img/strkutur-kelurahan.jpg') }}" data-bs-toggle="modal"
                    data-bs-target="#imgModal" data-img="{{ asset('assets/img/strkutur-kelurahan.jpg') }}">
                    <img src="{{ asset('assets/img/strkutur-kelurahan.jpg') }}" class="card-img-top rounded"
                        alt="Struktur Organisasi Pemerintahan Desa">
                </a>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Struktur Organisasi Pemerintahan Kelurahan</h5>
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