<?php
$title ="Pendanaan";
include 'templates/header.php';
?>

<div class="wrapper">
  <div class="banner-hero">
      <div class="slider-item banner-fluid" style="background-image:url(assets/images/banner-dana.jpg);">
        <div class="container">
          <div class="media media-hero">
            <div class="media-left media-middle">
              <div class="banner-caption caption-form">
                <h1>
                  Perbuat lebih banyak hal dengan uang Anda
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
                    <label>Jumlah Pendanaan</label>
                    <input type="number" class="form-control" placeholder="Masukkan nominal uang">
                    <small class="text-inverse">Minimum Jumlah Penadanaan adalah Rp 5,000,000.00</small>
                  </div>
                  <div class="form-group">
                    <label>Periode pinjaman</label>
                    <input id="ex8" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="30" data-slider-step="1" data-slider-value="24"/>
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
                  <button class="btn btn-primary btn-block">Ajukan Pendanaan Sekarang</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>


  </div>

  <!-- PENAWARAN -->
  <div class="bg-secondary">
    <div class="container">
      <div class="container-body">
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <h2 class="font-heading">
                Penawaran <br />
                Pinjaman Saat Ini
              </h2>
            </div>
            <div class="col-xs-12 col-md-6">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae porttitor quam. Aliquam sollicitudin elit lorem, non rutrum ipsum tincidunt at. Nunc et lectus arcu.
              </p>
            </div>
          </div>

          <div class="panel">
            <div class="table-responsive text-body">
              <table class="table table-unbordered margbot-none">
                <tr>
                  <td>
                    <strong>PT NSI KEMENTRIAN</strong><br />
                    Pinjaman Bisnis
                  </td>
                  <td>
                    Pinjaman<br />
                    <strong>Rp 80.000.000</strong>
                  </td>
                  <td>
                    Grade<br />
                    <strong>A++</strong>
                  </td>
                  <td>
                    Rate<br />
                    <strong>12%</strong>
                  </td>
                  <td>
                    Term<br />
                    <strong>98</strong>
                  </td>
                  <td class="td-progress">
                    <div class="clearfix">
                      <span>In Funding</span>
                      <span class="pull-right">60%</span>
                    </div>
                    <div class="progress margbot-none">
                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </td><td>
                    Batas Funding<br />
                    <strong>5 hari lagi</strong>
                  </td>
                </tr>
              </table>
            </div>
          </div>

          <div class="panel">
            <div class="table-responsive text-body">
              <table class="table table-unbordered margbot-none">
                <tr>
                  <td>
                    <strong>PT NSI KEMENTRIAN</strong><br />
                    Pinjaman Bisnis
                  </td>
                  <td>
                    Pinjaman<br />
                    <strong>Rp 80.000.000</strong>
                  </td>
                  <td>
                    Grade<br />
                    <strong>A++</strong>
                  </td>
                  <td>
                    Rate<br />
                    <strong>12%</strong>
                  </td>
                  <td>
                    Term<br />
                    <strong>98</strong>
                  </td>
                  <td class="td-progress">
                    <div class="clearfix">
                      <span>In Funding</span>
                      <span class="pull-right">30%</span>
                    </div>
                    <div class="progress margbot-none">
                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                        <span class="sr-only">30% Complete</span>
                      </div>
                    </div>
                  </td><td>
                    Batas Funding<br />
                    <strong>5 hari lagi</strong>
                  </td>
                </tr>
              </table>
            </div>
          </div>

          <div class="panel">
            <div class="table-responsive text-body">
              <table class="table table-unbordered margbot-none">
                <tr>
                  <td>
                    <strong>PT NSI KEMENTRIAN</strong><br />
                    Pinjaman Bisnis
                  </td>
                  <td>
                    Pinjaman<br />
                    <strong>Rp 80.000.000</strong>
                  </td>
                  <td>
                    Grade<br />
                    <strong>A++</strong>
                  </td>
                  <td>
                    Rate<br />
                    <strong>12%</strong>
                  </td>
                  <td>
                    Term<br />
                    <strong>98</strong>
                  </td>
                  <td class="td-progress">
                    <div class="clearfix">
                      <span>In Funding</span>
                      <span class="pull-right">70%</span>
                    </div>
                    <div class="progress margbot-none">
                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                        <span class="sr-only">70% Complete</span>
                      </div>
                    </div>
                  </td><td>
                    Batas Funding<br />
                    <strong>5 hari lagi</strong>
                  </td>
                </tr>
              </table>
            </div>
          </div>

          <div class="panel">
            <div class="table-responsive text-body">
              <table class="table table-unbordered margbot-none">
                <tr>
                  <td>
                    <strong>PT NSI KEMENTRIAN</strong><br />
                    Pinjaman Bisnis
                  </td>
                  <td>
                    Pinjaman<br />
                    <strong>Rp 80.000.000</strong>
                  </td>
                  <td>
                    Grade<br />
                    <strong>A++</strong>
                  </td>
                  <td>
                    Rate<br />
                    <strong>12%</strong>
                  </td>
                  <td>
                    Term<br />
                    <strong>98</strong>
                  </td>
                  <td class="td-progress">
                    <div class="clearfix">
                      <span>In Funding</span>
                      <span class="pull-right">60%</span>
                    </div>
                    <div class="progress margbot-none">
                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </td><td>
                    Batas Funding<br />
                    <strong>5 hari lagi</strong>
                  </td>
                </tr>
              </table>
            </div>
          </div>

          <div class="panel">
            <div class="table-responsive text-body">
              <table class="table table-unbordered margbot-none">
                <tr>
                  <td>
                    <strong>PT NSI KEMENTRIAN</strong><br />
                    Pinjaman Bisnis
                  </td>
                  <td>
                    Pinjaman<br />
                    <strong>Rp 80.000.000</strong>
                  </td>
                  <td>
                    Grade<br />
                    <strong>A++</strong>
                  </td>
                  <td>
                    Rate<br />
                    <strong>12%</strong>
                  </td>
                  <td>
                    Term<br />
                    <strong>98</strong>
                  </td>
                  <td class="td-progress">
                    <div class="clearfix">
                      <span>In Funding</span>
                      <span class="pull-right">80%</span>
                    </div>
                    <div class="progress margbot-none">
                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </td><td>
                    Batas Funding<br />
                    <strong>5 hari lagi</strong>
                  </td>
                </tr>
              </table>
            </div>
          </div>

          <div class="panel">
            <div class="table-responsive text-body">
              <table class="table table-unbordered margbot-none">
                <tr>
                  <td>
                    <strong>PT NSI KEMENTRIAN</strong><br />
                    Pinjaman Bisnis
                  </td>
                  <td>
                    Pinjaman<br />
                    <strong>Rp 80.000.000</strong>
                  </td>
                  <td>
                    Grade<br />
                    <strong>A++</strong>
                  </td>
                  <td>
                    Rate<br />
                    <strong>12%</strong>
                  </td>
                  <td>
                    Term<br />
                    <strong>98</strong>
                  </td>
                  <td class="td-progress">
                    <div class="clearfix">
                      <span>In Funding</span>
                      <span class="pull-right">20%</span>
                    </div>
                    <div class="progress margbot-none">
                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </td><td>
                    Batas Funding<br />
                    <strong>5 hari lagi</strong>
                  </td>
                </tr>
              </table>
            </div>
          </div>

        </div>
    </div>
  </div>

  <!-- PENDANAAN -->
  <div class="">
    <div class="container">
      <div class="container-body">
          <br />
          <h2 class="font-heading">
            <span class="text-secondary">Mengapa Berinvestasi Melalui</span> <span class="text-primary">INVOILA</span>
          </h2>
          <br />
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <div class="media margbot">
                <div class="media-left">
                  <div class="img-media">
                    <img src="assets/images/return.svg" />
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><strong>Return yang Menarik</strong></h4>
                  <p>
                    Dapatkan return yang lebih besar dari deposito biasa. Pendana akan langsung menerima bunga yang dibayarkan oleh Peminjam
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-6">
              <div class="media margbot">
                <div class="media-left">
                  <div class="img-media">
                    <img src="assets/images/resiko.svg" />
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><strong>Resiko Terukur</strong></h4>
                  <p>
                     Resiko yang terukur menggunakan  standar penilaian pinjaman perbankan
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
                    <img src="assets/images/flexibel.svg" />
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><strong>Pendanaan Fleksibel</strong></h4>
                  <p>
                    Dimulai dengan deposit minimal Rp. 5 juta dan dapat memilih pinjaman yang akan didanai
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-6">
              <div class="media margbot">
                <div class="media-left">
                  <div class="img-media">
                    <img src="assets/images/daftarmudah.svg" />
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><strong>Pendaftaran Mudah</strong></h4>
                  <p>
                    Proses pendaftaran cepat dan tidak memerlukan banyak dokumen
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <a href="#" class="btn btn-primary">Mulai Berinvestasi</a>
          </div>
        </div>
    </div>
  </div>

  <!-- CARA -->
  <div class="bg-primary-lighten">
    <div class="container">
      <div class="container-body">
        <h3 class="font-heading">Cara Kerja / Alur <span class="text-secondary">Pendanaan</span></h3>
        <div class="row">
          <div class="col-xs-12 col-md-7">
            <div class="embed-responsive embed-responsive-4by3">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UFuCnTvTdiA" frameborder="0" allowfullscreen></iframe>
            </div>
            <br />
          </div>
          <div class="col-xs-12 col-md-5">
            <!-- <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


              <div class="panel accordion-numbering">
                <h4 class="panel-title">
                  <a class="collapsed accordion-btn" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseThree">
                    <strong>Melakukan pendanaan</strong>
                    <span class="number-item">
                      2
                    </span>
                  </a>
                </h4>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <p>
                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </p>
                </div>
              </div>
              <div class="panel accordion-numbering">

                <h4 class="panel-title">
                  <a class="collapsed accordion-btn" role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <strong>Menerima pelunasan pinjaman</strong>
                    <span class="number-item">
                      3
                    </span>
                  </a>
                </h4>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <p>
                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </p>
                </div>
              </div>

            </div> -->
            <ul id="listCara" class="cara-carousel list-unstyled">
              <li>
                <div class="panel accordion-numbering">
                  <h4 class="panel-title">
                    <strong>Deposit dana</strong>
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
                    <strong>Melakukan pendanaan</strong>
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
                    <strong>Menerima pelunasan pinjaman</strong>
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
        <h3 class="font-heading">Syarat Utama Pendana</h3>
        <div class="row">
          <div class="col-xs-12 col-md-6">

            <div class="media">
              <div class="media-left">
                <i class="icon-checklist"></i>
              </div>
              <div class="media-body">
                <span class="text-body">Usia Minimal 17 Tahun</span>
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

            <br />
          </div>
          <div class="col-xs-12 col-md-6">

            <div class="media">
              <div class="media-left">
                <i class="icon-checklist"></i>
              </div>
              <div class="media-body">
                <span class="text-body">Mempunyai NPWP</span>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <i class="icon-checklist"></i>
              </div>
              <div class="media-body">
                <span class="text-body">Mempunyai rekening bank di Indonesia</span>
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
        <h3 class="font-heading">Testimonial<br />Pendana</h3>
        <div class="testi-wrapper">
          <div class="testi-carousel">
            <div class="testi-item">
              <img class="img-responsive" src="assets/images/user-testi2.jpg"/>
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
