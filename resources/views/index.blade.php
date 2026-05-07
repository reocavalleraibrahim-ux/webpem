@include('nav.header')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner">
            @foreach($slider as $s)
            <div class="carousel-item active">
              <img src="{{ asset('storage/'.$s->name) }}" class="d-block w-100" style="height:500px;">
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-8 content">
            <h2>Profil</h2>
            <h4>Biro Pemerintahan Otonomi Daerah dan Kerjasama Sekretariat Daerah Provinsi Jawa Tengah</h4>
            <h3>Diatur dalam Peraturan Gubernur Jawa Tengah No 1 Tahun 2026</h3>
          </div>
          <div class="col-xl-4">
          </div>

          <div class="col-xl-12">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-diagram-3-fill"></i>
                  <h3>Struktur Organisasi</h3>
                  <p class="d-flex justify-content-center">
                    <img src="{{asset('images/struktur.jpg')}}" style="max-width:70em;">
                  </p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-card-heading"></i>
                  <h3>Tupoksi</h3>
                  <p>
                    {!! $tupoksi->isi !!}
                  </p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-command"></i>
                  <h3>Visi & MIsi</h3>
                  <p>
                    <h4>Visi</h4>
                      {!! $visi->isi !!}
                    <h4>Misi</h4>
                      {!! $misi->isi !!}
                  </p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-card-heading"></i>
                  <h3>Maklumat Pelayanan</h3>
                  <p>
                    
                  </p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    

    <!-- Featured Section -->
    <section id="featured" class="featured section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Berita Terbaru</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

      @foreach($berita as $b)
          <div class="col-md-4">
            <div class="card p-3 h-100">
                <div class="text-center mb-3">
                    <img src="{{ asset('storage/'.$b->thumbnail) }}" 
                        class="img-fluid rounded" 
                        style="max-height:200px;">
                </div>

                <h5 class="fw-semibold text-center mb-1">
                    <a href="{{url('detailBerita/'.$b->id)}}" class="text-dark text-decoration-none">
                        {{$b->judul}}
                    </a>
                </h5>

                <small class="text-muted text-center d-block mb-2">
                    {{ date('d F Y', strtotime($b->created_at)) }}
                </small>

                <p class="text-muted text-center">
                    {!! substr($b->isi,0,150) !!}
                </p>

                <div class="text-center mt-auto">
                    <a href="{{url('detailBerita/'.$b->id)}}" class="btn custom-gradient2 btn-sm">
                        Selengkapnya
                    </a>
                </div>

            </div>
          </div><!-- End Card Item -->

      @endforeach
        </div>

      </div>
<br>      
<div class="text-center mt-4">
  <a href="{{ url('/allBerita')}}" class="btn custom-gradient">
    Lihat Semua Berita <i class="bi bi-arrow-right"></i>
  </a>
</div>
    </section><!-- /Featured Section -->


  </main>
@include('nav.footer')