@include('nav.header2')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Dokumen Publik</h1>
        <nav class="breadcrumbs">
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{$kat->nama_kategori}}</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <ul>
            @foreach($dokumen as $d)
            <li><a href="{{asset('storage/'.$d->dokumen)}}" target="blank">{{$d->nama_dokumen}} - {{$d->tahun}}</a></li>
            @endforeach
        </ul>
      </div>

    </section><!-- /Starter Section Section -->

  </main>
@include('nav.footer')