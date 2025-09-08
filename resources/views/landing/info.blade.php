@extends('layout.master')

@section('content')
<div class="container py-5 mt-5">
    <h2 class="text-center mb-4 fw-bold">Informasi Desa Tubo Selatan</h2>
    <p class="text-center text-muted mb-5">Data umum terkait kondisi penduduk, wilayah, dan fasilitas Desa Tubo Selatan.
    </p>

    <!-- Statistik Utama -->
    <div class="row g-4 mb-5">
        <!-- Luas Wilayah -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 hover-shadow">
                <div class="card-body text-center">
                    <i class="bi bi-map text-primary display-4 mb-3"></i>
                    <h5 class="fw-bold">Luas Wilayah</h5>
                    <p class="fs-5">45,6 km²</p>
                </div>
            </div>
        </div>

        <!-- Jumlah Penduduk -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 hover-shadow">
                <div class="card-body text-center">
                    <i class="bi bi-people-fill text-success display-4 mb-3"></i>
                    <h5 class="fw-bold">Jumlah Penduduk</h5>
                    <p class="fs-5">3.214 Jiwa</p>
                </div>
            </div>
        </div>

        <!-- Jumlah KK -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 hover-shadow">
                <div class="card-body text-center">
                    <i class="bi bi-house-door-fill text-warning display-4 mb-3"></i>
                    <h5 class="fw-bold">Jumlah KK</h5>
                    <p class="fs-5">856 KK</p>
                </div>
            </div>
        </div>

        <!-- Jumlah Laki-laki -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 hover-shadow">
                <div class="card-body text-center">
                    <i class="bi bi-gender-male text-info display-4 mb-3"></i>
                    <h5 class="fw-bold">Jumlah Laki-laki</h5>
                    <p class="fs-5">1.620 Jiwa</p>
                </div>
            </div>
        </div>

        <!-- Jumlah Perempuan -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 hover-shadow">
                <div class="card-body text-center">
                    <i class="bi bi-gender-female text-danger display-4 mb-3"></i>
                    <h5 class="fw-bold">Jumlah Perempuan</h5>
                    <p class="fs-5">1.594 Jiwa</p>
                </div>
            </div>
        </div>

        <!-- Jumlah Lansia -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 hover-shadow">
                <div class="card-body text-center">
                    <i class="bi bi-heart-pulse-fill text-pink display-4 mb-3"></i>
                    <h5 class="fw-bold">Jumlah Lansia</h5>
                    <p class="fs-5">312 Jiwa</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik Statistik -->
    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card shadow-lg rounded-4 border-0">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Komposisi Gender</h5>
                    <canvas id="genderChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-lg rounded-4 border-0">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Struktur Umur</h5>
                    <canvas id="ageChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Dusun -->
    <div class="card shadow-lg rounded-4 border-0">
        <div class="card-body">
            <h5 class="fw-bold mb-3">Jumlah Penduduk per Dusun</h5>
            <div class="table-responsive">
                <table class="table table-striped align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama Dusun</th>
                            <th>Jumlah KK</th>
                            <th>Jumlah Jiwa</th>
                            <th>Laki-laki</th>
                            <th>Perempuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dusun Pesisir</td>
                            <td>120</td>
                            <td>500</td>
                            <td>260</td>
                            <td>240</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dusun Tengah</td>
                            <td>180</td>
                            <td>750</td>
                            <td>380</td>
                            <td>370</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Dusun Pegunungan</td>
                            <td>100</td>
                            <td>400</td>
                            <td>210</td>
                            <td>190</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Dusun Selatan</td>
                            <td>150</td>
                            <td>600</td>
                            <td>300</td>
                            <td>300</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Grafik Gender
    new Chart(document.getElementById('genderChart'), {
        type: 'doughnut',
        data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                data: [1620, 1594],
                backgroundColor: ['#0dcaf0', '#dc3545']
            }]
        }
    });

    // Grafik Struktur Umur
    new Chart(document.getElementById('ageChart'), {
        type: 'bar',
        data: {
            labels: ['Anak-anak', 'Usia Produktif', 'Lansia'],
            datasets: [{
                label: 'Jumlah Jiwa',
                data: [500, 2402, 312],
                backgroundColor: ['#ffc107', '#198754', '#6f42c1']
            }]
        }
    });
</script>
@endpush