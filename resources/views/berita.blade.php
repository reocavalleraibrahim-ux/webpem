@include('nav.header')

  <main class="main">
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

    <section class="features section">
    <div class="container">
        <!-- Section Title -->
      <div class="container section-title">
        <h2>Berita</h2>
      </div><!-- End Section Title -->
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <th>Thumbnail</th>
                        <th>Judul</th>
                        <th>isi</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                    @foreach($berita as $b)
                        <tr>
                            <td><img src="{{asset('storage/'.$b->thumbnail)}}" style="max-height:100px;"></td>
                            <td>{{$b->judul}}</td>
                            <td>{{substr($b->isi,0,150)}}</td>
                            <td>
                                <a href="{{ url('/detailBerita/'.$b->id)}}" class="btn btn-primary"><span class="bi bi-eye"></span></a>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</section>
  </main>

@include('nav.footer')