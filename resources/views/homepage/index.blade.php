@extends('homepage.layouts.main')

@section('content')
	<!-- ======= About Section ======= -->
	<section id="about" class="about">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Tentang Kami</h2>
				<p>H.I Genteng Jatiwangi</p>
			</div>
			<div class="row">
				<div class="col-lg-6 px-5">
					<img src="img/pabrik.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 px-5">
					<h3>Siapa Kami?</h3>
					<p>
						Di <b>H.I Genteng Jatiwangi</b>, kami memahami bahwa atap adalah elemen penting yang melindungi rumah dan keluarga
						Anda dari berbagai kondisi cuaca. Dengan pengalaman bertahun-tahun dan komitmen yang tak tergoyahkan terhadap keunggulan,
						kami menyediakan genteng yang tidak hanya kuat dan tahan lama, tetapi juga menambah nilai estetika pada setiap hunian.
					</p>
					<h5>Nilai-nilai Kami</h5>
					<ul>
						<li><i class="bx bx-check-double"></i><b>Kualitas Unggul:</b> Kami hanya menggunakan bahan-bahan terbaik dan teknologi terbaru untuk memastikan setiap genteng yang kami produksi memenuhi standar tertinggi.</li>
						<li><i class="bx bx-check-double"></i><b>Inovasi Berkelanjutan:</b> Kami selalu mencari cara baru untuk meningkatkan produk kami dan menghadirkan solusi yang lebih baik bagi pelanggan kami.</li>
						<li><i class="bx bx-check-double"></i><b>Kepercayaan dan Integritas:</b> Kepercayaan pelanggan adalah prioritas utama kami. Kami selalu beroperasi dengan transparansi dan integritas.</li>
						<li><i class="bx bx-check-double"></i><b>Pelayanan Pelanggan Prima:</b> Tim kami siap membantu Anda dengan semua kebutuhan dan pertanyaan Anda, memastikan pengalaman yang menyenangkan dari awal hingga akhir.</li>
					</ul>
				</div>
			</div>

		</div>
	</section><!-- End About Section -->

	<!-- ======= produk Section ======= -->
	<section id="produk" class="produk">
		<div class="container">
			<div class="section-title">
				<h2>Produk</h2>
				<p>Berikut adalah produk-produk Kami</p>
			</div>

			<div class="row produk-container">
				<div class="col-lg-4 col-md-6 produk-item filter-morando wow fadeInUp" data-wow-delay="0.1s">
					<div class="produk-wrap text-center">
						<a href="morando-detail.html" class="link-details" title="Lihat Detail">
							<figure>
								<img src="img/produk/morando-biru.jpg" class="img-fluid" alt="">
							</figure>
						</a>

						<div class="produk-info">
							<h4><a href="morando-detail.html">Morando Glazur Biru</a></h4>
							<p>Rp9.000</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 produk-item filter-morando wow fadeInUp" data-wow-delay="0.2s">
					<div class="produk-wrap text-center">
						<a href="morando-detail.html" class="link-details" title="Lihat Detail">
							<figure>
								<img src="img/produk/morando-transparan-baru.jpg" class="img-fluid" alt="">
							</figure>
						</a>
						<div class="produk-info">
							<h4><a href="morando-detail.html">Morando Transparan</a></h4>
							<p>Rp4.700</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 produk-item filter-morando wow fadeInUp" data-wow-delay="0.2s">
					<div class="produk-wrap text-center">
						<a href="morando-detail.html" class="link-details" title="Lihat Detail">
							<figure>
								<img src="img/produk/morando-hijau.jpg" class="img-fluid" alt="">
							</figure>
						</a>
						<div class="produk-info">
							<h4><a href="morando-detail.html">Morando Glazur Hijau</a></h4>
							<p>Rp8.500</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 produk-item filter-morando wow fadeInUp" data-wow-delay="0.2s">
					<div class="produk-wrap text-center">
						<a href="morando-detail.html" class="link-details" title="Lihat Detail">
							<figure>
								<img src="img/produk/morando-coklat.jpg" class="img-fluid" alt="">
							</figure>
						</a>
						<div class="produk-info">
							<h4><a href="morando-detail.html">Morando Glazur Coklat</a></h4>
							<p>Rp5.000</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End produk Section -->

	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact section-bg">
		<div class="container">
			<div class="section-title">
				<h2>Kontak</h2>
				<p>Untuk pemesanan, hubungi kontak dibawah ini</p>
			</div>
			<div class="row mt-5 justify-content-center">
				<div class="col-lg-10">
					<div class="info-wrap">
						<div class="row">
							<div class="col-lg-4 info">
								<i class="bi bi-geo-alt"></i>
								<h4>Alamat:</h4>
								<p>JL. Burujul Wetan Kec. Jatiwangi<br>Kab. Majalengka Jawa Barat 45454</p>
							</div>

							<div class="col-lg-4 info mt-4 mt-lg-0">
								<i class="bi bi-envelope"></i>
								<h4>Email:</h4>
								<p>yudhie.hi@gmail.com</p>
							</div>

							<div class="col-lg-4 info mt-4 mt-lg-0">
								<i class="bi bi-whatsapp"></i>
								<h4>Whatsapp:</h4>
								<p>
									<a href="https://api.whatsapp.com/send?phone=6282111555777" style="text-decoration: none;" class="float" target="_blank">
										082111555777
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5 justify-content-center">
				<div class="col-lg-10">
					<div class="mb-5">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.5551456406713!2d108.24534605099956!3d-6.742927128345008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f27f9051ca23d%3A0xa7e2aa29c915f8e8!2sKantor%20CV.%20HAJI%20IDRIS%20(%20Pabrik%20Genteng%20H.I)!5e0!3m2!1sid!2sid!4v1718204020222!5m2!1sid!2sid"
						width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div><!-- End Google Maps -->
				</div>
			</div>
		</div>
	</section><!-- End Contact Section -->
@endsection
