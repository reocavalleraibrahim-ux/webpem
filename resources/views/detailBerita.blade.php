@include('nav.header2')

  <main class="main">
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('storage/'.$berita->thumbnail) }}" class="d-block w-100" style="height:500px;">
            </div>
          </div>
          </button>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <section class="features section">
    <div class="container">
        <!-- Section Title -->
      <div class="container section-title">
        <h2>{{$berita->judul}}</h2>
      </div>
      <p>
        {!! $berita->isi !!}
      </p>
    </div>
    <center><a href="{{url()->previous()}}" class="btn btn-warning">Kembali</a></center>
</section>
  </main>

@include('nav.footer')