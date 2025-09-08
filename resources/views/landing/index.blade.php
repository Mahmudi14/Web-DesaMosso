@extends('layout.master')
@push('styles')
<style>
  .official-card {
    background-color: #ffffff;
    border: none;
    border-radius: 16px;
    box-shadow: 0 10px 30px -15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    padding: 20px;
    width: 100%;
    text-align: center;
    display: flex;
    flex-direction: column;
  }

  .official-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px -10px rgba(0, 0, 0, 0.15);
  }

  .official-card__avatar-wrapper {
    margin-top: 20px;
    flex-shrink: 0;
  }

  .official-card__avatar {
    width: 200px;
    height: 300px;
    border-radius: 10%;
    border: 5px solid #ffffff;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    object-fit: cover;
  }

  .official-card__name {
    font-size: 1.2rem;
    font-weight: 600;
    color: #333;
    margin-top: 15px;
  }

  .official-card__position {
    color: #6c757d;
    font-weight: 500;
  }

  .btn-view-structure {
    padding: 12px 28px;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .btn-view-structure:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(var(--bs-primary-rgb), 0.3);
  }

  .gallery-card {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .gallery-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
  }

  .gallery-img {
    width: 100%;
    height: 220px;
    object-fit: cover;
  }

  .gallery-content {
    padding: 15px;
  }

  .gallery-title {
    font-size: 1.1rem;
    font-weight: 600;
    color: #333;
  }

  .gallery-date {
    color: #6c757d;
    font-size: 0.9rem;
    margin-top: 4px;
  }

  .btn-primary {
    padding: 10px 25px;
    font-weight: 600;
  }

  .hero-image .bg-shape {
    width: 420px;
    height: 420px;
    background: linear-gradient(135deg, #007bff33, #00c4ff33);
    z-index: 1;
  }

  .hero-image img {
    position: relative;
    z-index: 2;
  }

  .hero-img-animate {
    animation: floatImg 5s ease-in-out infinite;
  }

  @keyframes floatImg {
    0% {
      transform: translateY(0px);
    }

    50% {
      transform: translateY(-15px);
    }

    100% {
      transform: translateY(0px);
    }
  }
</style>
@endpush
@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
          <h1 class="mb-4">
            Selamat Datang di Website Resmi <br>
            <span class="accent-text">Desa Mosso Dhua</span>
          </h1>

          <p class="mb-4 mb-md-5 text-muted">
            Media informasi, komunikasi, dan transparansi desa untuk masyarakat yang lebih maju, sejahtera, dan berdaya
            saing.
          </p>

          <div class="hero-buttons">
            <a href="" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
            {{-- <a href="https://youtu.be/LQOXB1ous2s" class="btn btn-link mt-2 mt-sm-0 glightbox">
              <i class="bi bi-play-circle me-1"></i>
              Play Video
            </a> --}}
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="hero-image position-relative" data-aos="zoom-out" data-aos-delay="300">

          <img src="{{ asset('assets') }}/img/illustration-1.webp" alt="Hero Image"
            class="img-fluid rounded-4 shadow-lg hero-img-animate">
        </div>
      </div>
    </div>

    <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
      <div class="col-lg-3 col-md-6">
        <div class="stat-item">
          <div class="stat-icon">
            <i class="bi bi-people-fill"></i>
          </div>
          <div class="stat-content">
            <p class="mb-0">Jumlah Penduduk</p>
            <h4>233 Jiwa</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="stat-item">
          <div class="stat-icon">
            <i class="bi bi-map"></i>
          </div>
          <div class="stat-content">
            <p class="mb-0">Luas Wilayah</p>
            <h4>100 KM</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="stat-item">
          <div class="stat-icon">
            <i class="bi bi-house-door-fill"></i>
          </div>
          <div class="stat-content">
            <p class="mb-0">Jumlah Kepala Keluarga</p>
            <h4>100</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="stat-item">
          <div class="stat-icon">
            <i class="bi bi-map"></i>
          </div>
          <div class="stat-content">
            <p class="mb-0">Jumlah Dusun</p>
            <h4>6</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="about section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 align-items-center justify-content-between">

      <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
        <span class="about-meta">Sambutan</span>
        <h2 class="about-title">Kepala Desa Tubo Selatan</h2>
        <p class="about-description">Selamat datang di Website Resmi Desa Tubo Selatan.

          Website ini kami hadirkan sebagai sarana informasi, komunikasi, dan transparansi bagi seluruh masyarakat.
          Melalui platform ini, kami berharap warga dapat lebih mudah mengakses berita, program, serta layanan desa
          secara cepat dan tepat.

          Semoga website ini dapat menjadi jembatan untuk mempererat kebersamaan, memperluas wawasan, dan mendukung
          pembangunan Desa Tubo Selatan yang maju, sejahtera, dan berdaya saing.</p>

        <div class="info-wrapper">
          <div class="row gy-4">
            <div class="col-lg-5">
              <div class="profile d-flex align-items-center gap-3">
                <div>
                  <h4 class="profile-name">Jalaluddin, S.Pd.I</h4>
                  <p class="profile-position">Kepala Desa Tubo Selatan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
        <div class="image-wrapper">
          <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
            <img src="{{ asset('assets') }}/img/kepala-desa.png" alt="Business Meeting"
              class="img-fluid main-image rounded-4">
          </div>
        </div>
      </div>
    </div>
  </div>

</section><!-- /About Section -->

<!-- Features Section -->
<section id="features" class="features section">
  <div class="container section-title" data-aos="fade-up">
    <h2>SOTK</h2>
    <p>Struktur Organisasi dan Tata Kerja Desa Tubo Selatan</p>
  </div>

  <div class="container">
    <div class="d-flex justify-content-center">
      <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
        <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#pemerintah">
            <h4>Pemerintah Desa</h4>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#bpd">
            <h4>BPD</h4>
          </a>
        </li>
      </ul>
    </div>

    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
      <!-- Pemerintah Desa -->
      <div class="tab-pane fade show active" id="pemerintah">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4 col-md-6">
            <div class="official-card">
              <div class="official-card__avatar-wrapper">
                <img src="{{ asset('assets/img/kepala-desa2.jpg') }}" class="official-card__avatar"
                  alt="Foto Kepala Desa Jalaluddin, S.Pd.I">
              </div>
              <h5 class="official-card__name">Jalaluddin, S.Pd.I</h5>
              <p class="official-card__position">Kepala Desa</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="official-card">
              <div class="official-card__avatar-wrapper">
                <img src="{{ asset('assets/img/siluet.jpg') }}" class="official-card__avatar"
                  alt="Foto Sekretaris Desa">
              </div>
              <h5 class="official-card__name">Abdul Gafur, S.Pd.I</h5>
              <p class="official-card__position">Sekretaris Desa</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="official-card">
              <div class="official-card__avatar-wrapper">
                <img src="{{ asset('assets/img/siluet.jpg') }}" class="official-card__avatar" alt="Foto Bendahara Desa">
              </div>
              <h5 class="official-card__name">Muh. Arfah, S.Pd</h5>
              <p class="official-card__position">Bendahara Umum</p>
            </div>
          </div>
        </div>

        <div class="text-center mt-5">
          <a href="{{ route('profil-desa') }}" class="btn btn-primary btn-view-structure">
            Lihat Struktur Lengkap
            <i class="bi bi-arrow-right-short"></i>
          </a>
        </div>
      </div>

      <!-- BPD -->
      <div class="tab-pane fade" id="bpd">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4 col-md-6">
            <div class="official-card">
              <div class="official-card__avatar-wrapper">
                <img src="{{ asset('assets/img/siluet.jpg') }}" class="official-card__avatar" alt="Foto Ketua BPD">
              </div>
              <h5 class="official-card__name">Hamzah, S.Sos</h5>
              <p class="official-card__position">Ketua</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="official-card">
              <div class="official-card__avatar-wrapper">
                <img src="{{ asset('assets/img/siluet.jpg') }}" class="official-card__avatar"
                  alt="Foto Wakil Ketua BPD">
              </div>
              <h5 class="official-card__name">Nama Wakil Ketua BPD</h5>
              <p class="official-card__position">Wakil Ketua</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="official-card">
              <div class="official-card__avatar-wrapper">
                <img src="{{ asset('assets/img/siluet.jpg') }}" class="official-card__avatar" alt="Foto Sekretaris BPD">
              </div>
              <h5 class="official-card__name">Nama Sekretaris BPD</h5>
              <p class="official-card__position">Sekretaris</p>
            </div>
          </div>
          <!-- Tambahkan anggota BPD lain di sini -->
        </div>
        <div class="text-center mt-5">
          <a href="{{ route('profil-desa') }}" class="btn btn-primary btn-view-structure">
            Lihat Struktur Lengkap
            <i class="bi bi-arrow-right-short"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="services section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Galeri</h2>
    <p>Dokumentasi foto berbagai kegiatan, potensi desa, dan kehidupan masyarakat di Desa Tubo Selatan.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-4">

      <!-- Card Galeri -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="gallery-card">
          <img src="{{ asset('assets/img/galeri/bulllying.jpg') }}" alt="Foto Kegiatan Sosialisasi" class="gallery-img">
          <div class="gallery-content">
            <h5 class="gallery-title">Sosialisasi Anti Bullying</h5>
            <p class="gallery-date"><i class="bi bi-calendar-event"></i> 12 Agustus 2025</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="gallery-card">
          <img src="{{ asset('assets/img/galeri/lomba.jpg') }}" alt="Foto Kegiatan 17 Agustus" class="gallery-img">
          <div class="gallery-content">
            <h5 class="gallery-title">Kegiatan HUT 80</h5>
            <p class="gallery-date"><i class="bi bi-calendar-event"></i> 05 Juli 2025</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="gallery-card">
          <img src="{{ asset('assets/img/galeri/phbs.jpg') }}" alt="Foto Sosialisasi PHBS" class="gallery-img">
          <div class="gallery-content">
            <h5 class="gallery-title">Sosialisasi PHBS</h5>
            <p class="gallery-date"><i class="bi bi-calendar-event"></i> 17 Agustus 2025</p>
          </div>
        </div>
      </div>

    </div>

    <!-- Tombol Lihat Lebih Banyak -->
    <div class="text-center mt-4">
      <a href="{{ route('galeri') }}" class="btn btn-primary btn-lg rounded-pill">
        Lihat Lebih Banyak <i class="bi bi-arrow-right-circle"></i>
      </a>
    </div>

  </div>

</section>


<!-- Call To Action 2 Section -->
<section id="call-to-action-2" class="call-to-action-2 section dark-background">

  <div class="container">
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="text-center">
        <h3>Peta Desa</h3>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7967.990925269938!2d118.77184641233924!3d-3.0958648374668583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d934fcb4db12c79%3A0x7d810690973451af!2sKantor%20Desa%20Tubo%20Selatan!5e0!3m2!1sen!2sid!4v1755091761634!5m2!1sen!2sid"
          width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>

</section><!-- /Call To Action 2 Section -->

<!-- Contact Section -->
<section id="contact" class="contact section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-4 g-lg-5">
      <div class="col-lg-5">
        <div class="info-box" data-aos="fade-up" data-aos-delay="200">
          <h3>Info Kontak</h3>
          <p>Informasi resmi Kantor Desa Tubo Selatan. Jangan ragu untuk menghubungi kami melalui detail di bawah ini
            pada jam kerja.
          </p>

          <div class="info-item" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-geo-alt"></i>
            </div>
            <div class="content">
              <h4>Alamat</h4>
              <p>Tubo Selatan, Kec. Tubo Sendana, Kabupaten Majene, Sulawesi Barat</p>
            </div>
          </div>

          <div class="info-item" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-telephone"></i>
            </div>
            <div class="content">
              <h4>Nomor Telepon</h4>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

          <div class="info-item" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <i class="bi bi-envelope"></i>
            </div>
            <div class="content">
              <h4>Email</h4>
              <p>info@example.com</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
          <h3>Hubungi Kami</h3>
          <p>Punya pertanyaan, kritik, atau saran untuk kemajuan desa? Silakan sampaikan melalui formulir di bawah ini.
            Kami akan segera merespons pesan Anda.
          </p>
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required="">
              </div>
              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Email" required="">
              </div>
              <div class="col-12">
                <input type="text" class="form-control" name="subject" placeholder="Subjek " required="">
              </div>
              <div class="col-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Tuliskan pesan Anda di sini..."
                  required=""></textarea>
              </div>
              <div class="col-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
                <button type="submit" class="btn">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</section><!-- /Contact Section -->

@endsection