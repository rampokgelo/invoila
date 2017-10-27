<?php
$title ="Home";
include 'templates/header.php';
?>

<div class="wrapper">
  <div class="banner-hero">
    <div class="banner-slider">
      <div class="slider-item" style="background-image:url(assets/images/big-banner.jpg);">
        <div class="banner-caption">
          <h2>
            Dukung pertumbuhan bisnis lokal
            yang lebih inklusif dan inovatif
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae porttitor quam.
            Aliquam sollicitudin elit lorem, non rutrum ipsum tincidunt at. Nunc et lectus arcu.
          </p>
          <a href="#" class="btn-text-inverse">Baca Selengkapnya <i class="icon-arrow"></i></a>
        </div>
      </div>
      <div class="slider-item" style="background-image:url(assets/images/big-banner.jpg);">
        <div class="banner-caption">
          <h2>
            Dukung pertumbuhan
            yang lebih inklusif dan inovatif
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et lectus arcu.
          </p>
          <a href="#" class="btn-text-inverse">Baca Selengkapnya <i class="icon-arrow"></i></a>
        </div>
      </div>
    </div>
    <div class="banner-hero-nav">
      <div class="container">
        <button class="btn btn-link prev-hero"><i class="icon-chevron-prev"></i></button>
        <button class="btn btn-link next-hero"><i class="icon-chevron-next"></i></button>
      </div>
    </div>
  </div>

  <!-- SEKILAS -->
  <div class="bg-secondary">
    <div class="container">
      <div class="container-body">
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <h1>Sekilas <br />Mengenai <span class="text-primary">INVOILA</span></h1>
            <br />
            <p>
              <a href="#" class="btn-text-inverse">INVOILA Funding Societies <i class="icon-arrow"></i></a>
            </p>
          </div>
          <div class="col-xs-12 col-md-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae porttitor quam. Aliquam sollicitudin elit lorem, non rutrum ipsum tincidunt at. Nunc et lectus arcu.
            </p>
            <br />
          </div>
        </div>
      </div>
     </div>
  </div>

  <!-- Meminjam & Invest -->
  <div class="">
    <div class="container">
      <div class="container-body">
        <!-- TABS -->
        <div>
           <ul class="nav nav-tabs nav-justified" role="tablist">
             <li role="presentation" class="active"><a href="#pinjam" aria-controls="pinjam" role="tab" data-toggle="tab">Meminjam</a></li>
             <li role="presentation"><a href="#invest" aria-controls="invest" role="tab" data-toggle="tab">Berinvestasi</a></li>
           </ul>
           <div class="tab-content">
             <div role="tabpanel" class="tab-pane active" id="pinjam">
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
               <div class="text-center">
                 <a href="#" class="btn btn-primary">Ajukan Pinjaman</a>
               </div>
             </div>

             <div role="tabpanel" class="tab-pane" id="invest">
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
      </div>
    </div>
  </div>

  <!-- BOX & MEDIA PARTNER -->
  <div class="bg-primary-lighten">
    <div class="container">
      <div class="container-body">
        <div class="box-reward">
          <div class="left-reward">
              <div class="media">
                <div class="media-body media-middle">
                  <div class="text-right">
                    Dapatkan<br />
                    <i>Reward hingga</i>
                  </div>
                </div>
                <div class="media-right media-middle">
                  <span class="percent">0,5%</span>
                </div>
              </div>
          </div>
          <div class="right-reward">
            <p>
              Dapatkan reward hingga 0,5% dari total pinjaman
              untuk setiap pendanaan dan pinjaman anggota yang Anda rujuk.
            </p>
            <br />
            <a href="#" class="btn-text">Pelajari Lebih Lanjut <i class="icon-arrow"></i></a>
          </div>
        </div>
        <h3 class="font-heading">Media Partner</h3>
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
