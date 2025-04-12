@extends('home.main.app_login')

@section('section_home_login')
<section id="hero" class="hero section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                <h1>Solusi Booking tercepat dan teraman di bali</h1>
                <p>Kami telah melayani serta menjembatanni onwer hotel dan user yang ingin booking hotel cepat dan aman.</p>
                <div class="d-flex">
                    <a href="#about" class="btn-get-started">Cek Hotel Impianmu</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                <img src="{{ asset('/home/img/hero-img.png') }}" class="img-fluid animated" alt="hero">
            </div>
        </div>
    </div>
</section>
@endsection
