<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3 justify-content-center">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Alamat</h4>
            <p>{{ $settings[0]->alamat }}</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Kontak</h4>
            <p>
              <strong>Whatsapp:</strong>
              <span>
                <a href="https://api.whatsapp.com/send?phone=62{{ $settings[0]->no_telepon }}" style="text-decoration: none;" class="float" target="_blank">
                  +62{{ $settings[0]->no_telepon }}
                </a>
              </span>
              <br>
              <strong>Instagram:</strong>
              <a href="https://www.instagram.com/{{ $settings[0]->instagram }}" style="text-decoration: none;" class="float" target="_blank">
                {{ $settings[0]->instagram }}
              </a>
              <strong>Email:</strong>
              <span>{{ $settings[0]->email }}</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Buka</h4>
            <p>
              <strong>Senin-Sabtu:</strong> <span>07.00 - 17.00 WIB</span><br>
              <strong>Minggu</strong>: <span>Tutup</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">HI Genteng Jatiwangi</strong> <span>2024</span></p>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
