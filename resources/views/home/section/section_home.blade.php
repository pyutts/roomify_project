@extends('home.main.app')

@section('section_home')

<!-- Hero Section -->
<section id="hero" class="hero section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <h1>Solusi Booking tercepat dan teraman di Bali</h1>
        <p>Kami telah melayani serta menjembatani owner hotel dan user yang ingin booking hotel cepat dan aman.</p>
        <div class="d-flex">
          <a href="#hotels" class="btn-get-started">Cek Hotel Impianmu</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
        <img src="{{ asset('/home/img/hero-img.png') }}" class="img-fluid animated" alt="hero">
      </div>
    </div>
  </div>
</section>

<!-- Promo Section -->
<section id="promo" class="py-5 bg-light">
  <div class="container" data-aos="fade-up">
    <div class="text-center mb-5">
      <h2>Promo Spesial Bulan Ini</h2>
      <p>Jangan lewatkan diskon hotel hingga 50% hanya untuk kamu!</p>
    </div>
    <div class="row g-4">
      @foreach(range(1,3) as $i)
      <div class="col-md-4">
        <div class="card shadow h-100" data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}">
          <img src="{{ asset('/home/img/hotel'.$i.'.jpg') }}" class="card-img-top" alt="Hotel Promo">
          <div class="card-body">
            <h5 class="card-title">Hotel Bintang {{ $i }}</h5>
            <p class="card-text">Diskon hingga {{ 20 * $i }}%. Lokasi strategis dan fasilitas lengkap!</p>
            <span class="badge bg-success">Rp {{ number_format(500000 - ($i * 50000), 0, ',', '.') }}/malam</span>
          </div>
          <div class="card-footer bg-white border-0 text-center">
            <a href="#" class="btn btn-outline-primary w-100">Pesan Sekarang</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Hotel Unggulan -->
<section id="hotels" class="py-5">
  <div class="container" data-aos="fade-up">
    <div class="text-center mb-5">
      <h2>Hotel Unggulan</h2>
      <p>Pilihan hotel terbaik dengan rating tinggi dan ulasan positif.</p>
    </div>
    <div class="row g-4">
      @foreach(range(1,4) as $i)
      <div class="col-lg-3 col-md-6">
        <div class="card h-100 shadow-sm" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
          <img src="{{ asset('/home/img/hotel'.$i.'.jpg') }}" class="card-img-top" alt="Hotel">
          <div class="card-body">
            <h5 class="card-title">Hotel Mewah {{ $i }}</h5>
            <p class="card-text"><i class="bi bi-geo-alt me-1"></i> Kuta, Bali</p>
            <div class="d-flex justify-content-between">
              <span class="text-muted">Mulai dari</span>
              <strong>Rp {{ number_format(400000 + ($i * 25000), 0, ',', '.') }}/malam</strong>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Testimoni -->
<section id="testimoni" class="bg-light py-5">
  <div class="container" data-aos="fade-up">
    <div class="text-center mb-5">
      <h2>Apa Kata Mereka?</h2>
      <p>Testimoni dari para pelanggan yang puas menggunakan Roomify.</p>
    </div>
    <div class="swiper mySwiper" data-aos="zoom-in">
      <div class="swiper-wrapper">
        @foreach(['Andi', 'Sari', 'Budi'] as $name)
        <div class="swiper-slide p-3">
          <div class="card border-0 shadow text-center">
            <div class="card-body">
              <i class="bi bi-chat-quote-fill fs-2 text-success"></i>
              <p class="card-text mt-3">"Layanan sangat cepat dan hotel yang saya pesan sesuai ekspektasi. Terima kasih Roomify!"</p>
              <h6 class="fw-bold mt-3">{{ $name }}</h6>
              <span class="text-muted">Traveller</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<!-- CTA
<section class="py-5 text-center bg-success text-white" data-aos="fade-in">
  <div class="container">
    <h2 class="mb-3">Temukan Hotel Impianmu Sekarang</h2>
    <p class="mb-4">Proses cepat, mudah, dan terpercaya. Booking hotel hanya di Roomify.</p>
    <a href="#hotels" class="btn btn-light btn-lg px-4">Cari Hotel</a>
  </div>
</section> -->

<!-- FAQ -->
<section id="faq" class="py-5">
  <div class="container" data-aos="fade-up">
    <div class="text-center mb-5">
      <h2>Pertanyaan yang Sering Diajukan</h2>
      <p>Temukan jawaban dari pertanyaan yang sering diajukan oleh pengguna Roomify.</p>
    </div>

    <div class="accordion" id="faqAccordion">
      <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
        <h2 class="accordion-header" id="faqHeadingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne">
            Bagaimana cara memesan hotel di Roomify?
          </button>
        </h2>
        <div id="faqCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Kamu cukup memilih hotel, tentukan tanggal, lalu klik tombol "Pesan Sekarang" dan ikuti instruksi selanjutnya.
          </div>
        </div>
      </div>

      <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
        <h2 class="accordion-header" id="faqHeadingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo">
            Apakah pembayaran di Roomify aman?
          </button>
        </h2>
        <div id="faqCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Sangat aman. Kami menggunakan sistem pembayaran yang terenkripsi dan sudah bekerjasama dengan penyedia payment gateway terpercaya.
          </div>
        </div>
      </div>

      <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
        <h2 class="accordion-header" id="faqHeadingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree">
            Bisakah saya membatalkan pesanan?
          </button>
        </h2>
        <div id="faqCollapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Bisa, selama masih dalam batas waktu yang ditentukan oleh masing-masing hotel. Silakan cek kebijakan pembatalan sebelum memesan.
          </div>
        </div>
      </div>

      <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
        <h2 class="accordion-header" id="faqHeadingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour">
            Apakah saya perlu login untuk memesan hotel?
          </button>
        </h2>
        <div id="faqCollapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Ya, login dibutuhkan agar kami bisa mencatat riwayat pemesanan kamu dan memberikan pelayanan terbaik.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
