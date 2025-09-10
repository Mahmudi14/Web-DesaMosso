@extends('layout.master')
@push('styles')
<style>
    .card {
        background: #ffffff;
        border-radius: 1.2rem;
    }

    .card-body h5 {
        font-size: 1.2rem;
        font-weight: 700;
    }

    table thead {
        border-radius: 12px 12px 0 0;
    }

    table tbody tr {
        transition: 0.3s;
    }

    table tbody tr:hover {
        background-color: rgba(13, 110, 253, 0.1);
        transform: scale(1.01);
    }

    table td,
    table th {
        padding: 14px 16px;
    }
</style>
@endpush
@section('content')
<div class="container py-5 mt-5">
    <h2 class="text-center mb-4 fw-bold">Informasi Kelurahan Mosso Dhua</h2>
    <p class="text-center text-muted mb-5">Data umum terkait kondisi penduduk, wilayah, dan fasilitas Kelurahan
        Mosso Dhua
    </p>

    <!-- Statistik Utama -->
    <div class="row g-4 mb-5">
        <!-- Luas Wilayah -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 hover-shadow">
                <div class="card-body text-center">
                    <i class="bi bi-map text-primary display-4 mb-3"></i>
                    <h5 class="fw-bold">Luas Wilayah</h5>
                    <p class="fs-5">1.264,436 hektare</p>
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
                    <p class="fs-5">445 KK</p>
                </div>
            </div>
        </div>

        <!-- Jumlah Laki-laki -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 hover-shadow">
                <div class="card-body text-center">
                    <i class="bi bi-gender-male text-info display-4 mb-3"></i>
                    <h5 class="fw-bold">Jumlah Laki-laki</h5>
                    <p class="fs-5">876 Jiwa</p>
                </div>
            </div>
        </div>

        <!-- Jumlah Perempuan -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 hover-shadow">
                <div class="card-body text-center">
                    <i class="bi bi-gender-female text-danger display-4 mb-3"></i>
                    <h5 class="fw-bold">Jumlah Perempuan</h5>
                    <p class="fs-5">866 Jiwa</p>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Grafik Pendidikan -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card shadow-lg rounded-4 border-0">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Tingkat Pendidikan Penduduk</h5>
                    <canvas id="educationChart"></canvas>
                </div>
            </div>
        </div>
    </div>


    <!-- Tabel Dusun -->
    <div class="card shadow-lg rounded-4 border-0">
        <div class="card-body">
            <h5 class="fw-bold mb-4 text-primary">
                <i class="bi bi-geo-alt-fill me-2"></i> Luas Wilayah per Lingkungan
            </h5>
            <div class="table-responsive">
                <table class="table table-hover table-borderless align-middle">
                    <thead class="bg-gradient bg-primary text-white rounded-top">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lingkungan</th>
                            <th scope="col">Luas Wilayah (Ha)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Apoleang Utara</td>
                            <td>172,244</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Apoleang Selatan</td>
                            <td>65,373</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mosso Malayu</td>
                            <td>18,486</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Mosso</td>
                            <td>66,204</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Kampung Lele</td>
                            <td>78,493</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mandalle</td>
                            <td>444,813</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Pumbalar</td>
                            <td>351,746</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Tammalupu</td>
                            <td>67,075</td>
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
                data: [876, 866],
                backgroundColor: ['#0dcaf0', '#dc3545']
            }]
        }
    });

    // Grafik Struktur Umur
    new Chart(document.getElementById('ageChart'), {
        type: 'bar',
        data: {
            labels: ['Usia Produktif', 'Usia Non Produktif'],
            datasets: [{
                label: 'Jumlah Jiwa',
                data: [1069, 358],
                backgroundColor: ['#198754', '#6f42c1']
            }]
        }
    });

     // Grafik Tingkat Pendidikan
    new Chart(document.getElementById('educationChart'), {
        type: 'pie',
        data: {
            labels: [
                'Tidak Punya Ijazah',
                'SD/Sederajat',
                'SMP/Sederajat',
                'SMA/Sederajat',
                'D-1/D-2/D-3',
                'D-4/S-1',
                'S-2'
            ],
            datasets: [{
                data: [518, 482, 242, 331, 39, 127, 3],
                backgroundColor: [
                    '#6c757d',
                    '#ffc107',
                    '#0dcaf0',
                    '#198754',
                    '#fd7e14',
                    '#0d6efd',
                    '#dc3545'
                ]
            }]
        }
    });
</script>
@endpush