@include('nav.header2')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero2 section dark-background">
    </section><!-- /Hero Section -->

    <!-- Featured Section -->
    <section id="featured" class="featured section">
    <div class="container section-title" data-aos="fade-up">
        <h1>Dokumen Publik - {{$kat->nama_kategori}}</h1>
      </div><!-- End Section Title -->

      <div class="container">
        <table class="table table-stripped table-hover">
          <thead>
            <th>Nama Dokumen</th><th>Tahun</th><th>File</th>
          </thead>
          <tbody>
            @foreach($dokumen as $d)
            <tr>
              <td>{{$d->nama_dokumen}}</td>
              <td>{{$d->tahun}}</td>
              <td><a href="{{asset('storage/'.$d->dokumen)}}" target="blank"> Lihat Dokumen </a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
    </section><!-- /Featured Section -->


  </main>
@include('nav.footer')