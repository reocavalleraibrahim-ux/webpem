@include('nav.header2')

<main class="main">
  <section id="hero" class="hero2 dark-background">
    </section><!-- /Hero Section -->
    <!-- Hero / Thumbnail -->
    <div class="hero-blur" style="background: url('{{ asset('storage/'.$berita->thumbnail) }}') center/cover no-repeat;">
      <div class="overlay-blur"></div>

      <div class="hero-content text-center">
          <img src="{{ asset('storage/'.$berita->thumbnail) }}" 
              class="img-fluid rounded shadow"
              style="max-height:400px;">
      </div>
      
    </div>
    <!-- Content -->
    <section class="features section">
        <div class="container" style="max-width: 800px;">

            <div class="section-title text-center">
                <h2 class="fw-bold">{{$berita->judul}}</h2>
                <small class="text-muted">
                    {{ date('d F Y', strtotime($berita->created_at)) }}
                </small>
            </div>

            <div class="mt-1 text-justify">
                {!! $berita->isi !!}
            </div>

            <div class="text-center mt-5">
                <a href="{{ url()->previous() }}" class="btn btn-warning px-4">
                    ← Kembali
                </a>
            </div>

        </div>
    </section>

</main>

@include('nav.footer')