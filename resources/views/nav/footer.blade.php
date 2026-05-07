
  <footer id="footer" class="footer dark-background py-5">
  <div class="container">
    @if (session('success'))
      <script>
      alert('Berhasil Mengirim Saran');
      </script>
    @endif 
    <div class="row">
      
      <!-- Kontak -->
      <div class="col-lg-5 mb-4">
        <h3 class="sitename mb-4">Kontak</h3>

        <p>
          <i class="bi bi-geo-alt-fill me-2"></i>
          Jl. Pahlawan No.9 Mugassari, Kec. Semarang Selatan,
          Kota Semarang, Jawa Tengah
        </p>

        <p>
          <i class="bi bi-telephone-fill me-2"></i>
          (024)-8311174
        </p>

        <p>
          <i class="bi bi-envelope-fill me-2"></i>
          biropemotdakerjasama@gmail.com
        </p>

        <div class="social-links mt-4 d-flex gap-3 justify-content-center">
          <a href="https://www.tiktok.com/@biropemotdaks_jtg?is_from_webapp=1&sender_device=pc" target="_blank">
            <i class="bi bi-tiktok"></i>
          </a>

          <a href="https://www.instagram.com/biropemotdaks_jateng?igsh=NzV0dmR5NGVnbG80&utm_source=qr" target="_blank">
            <i class="bi bi-instagram"></i>
          </a>
        </div>
      </div>  

      <!-- Form Saran Masukan -->
      <div class="col-lg-7">
        <h3 class="sitename mb-4">Saran & Masukan</h3>

        <form action="{{url('/saran')}}" method="POST">
        @csrf
          <div class="row">
            <div class="mb-3 col-lg-4">
              <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>

            <div class="mb-3 col-lg-5">
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="mb-3 col-lg-3">
              <input type="number" name="telepon" class="form-control" placeholder="Telepon">
            </div>
          </div>

          <div class="mb-3">
            <textarea class="form-control" name="pesan" rows="5" placeholder="Tulis saran dan masukan..."></textarea>
          </div>

          <input type="submit" name="submit" value="Kirim" class="btn btn-success">

        </form>
      </div>

    </div>

  </div>
</footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('softland/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('softland/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('softland/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('softland/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('softland/vendor/glightbox/js/glightbox.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('softland/js/main.js') }}"></script>

</body>

</html>