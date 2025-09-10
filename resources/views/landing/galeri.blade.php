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
                data-bs-target="#galleryModal" data-img="{{ asset('assets/img/galeri/seminar1.jpg') }}"
                data-title="Seminar Kelurahan Mosso Dhua" data-date="12 Agustus 2025">
                <img src="{{ asset('assets/img/galeri/seminar1.jpg') }}" class="card-img-top rounded-top-4 gallery-img"
                    alt="Gotong Royong">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Seminar Kelurahan Mosso Dhua</h5>
                    <p class="text-muted">12 Agustus 2025</p>
                </div>
            </div>
        </div>
        <!-- Item Galeri -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 gallery-item" data-bs-toggle="modal"
                data-bs-target="#galleryModal" data-img="{{ asset('assets/img/galeri/seminar2.jpg') }}"
                data-title="Seminar Kelurahan Mosso Dhua" data-date="12 Agustus 2025">
                <img src="{{ asset('assets/img/galeri/seminar2.jpg') }}" class="card-img-top rounded-top-4 gallery-img"
                    alt="Gotong Royong">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Seminar Kelurahan Mosso Dhua</h5>
                    <p class="text-muted">12 Agustus 2025</p>
                </div>
            </div>
        </div>
        <!-- Item Galeri -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 gallery-item" data-bs-toggle="modal"
                data-bs-target="#galleryModal" data-img="{{ asset('assets/img/galeri/seminar3.jpg') }}"
                data-title="Seminar Kelurahan Mosso Dhua" data-date="12 Agustus 2025">
                <img src="{{ asset('assets/img/galeri/seminar3.jpg') }}" class="card-img-top rounded-top-4 gallery-img"
                    alt="Gotong Royong">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Seminar Kelurahan Mosso Dhua</h5>
                    <p class="text-muted">12 Agustus 2025</p>
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