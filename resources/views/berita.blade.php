@include('nav.header2')

  <main class="main">
    <section id="hero" class="hero2 dark-background">
    </section><!-- /Hero Section -->

    <!-- Featured Section -->
    <section id="featured" class="featured section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h1>Semua Berita</h1>
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
        <div class="text-center mt-4">
      {{ $berita->links('pagination::bootstrap-5') }}
    </div>
    </div>
    </section><!-- /Featured Section -->
    
  </main>
@include('nav.footer')