<?php
$title ="Pendanaan Saya";
include 'templates/header.php';
?>

<div class="wrapper">
  <div class="banner-hero">
      <div class="slider-item banner-sm" style="background-image:url(assets/images/banner-danasaya.jpg);"> </div>
  </div>

  <div>
    <div class="container">
      <div class="container-body">
        <h1 class="font-heading">Pendanaan <span class="text-secondary">Saya</span></h1>
      </div>
    </div>
  </div>

  <div class="bg-secondary">
    <div class="container">
      <div class="container-body">
        <div class="box-chart">
          <div class="row">
            <div class="col-xs-6 col-md-4">
              <div class="panel" style="background-image:url(assets/images/nominal.png);">
                <div class="panel-body">
                  <p>
                    <strong><small>Nominal Pendanaan Aktif</small></strong>
                  </p>
                  <div class="value-money">
                    <span class="text-sm">Rp</span>
                    <span class="nominal">312</span>
                    <span class="text-sm">M</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-md-4">
              <div class="panel" style="background-image:url(assets/images/total.png);">
                <div class="panel-body">
                  <p>
                    <strong><small>Total Pendanaan Diberikan</small></strong>
                  </p>
                  <div class="value-money">
                    <span class="text-sm">Rp</span>
                    <span class="nominal">312</span>
                    <span class="text-sm">M</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-md-4">
              <div class="panel" style="background-image:url(assets/images/saldo.png);">
                <div class="panel-body">
                  <p>
                    <strong><small>Saldo Cash-In-Hand</small></strong>
                  </p>
                  <div class="value-money">
                    <span class="text-sm">Rp</span>
                    <span class="nominal">312</span>
                    <span class="text-sm">M</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-md-4">
              <div class="panel" style="background-image:url(assets/images/bunga.png);">
                <div class="panel-body">
                  <p>
                    <strong><small>Total Bunga Diterima (Tanpa Pajak)</small></strong>
                  </p>
                  <div class="value-money">
                    <span class="text-sm">Rp</span>
                    <span class="nominal">312</span>
                    <span class="text-sm">M</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-md-4">
              <div class="panel" style="background-image:url(assets/images/deposit.png);">
                <div class="panel-body">
                  <p>
                    <strong><small>Total Deposit</small></strong>
                  </p>
                  <div class="value-money">
                    <span class="text-sm">Rp</span>
                    <span class="nominal">312</span>
                    <span class="text-sm">M</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-md-4">
              <div class="panel" style="background-image:url(assets/images/pengembalian.png);">
                <div class="panel-body">
                  <p>
                    <strong><small>Pengembalian Terlambat 0 Cicilan</small></strong>
                  </p>
                  <div class="value-money">
                    <span class="text-sm">Rp</span>
                    <span class="nominal">312</span>
                    <span class="text-sm">M</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div>
    <div class="container">
      <div class="container-body">
        <div>
           <ul class="nav nav-tabs nav-justified nav-responsive" role="tablist">
             <li class="active"><a href="#proses" role="tab" data-toggle="tab">Pendanaan Tersedia dan Diproses</a></li>
             <li><a href="#aktif" role="tab" data-toggle="tab">Pendanaan Aktif</a></li>
             <li><a href="#riwayat" role="tab" data-toggle="tab">Riwayat Pendanaan</a></li>
           </ul>
           <div class="tab-content">
             <div role="tabpanel" class="tab-pane active" id="proses">
               <div>
                 <h3 class="font-heading"><span class="text-secondary">Penawaran <br />Pinjaman Saat Ini</span></h2>
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

                 <nav class="text-right">
                  <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                  </ul>
                </nav>
               </div>

               <div>
                 <h3 class="font-heading"><span class="text-secondary">Daftar<br />Pendanaan Diproses</span></h2>
                 <div class="table-responsive table-shadow margbot">
                   <table class="table table-striped">
                     <thead>
                       <tr>
                         <th>Kode Pinjaman</th>
                         <th>Nama Pinjaman</th>
                         <th>Jumlah Peminjaman</th>
                         <th>No Pendanaan</th>
                         <th>Jumlah Pendanaan</th>
                         <th>Suku Bunga</th>
                         <th>Tenor</th>
                       </tr>
                     </thead>

                     <tbody>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                     </tbody>

                   </table>
                 </div>

                 <nav class="text-right">
                  <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                  </ul>
                </nav>
               </div>
             </div>

             <div role="tabpanel" class="tab-pane" id="aktif">
               <div>
                 <h3 class="font-heading"><span class="text-secondary">Aktif <br />Pinjaman Saat Ini</span></h2>
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

                 <nav class="text-right">
                  <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                  </ul>
                </nav>
               </div>

               <div>
                 <h3 class="font-heading"><span class="text-secondary">Daftar<br />Pendanaan Diproses</span></h2>
                 <div class="table-responsive margbot">
                   <table class="table table-striped">
                     <thead>
                       <tr>
                         <th>Kode Pinjaman</th>
                         <th>Nama Pinjaman</th>
                         <th>Jumlah Peminjaman</th>
                         <th>No Pendanaan</th>
                         <th>Jumlah Pendanaan</th>
                         <th>Suku Bunga</th>
                         <th>Tenor</th>
                       </tr>
                     </thead>

                     <tbody>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                     </tbody>

                   </table>
                 </div>

                 <nav class="text-right">
                  <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                  </ul>
                </nav>
               </div>
             </div>

             <div role="tabpanel" class="tab-pane" id="riwayat">
               <div>
                 <h3 class="font-heading"><span class="text-secondary">Riwayat <br />Pinjaman Saat Ini</span></h2>
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

                 <nav class="text-right">
                  <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                  </ul>
                </nav>
               </div>

               <div>
                 <h3 class="font-heading"><span class="text-secondary">Daftar<br />Pendanaan Diproses</span></h2>
                 <div class="table-responsive margbot">
                   <table class="table table-striped">
                     <thead>
                       <tr>
                         <th>Kode Pinjaman</th>
                         <th>Nama Pinjaman</th>
                         <th>Jumlah Peminjaman</th>
                         <th>No Pendanaan</th>
                         <th>Jumlah Pendanaan</th>
                         <th>Suku Bunga</th>
                         <th>Tenor</th>
                       </tr>
                     </thead>

                     <tbody>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                       <tr>
                         <td>Kode Pinjaman</td>
                         <td>Nama Pinjaman</td>
                         <td>Jumlah Peminjaman</td>
                         <td>No Pendanaan</td>
                         <td>Jumlah Pendanaan</td>
                         <td>Suku Bunga</td>
                         <td>Tenor</td>
                       </tr>
                     </tbody>

                   </table>
                 </div>

                 <nav class="text-right">
                  <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                  </ul>
                </nav>
               </div>
             </div>

           </div>
        </div>
      </div>
    </div>
  </div>

</div>



<?php
include 'templates/footer.php';
?>
