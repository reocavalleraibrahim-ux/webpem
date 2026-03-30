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
            <h2>Tentang Kami</h2>
            <h4>Biro Pemerintahan Otonomi Daerah dan Kerjasama Sekretariat Daerah Provinsi Jawa Tengah</h4>
            <h3>Diatur dalam Peraturan Gubernur Jawa Tengah No 1 Tahun 2026</h3>
          </div>
          <div class="col-xl-4">
          </div>

          <div class="col-xl-12">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-card-heading"></i>
                  <h3>Tugas</h3>
                  <p>Melaksanakan pengoordinasian penyusunan kebijakan Daerah, pengoordinasian pelaksanaan tugas Perangkat Daerah, pemantauan dan evaluasi pelaksanaan kebijakan Daerah, membantu pelaksanaan tugas dan wewenang Gubernur sebagai Wakil Pemerintah Pusat dan pelayanan administratif dan pembinaan sumber daya ASN di bidang Pemerintahan, Otonomi Daerah dan Kerjasama.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-command"></i>
                  <h3>Fungsi</h3>
                  <p>
                    <ul>
                      <li> pengoordinasian penyusunan kebijakan Daerah di bidang Pemerintahan, Otonomi Daerah dan Kerjasama;</li>
                      <li> pengoordinasian pelaksanaan tugas Perangkat Daerah di bidang Pemerintahan, Otonomi Daerah dan Kerjasama;</li>
                      <li> pemantauan dan evaluasi pelaksanaan kebijakan Daerah di bidang Pemerintahan, Otonomi Daerah dan Kerjasama;</li>
                      <li> pengoordinasian pelaksanaan tugas dan wewenang Gubernur sebagai Wakil Pemerintah Pusat bidang Pemerintahan, Otonomi Daerah dan Kerjasama;</li>
                      <li> pelaksanaan fasilitasi sekretariat Gubernur sebagai Wakil Pemerintah Pusat;</li>
                      <li> penyiapan pengelolaan ketatausahaan dan pelayanan administrasi serta pembinaan ASN dilingkungan Biro;</li>
                      <li> pelaksanaan fungsi lain yang diberikan oleh Asisten Pemerintahan dan Kesejahteraan Rakyat.</li>
                  </p>
                </div>
              </div> <!-- End Icon Box -->

              

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Visi & Misi</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Visi</h3>
            <p class="fst-italic">
              {!! $visi->isi !!}
            </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
            <h3>Misi</h3>
            <p class="fst-italic">
              {!! $misi->isi !!}
            </p>
        </div><!-- Features Item -->

      </div>

    </section><!-- /Features Section -->

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
            <div class="card">
              <div class="img">
                <img src="{{ asset('storage/'.$b->thumbnail) }}" alt="" class="img-fluid">
              </div>
              <h2 class="title"><a href="{{url('detailBerita/'.$b->id)}}">{{$b->judul}}</a></h2>
              <p>
                {!! substr($b->isi,0,150) !!}
              </p>
            </div>
          </div><!-- End Card Item -->

      @endforeach
        </div>

      </div>
<br>      
<center><h3><a href="{{ url('/allBerita')}}" class="btn btn-primary">Lihat Semua Berita <span class="bi bi-arrow-right"></span></a></h3></center>
    </section><!-- /Featured Section -->


  </main>
@include('nav.footer')