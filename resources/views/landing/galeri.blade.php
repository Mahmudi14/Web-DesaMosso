@extends('layout.master')

@section('content')
<div class="container py-5 mt-5">
    <h2 class="text-center mb-4 fw-bold">Galeri Kegiatan Desa Tubo Selatan</h2>
    <p class="text-center text-muted mb-5">Dokumentasi kegiatan desa dalam berbagai bidang pembangunan, budaya, dan
        sosial.</p>

    <div class="row g-4">
        <!-- Item Galeri -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 gallery-item" data-bs-toggle="modal"
                data-bs-target="#galleryModal" data-img="{{ asset('assets/img/galeri/bulllying.jpg') }}"
                data-title="Sosialisasi Anti Bullying" data-date="12 Agustus 2025">
                <img src="{{ asset('assets/img/galeri/bulllying.jpg') }}" class="card-img-top rounded-top-4 gallery-img"
                    alt="Gotong Royong">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Sosialisasi Anti Bullying</h5>
                    <p class="text-muted">12 Agustus 2025</p>
                </div>
            </div>
        </div>
        <!-- Item Galeri -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 gallery-item" data-bs-toggle="modal"
                data-bs-target="#galleryModal" data-img="{{ asset('assets/img/galeri/lomba.jpg') }}"
                data-title="Kegiatan HUT 80" data-date="05 Juli 2025">
                <img src="{{ asset('assets/img/galeri/lomba.jpg') }}" class="card-img-top rounded-top-4 gallery-img"
                    alt="Gotong Royong">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Kegiatan HUT 80</h5>
                    <p class="text-muted">05 Juli 2025</p>
                </div>
            </div>
        </div>
        <!-- Item Galeri -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 gallery-item" data-bs-toggle="modal"
                data-bs-target="#galleryModal" data-img="{{ asset('assets/img/galeri/phbs.jpg') }}"
                data-title="Sosialisasi PHBS" data-date="17 Agustus 2025">
                <img src="{{ asset('assets/img/galeri/phbs.jpg') }}" class="card-img-top rounded-top-4 gallery-img"
                    alt="Gotong Royong">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Sosialisasi PHBS</h5>
                    <p class="text-muted">17 Agustus 2025</p>
                </div>
            </div>
        </div>
        <!-- Item Galeri -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 gallery-item" data-bs-toggle="modal"
                data-bs-target="#galleryModal" data-img="{{ asset('assets/img/galeri/sd.jpg') }}"
                data-title="Bimbingan Belajar SD" data-date="1 Agustus 2025">
                <img src="{{ asset('assets/img/galeri/sd.jpg') }}" class="card-img-top rounded-top-4 gallery-img"
                    alt="Gotong Royong">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Bimbingan Belajar SD</h5>
                    <p class="text-muted">1 Agustus 2025</p>
                </div>
            </div>
        </div>
        <!-- Item Galeri -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 gallery-item" data-bs-toggle="modal"
                data-bs-target="#galleryModal" data-img="{{ asset('assets/img/galeri/Rapat.jpg') }}"
                data-title="Rapat Persiapan Kegiatan Lomba HUT 80" data-date="15 Agustus 2025">
                <img src="{{ asset('assets/img/galeri/Rapat.jpg') }}" class="card-img-top rounded-top-4 gallery-img"
                    alt="Gotong Royong">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Rapat Persiapan Kegiatan Lomba HUT 80</h5>
                    <p class="text-muted">15 Agustus 2025</p>
                </div>
            </div>
        </div>
        <!-- Item Galeri -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 gallery-item" data-bs-toggle="modal"
                data-bs-target="#galleryModal" data-img="{{ asset('assets/img/galeri/keungan.jpg') }}"
                data-title="SOsialisasi Keuangan" data-date="28 September 2025">
                <img src="{{ asset('assets/img/galeri/keungan.jpg') }}" class="card-img-top rounded-top-4 gallery-img"
                    alt="Gotong Royong">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Sosialisasi Keuangan</h5>
                    <p class="text-muted">28 September 2025</p>
                </div>
            </div>
        </div>

        <!-- (copy item galeri lainnya seperti sebelumnya) -->
    </div>
</div>

<!-- Modal Preview Gambar -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow-lg">
            <div class="modal-body p-0">
                <img id="modalGalleryImage" src="" class="img-fluid rounded-top-4" alt="Preview">
                <div class="p-3 text-center">
                    <h5 id="modalGalleryTitle" class="fw-bold mb-1"></h5>
                    <p id="modalGalleryDate" class="text-muted mb-0"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Membatasi ukuran gambar agar lebih kecil tapi tetap responsif */
    .gallery-img {
        max-height: 180px;
        /* batas tinggi gambar */
        object-fit: cover;
        /* crop otomatis biar tetap proporsional */
    }
</style>
@endpush

@push('scripts')
<script>
    const galleryModal = document.getElementById('galleryModal');
    galleryModal.addEventListener('show.bs.modal', function (event) {
        const card = event.relatedTarget;
        const imgSrc = card.getAttribute('data-img');
        const title = card.getAttribute('data-title');
        const date = card.getAttribute('data-date');

        document.getElementById('modalGalleryImage').src = imgSrc;
        document.getElementById('modalGalleryTitle').innerText = title;
        document.getElementById('modalGalleryDate').innerText = date;
    });
</script>
@endpush