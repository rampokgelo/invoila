<?php
$title ="Pinjam Bisnis";
include 'templates/header.php';
?>

<div class="wrapper">
  <div class="banner-hero">
      <div class="slider-item banner-fluid" style="background-image:url(assets/images/banner-pinjam.jpg);">
        <div class="container">
          <div class="media media-hero">
            <div class="media-left media-middle">
              <div class="banner-caption caption-form">
                <h1>
                  Pinjaman pelancar cash flow
                  bagi pebisnis pintar
                </h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae porttitor quam.
                  Aliquam sollicitudin elit lorem, non rutrum ipsum tincidunt at. Nunc et lectus arcu.
                </p>
              </div>
            </div>
            <div class="media-body media-middle">
              <div class="form-hero">
                <form>
                  <div class="form-group">
                    <label>Nilai Invoice</label>
                    <input type="number" class="form-control" placeholder="Masukkan nominal uang">
                  </div>
                  <div class="form-group">
                    <label>Besar Pinjaman</label>
                    <input type="number" class="form-control" placeholder="80% dari nilai invoice">
                    <small class="text-inverse">Rentang pinjaman berkisar Rp 20,000,000.00 hingga Rp 2,000,000,000.00 </small>
                  </div>
                  <div class="form-group">
                    <label>Periode Pinjaman</label>
                    <input id="ex8" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="30" data-slider-step="1" data-slider-value="14"/>
                  </div>
                  <div class="form-group">
                    <label>Bunga (dalam %)</label>
                    <div class="row">
                      <div class="col-xs-12 col-md-4 col-md-push-8">
                        <select class="form-control">
                          <option selected disabled>Pilih Bunga</option>
                          <option>2%</option>
                          <option>3%</option>
                          <option>4%</option>
                          <option>5%</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Bunga Pinjaman</label>
                    <h4 class="text-inverse"><strong>Rp 0</strong></h4>
                  </div>
                  <div class="form-group">
                    <label>Potongan Biaya*</label>
                    <h4 class="text-inverse"><strong>Rp 0</strong></h4>
                    <small class="text-inverse">Potongan biaya INVOILA dimulai dari 3%</small>
                  </div>
                  <div class="form-group">
                    <label>Total Pencairan Pinjaman*</label>
                    <h4 class="text-inverse"><strong>Rp 0</strong></h4>
                    <small class="text-inverse">Biaya dan bunga diatas merupakan simulasi pinjaman. Biaya dan bunga akan dipotong pada saat pinjaman berhasil dicairkan.</small>
                  </div>
                  <button class="btn btn-primary btn-block">Ajukan Pinjaman Sekarang</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>


  </div>



  <!-- Meminjam -->
  <div class="">
    <div class="container">
      <div class="container-body">
        <br />
        <h2 class="font-heading"><span class="text-secondary">Mengapa Meminjam Melalui</span> <span class="text-primary">INVOILA</h2>
        <br />
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <div class="media margbot">
              <div class="media-left">
                <div class="img-media">
                  <img src="assets/images/sukubunga.svg" />
                </div>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><strong>Suku Bunga Terjangkau</strong></h4>
                <p>
                  Pinjaman yang diajukan dan disetujui hanya akan dikenakan bunga pinjaman rendah mulai 12-20% p.a. sesuai hasil analisa risiko tanpa ada biaya yang tersembunyi
                </p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div class="media margbot">
              <div class="media-left">
                <div class="img-media">
                  <img src="assets/images/regist-online.svg" />
                </div>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><strong>Registrasi Online</strong></h4>
                <p>
                   Registrasi online secara singkat dan mudah. Seluruh tahapan dilakukan secara online tanpa melibatkan proses administrasi yang rumit dan menyita waktu
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <div class="media margbot">
              <div class="media-left">
                <div class="img-media">
                  <img src="assets/images/plafon.svg" />
                </div>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><strong>Plafon pinjaman mencapai 2 millyar</strong></h4>
                <p>
                  Peminjaman dimulai dari 20 juta sampai 2 milliar sesuai dengan kebutuhan Anda
                </p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div class="media margbot">
              <div class="media-left">
                <div class="img-media">
                  <img src="assets/images/prosescepat.svg" />
                </div>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><strong>Proses Cepat</strong></h4>
                <p>
                  Proses persetujuan pinjaman tidak lebih dari 4 hari kerja
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CARA -->
  <div class="bg-primary-lighten">
    <div class="container">
      <div class="container-body">
        <h3 class="font-heading">Cara Kerja / Alur <span class="text-secondary">Peminjaman</span></h3>
        <div class="row">
          <div class="col-xs-12 col-md-7">
            <div class="embed-responsive embed-responsive-4by3">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UFuCnTvTdiA" frameborder="0" allowfullscreen></iframe>
            </div>
            <br />
          </div>
          <div class="col-xs-12 col-md-5">
            <!-- <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel accordion-numbering">

                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="accordion-btn">
                    <strong>Mengajukan pinjaman online dengan jaminan invoice</strong>
                    <span class="number-item">
                      1
                    </span>
                  </a>
                </h4>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                  </p>
                </div>
              </div>
              <div class="panel accordion-numbering">

                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne" class="collapsed accordion-btn">
                    <strong>Analisis &amp; persetujuan pinjaman</strong>
                    <span class="number-item">
                      2
                    </span>
                  </a>
                </h4>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <p>
                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </p>
                </div>
              </div>
              <div class="panel accordion-numbering">

                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne" class="collapsed accordion-btn">
                    <strong>Pencairan pinjaman</strong>
                    <span class="number-item">
                      3
                    </span>
                  </a>
                </h4>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <p>
                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </p>
                </div>
              </div>
              <div class="panel accordion-numbering">

                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" href="#collapse4" aria-expanded="true" aria-controls="collapseOne" class="collapsed accordion-btn">
                    <strong>Pembayaran pinjaman</strong>
                    <span class="number-item">
                      4
                    </span>
                  </a>
                </h4>
                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <p>
                    Nihil anim keffiyeh helvetica, craft beer labore wes farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </p>
                </div>
              </div>
            </div> -->

            <ul class="cara-carousel list-unstyled" id="listCara">
              <li>
                <div class="panel accordion-numbering">
                  <h4 class="panel-title">
                    <strong>Mengajukan pinjaman online dengan jaminan invoice</strong>
                    <span class="number-item">
                      1
                    </span>
                  </h4>
                  <div class="panel-collapse collapse in">
                    <p>
                      3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="panel accordion-numbering">
                  <h4 class="panel-title">
                    <strong>Analisis &amp; persetujuan pinjaman</strong>
                    <span class="number-item">
                      2
                    </span>
                  </h4>
                  <div class="panel-collapse collapse in">
                    <p>
                      Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="panel accordion-numbering">
                  <h4 class="panel-title">
                    <strong>Pencairan pinjaman</strong>
                    <span class="number-item">
                      3
                    </span>
                  </h4>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <p>
                      Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="panel accordion-numbering">
                  <h4 class="panel-title">
                    <strong>Pembayaran pinjaman</strong>
                    <span class="number-item">
                      4
                    </span>
                  </h4>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <p>
                       Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                    </p>
                  </div>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SYARAT -->
  <div class="bg-primary">
    <div class="container">
      <div class="container-body">
        <h3 class="font-heading">Syarat Utama Peminjaman</h3>
        <div class="row">
          <div class="col-xs-12 col-md-6">

            <div class="media">
              <div class="media-left">
                <i class="icon-checklist"></i>
              </div>
              <div class="media-body">
                <span class="text-body">Usia minimal 21 Tahun</span>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <i class="icon-checklist"></i>
              </div>
              <div class="media-body">
                <span class="text-body">Warga Negara Indonesia, dibuktikan dengan melampirkan data KTP</span>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <i class="icon-checklist"></i>
              </div>
              <div class="media-body">
                <span class="text-body">Mempunyai NPWP Pribadi atau Badan Usaha</span>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <i class="icon-checklist"></i>
              </div>
              <div class="media-body">
                <span class="text-body">Mempunyai Rekening Bank di Indonesia</span>
              </div>
            </div>
            <br />
          </div>
          <div class="col-xs-12 col-md-6">

            <div class="media">
              <div class="media-left">
                <i class="icon-checklist"></i>
              </div>
              <div class="media-body">
                <span class="text-body">Memiliki omzet bisnis minimal Rp. XX juta/tahun</span>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <i class="icon-checklist"></i>
              </div>
              <div class="media-body">
                <span class="text-body">Bisnis beroperasional minimal 1 tahun</span>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <i class="icon-checklist"></i>
              </div>
              <div class="media-body">
                <span class="text-body">Berdomisili di Jakarta, Bogor, Depok, Tangerang, Bekasi, &amp; Bandung</span>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <i class="icon-checklist"></i>
              </div>
              <div class="media-body">
                <span class="text-body">Badan hukum bisa berbentuk PT atau CV</span>
              </div>
            </div>

          </div>
        </div>
      </div>
   </div>
  </div>

  <!-- Testi -->
  <div class="bg-secondary">
    <div class="container">
      <div class="container-body">
        <h3 class="font-heading">Testimonial<br />Peminjam</h3>
        <div class="testi-wrapper">
          <div class="testi-carousel">
            <div class="testi-item">
              <img class="img-responsive" src="assets/images/user-testi.jpg"/>
              <div class="testi-caption">
                <p>
                  <strong>Sandra</strong><br />
                  <strong><i>Founder, Candy and Accessories</i></strong>
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae porttitor quam. Aliquam sollicitudin elit lorem, non rutrum ipsum tincidunt at. Nunc et lectus arcu.
                </p>
              </div>
            </div>
            <div class="testi-item">
              <img class="img-responsive" src="assets/images/user-testi.jpg"/>
              <div class="testi-caption">
                <p>
                  <strong>Sandra</strong><br />
                  <strong><i>Founder, Candy and Accessories</i></strong>
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae porttitor quam. Aliquam sollicitudin elit lorem, non rutrum ipsum tincidunt at. Nunc et lectus arcu.
                  Nunc vitae porttitor quam. Aliquam sollicitudin elit lorem, non rutrum ipsum tincidunt at. Nunc et lectus arcu.
                </p>
              </div>
            </div>
          </div>
          <div class="testi-car-nav">
            <button class="btn btn-link prev-testi"><i class="icon-chevron-prev"></i></button>
            <button class="btn btn-link next-testi"><i class="icon-chevron-next"></i></button>
          </div>
        </div>

      </div>
   </div>
  </div>

  <!-- MEDIA PARTNER -->
  <div class="bg-primary-lighten">
    <div class="container">
      <div class="container-body">
        <div class="partner-logo">
          <img src="assets/images/bitmap1.png" />
          <img src="assets/images/bitmap2.png" />
          <img src="assets/images/bitmap3.png" />
          <img src="assets/images/bitmap1.png" />
          <img src="assets/images/bitmap2.png" />
          <img src="assets/images/bitmap3.png" />
          <img src="assets/images/bitmap1.png" />
          <img src="assets/images/bitmap2.png" />
        </div>
      </div>
    </div>
  </div>



</div>



<?php
include 'templates/footer.php';
?>
