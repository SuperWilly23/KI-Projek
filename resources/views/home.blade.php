@extends('main3')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">

</div>
@endsection

@section('content')
<section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Transaksi <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>10</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>008</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
            <section class="about-us-image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <img src="{{ asset('style3/assets/img/laundry.jpeg')}}" alt="Wils Laundry" style="width: 102%; height: 100%; object-fit: cover;">
            </div>
        </div>
        </div>
    </div>
</section>

<section class="about-us-image">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Selamat Datang, Admin Wils Laundry!</h2>
                <p>Tentang Wils Laundry

Wils Laundry merupakan layanan pencucian yang memiliki komitmen untuk memberikan layanan terbaik kepada pelanggan kami. Sebagai bagian dari tim admin, Anda berperan penting dalam mengelola dan memastikan operasional yang lancar.</p>
                <p>Misi dan Nilai Kami Komitmen Terhadap Kualitas: Kami mengutamakan kualitas layanan dan terus memperbaiki proses untuk memastikan setiap pelanggan mendapatkan hasil terbaik.
Kenyamanan Pelanggan: Prioritas utama kami adalah memastikan pelanggan merasa nyaman dan puas dengan layanan yang kami berikan.
Efisiensi Operasional: Kami memperhatikan efisiensi dalam setiap aspek operasional guna meningkatkan kinerja secara keseluruhan.</p>
                <p>Peran Admin Sebagai admin, Anda bertanggung jawab untuk:
                Manajemen Sistem: Memastikan sistem dan alur kerja terkelola dengan baik.
                Kontrol Kualitas: Meninjau layanan yang diberikan untuk memastikan kualitas dan kepuasan pelanggan.
                Pembaruan Kebijakan: Mengupdate dan memastikan kebijakan internal yang relevan dengan perubahan industri terbaru.
                Interaksi Pelanggan: Menanggapi pertanyaan atau masukan pelanggan dengan cepat dan efisien.</p>
            </div>
        </div>
    </div>
</section>
@endsection

