<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_logo' => 'setting-images/logo-hi-baru.png',
            'navbar_logo' => 'setting-images/logo-baru.png',
            'hero' => 'setting-images/hero-genteng.jpg',
            'slogan' => 'Perpaduan keindahan, kekuatan, dan kenyamanan',
            'tentang_kami' => '<h2>Siapa Kami?</h2>
                              <p>Di <strong>H.I Genteng Jatiwangi,</strong> kami memahami bahwa atap adalah elemen penting yang melindungi rumah dan keluarga Anda dari berbagai
                              kondisi cuaca. Dengan pengalaman bertahun-tahun dan komitmen yang tak tergoyahkan terhadap keunggulan, kami menyediakan genteng yang tidak hanya
                              kuat dan tahan lama, tetapi juga menambah nilai estetika pada setiap hunian.</p>
                              <h3>Nilai-nilai Kami</h3>
                              <ol>
                              <li><strong>Kualitas&nbsp;Unggul:</strong> Kami hanya menggunakan bahan-bahan terbaik dan teknologi terbaru untuk memastikan setiap genteng yang
                              kami produksi memenuhi standar tertinggi.</li>
                              <li><strong>Inovasi Berkelanjutan:&nbsp;</strong>Kami selalu mencari cara baru untuk meningkatkan produk kami dan menghadirkan solusi yang lebih
                              baik bagi pelanggan kami.</li>
                              <li><strong>Kepercayaan dan Integritas:</strong> Kepercayaan pelanggan adalah prioritas utama kami. Kami selalu beroperasi dengan transparansi dan
                              integritas.</li>
                              <li><strong>Pelayanan Pelanggan Prima:</strong> Tim kami siap membantu Anda dengan semua kebutuhan dan pertanyaan Anda, memastikan pengalaman yang
                              menyenangkan dari awal hingga akhir.</li>
                              </ol>',
            'foto_tentang_kami' => 'setting-images/pabrik.jpg',
            'alamat' => 'JL. Burujul Wetan Kec. Jatiwangi Kab. Majalengka Jawa Barat 45454',
            'instagram' => 'hi_gentengjatiwangi',
            'email' => 'yudi.ghi@gmail.com',
            'no_telepon' => '082111555777',
            'link_gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.5551456406713!2d108.24534605099956!3d-6.742927128345008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f27f9051ca23d%3A0xa7e2aa29c915f8e8!2sKantor%20CV.%20HAJI%20IDRIS%20(%20Pabrik%20Genteng%20H.I)!5e0!3m2!1sid!2sid!4v1718204020222!5m2!1sid!2sid'
        ];
    }
}
